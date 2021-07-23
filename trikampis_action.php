<style>
    .zalia {
        background-color: green;
    }

    .raudona {
        background-color: red;
    }
</style>



<?php
//    Patikrinkite, ar iš trijų įvestų trikampio kraštinių galima sudaryti trikampį.
//    Papildykite  užduotį:
//    *Patikrinkite, ar trikampis yra lygiakraštis, lygiašonis ar įvairiakraštis
//    *Patikrinkite, ar trikampis yra statusis, bukasis ar smailusis.


//Tikrinam ar kintamieji egzistuoja ir yra netusti
//kintamuju pasiemimas pagal $_GET arba $_POST
//atliekami veiksmai
//isvedamas rezultatas


$rezultatoZinute = "";
$rezultatoKlase = "";

if ((isset($_GET["krastinea"]) && !empty($_GET["krastinea"]) && isset($_GET["krastineb"]) && !empty($_GET["krastineb"])) && isset($_GET["krastinec"]) && !empty($_GET["krastinec"])) {

    $rezultatoKlase = "zalia";
    $krastinea = $_GET["krastinea"];
    $krastineb = $_GET["krastineb"];
    $krastinec = $_GET["krastinec"];


    if ($krastinea + $krastineb > $krastinec && $krastineb + $krastinec > $krastinea && $krastinea + $krastinec > $krastineb) {

        //Pagal krastines
        if ($krastinea != $krastineb && $krastineb != $krastinec && $krastinec != $krastinea) {
            $rezultatoZinute = "Trikampis yra ivairiakrastis";
        } else if ($krastinea == $krastineb && $krastineb == $krastinec && $krastinea == $krastinec) {
            $rezultatoZinute = "Trikampis yra lygiakrastis";
        } else {
            $rezultatoZinute = "Trikampis yra lygiasonis";
        }



        //Pagal kampus

        if ($krastinec * $krastinec == $krastinea * $krastinea + $krastineb * $krastineb) {
            $rezultatoZinute .= "<br>Trikampis yra statusis";
        } else if ($krastinec * $krastinec > $krastinea * $krastinea + $krastineb * $krastineb) {
            $rezultatoZinute .= "<br>Trikampis yra bukasis";
        } else {
            $rezultatoZinute .= "<br>Trikampis yra smailusis";
        }
    } else {
        $rezultatoZinute = "<br>Trikampio sudaryti negalima";
    }
} else {
    $rezultatoKlase = "raudona";
    $rezultatoZinute = "Kazkas negerai, tikrinkite kintamuosius";
}


?>

<div class="zinute <?php echo $rezultatoKlase ?>">
    <?php echo $rezultatoZinute ?>
</div>