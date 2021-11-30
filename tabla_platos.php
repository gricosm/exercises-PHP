<!DOCTYPE html>
<html>
<head>
    <title>Prueba de PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma-rtl.min.css">
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

<table class="table is-bordered is-hoverable">

    <thead class="thead"> 
        <tr><h1 class="title is-1">PLATOS VARIOS</h1></tr>
        <tr><th class="subtitle">Plato</th><th class="subtitle">Comensales</th><th class="subtitle">Tipo</th><th class="subtitle">Ingredientes</th></tr>
    </thead>

    <tbody class="tbody">
        <?php
            $max = count($platos);
            for ($i = 0; $i < $max; $i++)
            {
                echo '<tr class="th">';
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
    </tbody>

</table>

</body>
</html>