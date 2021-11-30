<!DOCTYPE html>
<html>
<head>
    <title>Prueba de PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <table>
        <tbody>
            <?php
                echo '<tr>';
                for ($i = 1; $i < 11; $i++){
                    for ($j = 1; $j < 11; $j++){
                    echo "<td>$i * $j</td>";
                    }
                }
                echo '</tr>';
            ?>
        </tbody>
    </table>
</body>
</html>