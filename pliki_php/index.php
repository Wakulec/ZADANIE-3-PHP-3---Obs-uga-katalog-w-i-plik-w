<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Moje pliki</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>MOJE PLIKI</h1>

<?php

// Pokazanie aktualnego katalogu
echo "<p>Aktualny katalog:</p>";
echo getcwd();

echo "<h2>ZAWARTOŚĆ KATALOGU</h2>";

// Nazwa katalogu
$katalog = "dokumenty";

// Sprawdzenie, czy katalog istnieje
if (!file_exists($katalog)) {
    mkdir($katalog);
}

// Pobranie zawartości katalogu
$pliki = scandir($katalog);

echo "<table>";

echo "<tr>";
echo "<th>Nazwa</th>";
echo "<th>Typ</th>";
echo "</tr>";

// Wyświetlanie plików i katalogów
foreach ($pliki as $plik) {

    if ($plik == "." || $plik == "..") {
        continue;
    }

    $sciezka = $katalog . "/" . $plik;

    echo "<tr>";

    echo "<td>" . $plik . "</td>";

    if (is_file($sciezka)) {
        echo "<td>PLIK</td>";
    }

    if (is_dir($sciezka)) {
        echo "<td>KATALOG</td>";
    }

    echo "</tr>";
}

echo "</table>";

?>

</body>
</html>