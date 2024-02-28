<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp02</title>
</head>
<body>
    <?php
$tab6=["java"=>[14,15,8],"html"=>[12.5,15,11],"js"=>[19.25,13,17],"css"=>[12,17,15],"angular"=>[8,14,13],"nodejs"=>[12,10,12]];
//header du tableau
echo "<table border=1>
<tr>
<th>nom matiere</th>
<th>note1</th>
<th>note2</th>
<th>note3</th>
<th>Moyenne</th>
</tr>";
//utiliser la boucle foreach pour parcourir le tableau
foreach ($tab6 as $key => $value) {
echo "<tr>
<td>$key</td>";
$total =0;
for ($i = 0; $i < sizeof($value); $i++) {
    $total =  $total+$value[$i];
    echo "<td>$value[$i]</td>";
        $aa=$i+1;
        $moyenne = $total/$aa;  
}
echo "<td>".round($moyenne,2)."</td>";
echo "</tr>";
} 

    ?>
</body>
</html>