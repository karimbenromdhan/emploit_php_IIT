<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tp 02</title>
</head>
<body>
<?php
function affichage($tab)
{
    echo "<pre>";
    print_r($tab);
    echo "</pre>";
}
$matieres = ["java" => [14, 15], "html" => [13, 18], "php" => [17, 15]];
affichage($matieres);
$etudiants = ["ali" => ["java" => [14, 5], "html" => [13, 15], "php" => [17, 14]], "salah" => ["java" => [12, 13], "html" => [10, 14.5], "php" => [13, 4]], "sami" => ["java" => [10, 15], "html" => [13.5, 18], "php" => [15, 19]],
];
affichage($etudiants);

echo "<hr>";

$tab5 = ["java", "html", "js", "css", "angular", "nodejs"];
//comment parcourir un tableau avec une boucle
echo "<table border=1><tr><th>Nom matiere</th></tr>";
for ($i = 0; $i < sizeof($tab5); $i++) {
    echo "<tr><td>$tab5[$i]</td></tr>";
}
echo "</table>";

?>
</body>
</html>