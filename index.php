<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadania PHP - Instrukcje warunkowe</title>
    <style>
        body {
            background-color: #ffffff;
            color: #000000;
            font-family: Arial, sans-serif;
            margin: 30px;
            line-height: 1.6;
        }

        .zadanie {
            margin-bottom: 15px;
            padding: 10px;
            border-bottom: 1px solid #eee;
        }

        .tytul {
            font-weight: bold;
            color: #333;
        }

        .wynik {
            color: #0066cc;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h2>Wyniki zadań PHP</h2>

    <!-- Zadanie 1 -->
    <div class="zadanie">
        <span class="tytul">Zad 1 (Równanie x = a / b):</span>
        <?php
            $a = 10; $b = 2;
            if ($b == 0) {
                echo "<span class='wynik'>Błąd: Dzielenie przez zero jest niewykonalne!</span>";
            } else {
                $x = $a / $b;
                echo " Dla a=$a, b=$b, wynik x = <span class='wynik'>$x</span>";
            }
        ?>
    </div>

    <!-- Zadanie 2 -->
    <div class="zadanie">
        <span class="tytul">Zad 2 (Równanie x = a/b + c/d):</span>
        <?php
            $a = 10; $b = 2; $c = 6; $d = 3;
            if ($b == 0 || $d == 0) {
                echo "<span class='wynik'>Błąd: Pamiętaj, że mianowniki b i d nie mogą wynosić 0!</span>";
            } else {
                $x = ($a / $b) + ($c / $d);
                echo " Dla a=$a, b=$b, c=$c, d=$d, wynik x = <span class='wynik'>$x</span>";
            }
        ?>
    </div>

    <!-- Zadanie 3 -->
    <div class="zadanie">
        <span class="tytul">Zad 3 (Równanie x = (a+6) / (b-4)):</span>
        <?php
            $a = 4; $b = 4;
            if (($b - 4) == 0) {
                echo "<span class='wynik'>Błąd: Mianownik (b - 4) wynosi 0! Dzielenie niemożliwe.</span>";
            } else {
                $x = ($a + 6) / ($b - 4);
                echo " Dla a=$a, b=$b, wynik x = <span class='wynik'>$x</span>";
            }
        ?>
    </div>

    <!-- Zadanie 4 -->
    <div class="zadanie">
        <span class="tytul">Zad 4 (Liczba parzysta):</span>
        <?php
            $liczba = 8;
            if ($liczba % 2 == 0) {
                echo " Liczba $liczba jest <span class='wynik'>parzysta</span>.";
            } else {
                echo " Liczba $liczba jest <span class='wynik'>nieparzysta</span>.";
            }
        ?>
    </div>

    <!-- Zadanie 5 -->
    <div class="zadanie">
        <span class="tytul">Zad 5 (Podzielność dwóch liczb):</span>
        <?php
            $l1 = 15; $l2 = 5;
            if ($l2 == 0) {
                echo "<span class='wynik'>Nie można dzielić przez zero!</span>";
            } elseif ($l1 % $l2 == 0) {
                echo " Liczba $l1 <span class='wynik'>jest podzielna</span> przez $l2.";
            } else {
                echo " Liczba $l1 <span class='wynik'>nie jest podzielna</span> przez $l2.";
            }
        ?>
    </div>

    <!-- Zadanie 6 -->
    <div class="zadanie">
        <span class="tytul">Zad 6 (Dodatnia, ujemna czy zero):</span>
        <?php
            $liczba = -5;
            if ($liczba > 0) {
                echo " Liczba $liczba jest <span class='wynik'>dodatnia</span>.";
            } elseif ($liczba < 0) {
                echo " Liczba $liczba jest <span class='wynik'>ujemna</span>.";
            } else {
                echo " Liczba jest <span class='wynik'>równa 0</span>.";
            }
        ?>
    </div>

    <!-- Zadanie 7 -->
    <div class="zadanie">
        <span class="tytul">Zad 7 (Największa z trzech liczb):</span>
        <?php
            $n1 = 12; $n2 = 45; $n3 = 23;
            $max = max($n1, $n2, $n3);
            echo " Liczby: $n1, $n2, $n3. Największa to: <span class='wynik'>$max</span>";
        ?>
    </div>

    <!-- Zadanie 8 -->
    <div class="zadanie">
        <span class="tytul">Zad 8 (Sortowanie rosnąco trzech liczb):</span>
        <?php
            $tablica = [34, 12, 89];
            $oryginalne = implode(", ", $tablica);
            sort($tablica);
            echo " Liczby: $oryginalne &rarr; W kolejności rosnącej: <span class='wynik'>" . implode(", ", $tablica) . "</span>";
        ?>
    </div>

    <!-- Zadanie 9 -->
    <div class="zadanie">
        <span class="tytul">Zad 9 (Sprawdzenie pełnoletniości):</span>
        <?php
            $dataUrodzenia = "2006-05-15"; 
            $dzisiaj = date("Y-m-d");

            $wiek = date_diff(date_create($dataUrodzenia), date_create($dzisiaj))->y;

            if ($wiek >= 18) {
                echo " Data urodzenia: $dataUrodzenia. Osoba ma $wiek lat – jest <span class='wynik'>pełnoletnia</span>.";
            } else {
                echo " Data urodzenia: $dataUrodzenia. Osoba ma $wiek lat – jest <span class='wynik'>niepełnoletnia</span>.";
            }
        ?>
    </div>

    <!-- Zadanie 10 -->
    <div class="zadanie">
        <span class="tytul">Zad 10 (Rozpoznawanie znaku):</span>
        <?php
            $znak = 'A';
            if (ctype_upper($znak)) {
                echo " Znak '$znak' to <span class='wynik'>duża litera</span>.";
            } elseif (ctype_lower($znak)) {
                echo " Znak '$znak' to <span class='wynik'>mała litera</span>.";
            } elseif (ctype_digit($znak)) {
                echo " Znak '$znak' to <span class='wynik'>cyfra</span>.";
            } else {
                echo " Znak '$znak' to <span class='wynik'>inny znak</span>.";
            }
        ?>
    </div>

    <!-- Zadanie 11 -->
    <div class="zadanie">
        <span class="tytul">Zad 11 (Palindrom 3-cyfrowy):</span>
        <?php
            $liczba = 353;
            $tekst = (string)$liczba;

            if (strlen($tekst) == 3 && $tekst[0] == $tekst[2]) {
                echo " Liczba $liczba <span class='wynik'>jest palindromem</span>.";
            } else {
                echo " Liczba $liczba <span class='wynik'>nie jest palindromem</span> (lub nie jest 3-cyfrowa).";
            }
        ?>
    </div>

    <!-- Zadanie 12 -->
    <div class="zadanie">
        <span class="tytul">Zad 12 (Warunki dla liczby dwucyfrowej):</span>
        <?php
            $liczba = 22;
            if ($liczba >= 0 && $liczba <= 99) {
                $c1 = floor($liczba / 10); 
                $c2 = $liczba % 10;        

                $czyParzyste = ($c1 % 2 == 0) && ($c2 % 2 == 0);
                $sumaWynosi4 = ($c1 + $c2) == 4;

                if ($czyParzyste || $sumaWynosi4) {
                    echo " dla liczby $liczba: <span class='wynik'>Warunek spełniony</span> (Cyfry parzyste: " . ($czyParzyste ? "TAK" : "NIE") . ", Suma=4: " . ($sumaWynosi4 ? "TAK" : "NIE") . ")";
                } else {
                    echo " dla liczby $liczba: <span class='wynik'>Warunek NIE został spełniony</span>.";
                }
            } else {
                echo "<span class='wynik'>Podana liczba nie jest max dwucyfrowa!</span>";
            }
        ?>
    </div>

    <!-- Zadanie 13 -->
    <div class="zadanie">
        <span class="tytul">Zad 13 (Ocena na podstawie punktów):</span>
        <?php
            $pkt = 82;
            $ocena = "";

            if ($pkt >= 0 && $pkt <= 29) {
                $ocena = "niedostateczna";
            } elseif ($pkt >= 30 && $pkt <= 59) {
                $ocena = "dopuszczająca";
            } elseif ($pkt >= 60 && $pkt <= 74) {
                $ocena = "dostateczna";
            } elseif ($pkt >= 75 && $pkt <= 89) {
                $ocena = "dobra";
            } elseif ($pkt >= 90 && $pkt <= 99) {
                $ocena = "bardzo dobra";
            } elseif ($pkt == 100) {
                $ocena = "celująca";
            } else {
                $ocena = "Nieprawidłowa liczba punktów!";
            }

            echo " Punkty: $pkt &rarr; Ocena: <span class='wynik'>$ocena</span>";
        ?>
    </div>

</body>
</html>