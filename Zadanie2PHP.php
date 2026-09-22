<?php

// 1.
$a1 = 10; $b1 = 2;
if ($b1 == 0) {
    echo "1. Błąd: Nie można dzielić przez zero<br>";
} else {
    echo "1. Wynik x = " . ($a1 / $b1) . "<br>";
}

// 2.
$a2 = 10; $b2 = 2; $c2 = 4; $d2 = 2;
if ($b2 == 0 || $d2 == 0) {
    echo "2. Błąd: Mianownik nie może być równy zero<br>";
} else {
    echo "2. Wynik x = " . (($a2 / $b2) + ($c2 / $d2)) . "<br>";
}

// 3.
$a3 = 4; $b3 = 6;
if ($b3 - 4 == 0) {
    echo "3. Błąd: Dzielenie przez zero<br>";
} else {
    echo "3. Wynik x = " . (($a3 + 6) / ($b3 - 4)) . "<br>";
}

// 4.
$liczba4 = 7;
if ($liczba4 % 2 == 0) {
    echo "4. Liczba $liczba4 jest parzysta.<br>";
} else {
    echo "4. Liczba $liczba4 jest nieparzysta.<br>";
}

// 5.
$a5 = 15; $b5 = 5;
if ($b5 == 0) {
    echo "5. Błąd: Druga liczba nie może być zerem.<br>";
} elseif ($a5 % $b5 == 0) {
    echo "5. Liczba $a5 jest podzielna przez $b5.<br>";
} else {
    echo "5. Liczba $a5 NIE jest podzielna przez $b5.<br>";
}

// 6.
$liczba6 = -5;
if ($liczba6 > 0) {
    echo "6. Liczba jest dodatnia.<br>";
} elseif ($liczba6 < 0) {
    echo "6. Liczba jest ujemna.<br>";
} else {
    echo "6. Liczba jest równa 0.<br>";
}

// 7.
$a7 = 12; $b7 = 25; $c7 = 7;
$max7 = $a7;
if ($b7 > $max7) { $max7 = $b7; }
if ($c7 > $max7) { $max7 = $c7; }
echo "7. Największa liczba to: $max7<br>";

// 8.
$a8 = 34; $b8 = 12; $c8 = 22;
$liczby8 = [$a8, $b8, $c8];
sort($liczby8);
echo "8. Rosnąco " . implode(", ", $liczby8) . "<br>";

// 9.
$dataUrodzenia = "2005-04-12";
$wiek = (new DateTime())->diff(new DateTime($dataUrodzenia))->y;
if ($wiek >= 18) {
    echo "9. Osoba pełnoletnia ($wiek lat).<br>";
} else {
    echo "9. Osoba NIEpełnoletnia ($wiek lat).<br>";
}

// 10.
$znak = 'G';
if (ctype_upper($znak)) {
    echo "10. Znak '$znak' to duża litera.<br>";
} elseif (ctype_lower($znak)) {
    echo "10. Znak '$znak' to mała litera.<br>";
} elseif (ctype_digit($znak)) {
    echo "10. Znak '$znak' to cyfra.<br>";
} else {
    echo "10. Znak '$znak' to inny znak.<br>";
}

// 11.
$liczba11 = 363;
if (strval($liczba11) === strrev(strval($liczba11))) {
    echo "11. Liczba $liczba11 jest palindromem.<br>";
} else {
    echo "11. Liczba $liczba11 NIE jest palindromem.<br>";
}

// 12.
$liczba12 = 22;
$cyfra1 = floor($liczba12 / 10);
$cyfra2 = $liczba12 % 10;
if (($cyfra1 % 2 == 0 && $cyfra2 % 2 == 0) || ($cyfra1 + $cyfra2 == 4)) {
    echo "12. Warunek cyfr spełniony.<br>";
} else {
    echo "12. Warunek cyfr NIE spełniony.<br>";
}

// 13.
$punkty = 73;
if ($punkty < 0 || $punkty > 100) { echo "13. Niepoprawne punkty.<br>"; }
elseif ($punkty <= 29) { echo "13. Ocena niedostateczna<br>"; }
elseif ($punkty <= 59) { echo "13. Ocena dopuszczająca<br>"; }
elseif ($punkty <= 74) { echo "13. Ocena dostateczna<br>"; }
elseif ($punkty <= 89) { echo "13. Ocena dobra<br>"; }
elseif ($punkty <= 99) { echo "13. Ocena bardzo dobra<br>"; }
else { echo "13. Ocena celująca<br>"; }

?>
