<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02-PHP-Paskaita</title>
</head>

<body>

    <!-- Post  metodas - perduodama informacija nematomai -->
    <!-- Get - informcija perduodama per nuoroda -->
    <form action="veiksmas.php" method="Get">
        <input type="text" value="115" name="skaicius1" />
        <input type="text" value="115" name="skaicius2" />
        <button type="submit">Patvirtinti</button>
    </form>

    <?php
    //Operatoriai ir matematiniai veiksmai
    $sk1 = 10;
    $sk2 = 15;

    //Suma
    $suma = $sk1 + $sk2;
    echo $suma;

    echo "<br>";
    //Atimtis
    $atimtis = $sk1 - $sk2;
    echo $atimtis;

    echo "<br>";
    //Daugyba
    $daugyba = $sk1 * $sk2;
    echo $daugyba;

    echo "<br>";
    //Dvi dalybos: paprasta dalyba ir liekana
    $dalyba = $sk1 / $sk2;
    echo $dalyba;

    echo "<br>";
    //Dalyba su liekana
    $dalybosSveikojiDalis = intval($dalyba); //Dalybos rezultatas bus 0
    echo $dalybosSveikojiDalis;


    echo "<br>";
    //Liekanos skaiciavimas
    $liekana = $sk1 % $sk2;
    echo $liekana;


    echo "<br>";
    //Kvadratine Saknis
    $saknis = sqrt($sk1);
    echo $saknis;

    echo "<br>";
    //Kelimas laipsniu
    $laipsnis = $sk1 ** $sk2;
    echo $laipsnis;


    echo "<br>";
    //Bet kokio laipsnio saknis
    $sk1 = 16;
    $ntojisaknis = $sk1 ** (1 / 4);
    echo $ntojisaknis;



    echo "<br>";
    //matematiniai veiksmai
    $sk1 = 16;
    $veiksmas = 2 * (2 + 2);
    echo $veiksmas;
    ?>

    <?php
    //Tekstas + Skaicius

    echo "<br>";
    $skaicius = 205;
    $tekstas = "Labas";

    $suma = $skaicius . $tekstas;
    echo $suma;

    echo "<br>";
    $tekstas1 = "Labas1";
    $tekstas2 = "Labas2";
    $sujunk = $tekstas1 . " " . $tekstas2;
    echo $sujunk;

    ?>

    <?php
    $a = 2;
    $b = 5;
    $a = $b;


    //Sutrumpinimai
    $a += $b; //$a = $a + $b // 10, pries tai $a pakeitem i $b
    $a -= $b; //$a = $a - $b // 5, 
    $a *= $b; //$a = $a * $b // 25,
    $a /= $b; //$a = $a / $b // 5,
    $a %= $b; //$a = $a % $b // 0,


    //i++;
    $a++; // 1
    $b--; // 4

    ?>

    <?php

    echo "<br>";

    //Salygos sakinys
    $ska = 5;
    $skb = 12;

    //jeigu ska > skb, atvaizduoti siu skaiciu suma, kitu atveju atvaizduoti siu skaiciu saundauga
    if ($ska > $skb) {
        $suma = $ska + $skb;
        echo $suma;
    } else {
        $sandauga = $ska * $skb;
        echo $sandauga;
    }

    echo "<br>";

    //Patikrinti ar trikampis yra status, bukasis, smailus
    $a = 3; // Statusis trikampis
    $b = 4;
    $c = 5;

    if ($c * $c == $a * $a + $b * $b) {
        echo "Trikampis yra statusis";
    } else if ($c * $c > $a * $a + $b * $b) {
        echo "Trikampis yra bukasis";
    } else {
        echo "Trikampis yra smailusis";
    }





    // 1.Suprogramuokite skriptą, kuris rastų didžiausią skaičių iš dviejų aprašytų.
    //   *Rezultatas išvedamas neaktyviame(disabled) input laukelyje.
    //   *Abu skaiciai paimami is input laukeliu

    echo "<br>";
    $pirmas = 1;
    $antras = 1;
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




    ?>

    <!-- 3 budas kaip isvesti -->

    <input class='neaktyvus' disabled='true' value='<?php echo $maksimalus; ?>' />




</body>

</html>