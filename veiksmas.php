<?php 

//isset
//empty
if(isset($_GET["skaicius1"]) && !empty($_GET["skaicius1"]) && isset($_GET["skaicius2"]) && !empty($_GET["skaicius2"])) {
$pirmas = $_GET["skaicius1"];
$antras = $_GET["skaicius2"];
$maksimalus = 0;

if ($pirmas  > $antras) {
    $maksimalus = $pirmas;
} else if ($pirmas  < $antras) {
    $maksimalus = $antras;
} else {
    $maksimalus = "Abu skaiciai lygus";
}

// 1 budas kaip isvesti
echo "<input class='neaktyvus' disabled='true' value='$maksimalus' />";


// 2 budas kaip isvesti
echo "<input class='neaktyvus' disabled='true' value='" . $maksimalus . "' />";
} else {
    echo "Kazkas negerai, kinetamieji tusti arba neegzistuoja";
}
?>