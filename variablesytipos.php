<html>
<head>
    <title>Prueba de PHP</title>
</head>
<body>
<?php 
$platos = [
    [
        "titulo" => "Macarrones",
        "comensales" => 2,
        "tipo" => "Primero",
        "ingredientes" => ["Pasta"]
    ],
    [
        "titulo" => "Migas",
        "comensales" => 4,
        "tipo" => "Primero",
        "ingredientes" => ["Pan", "Ajo"]
    ],
    [
        "titulo" => "Pizza",
        "comensales" => 3,
        "tipo" => "Completo",
        "ingredientes" => ["Un teléfono y el número del Telepi más cercano.", "Paciencia"]
    ]
];

?>

<table>

    <thead>
        <tr><h1>PLATOS VARIOS</h1></tr>
        <tr><th>Plato</th><th>Comensales</th><th>Tipo</th><th>Ingredientes</th></tr>
    </thead>


<?php
    $max = count($platos);
    for ($i = 0; $i < $max; $i++)
    {
        echo '<tr>';
        echo "<td>{$platos[$i]['titulo']}</td>";
        echo "<td>{$platos[$i]['comensales']}</td>";
        echo "<td>{$platos[$i]['tipo']}</td>";
            echo "<td><ul>";
                $ingmax = count($platos[$i]["ingredientes"]);
                for ($j = 0; $j < $ingmax; $j++)
                {
                    echo "<li>{$platos[$i]['ingredientes'][$j]}</li>";
                }
            echo "</ul></td>";
        echo '</tr>';
    }
?>

</table>

</body>
</html>