<?php

function printTableContent(array $plato) : bool {
    echo '<tr class="th">';
    echo "<td>{$plato['titulo']}</td>";
    echo "<td>{$plato['comensales']}</td>";
    echo "<td>{$plato['tipo']}</td>";
        echo "<td><ul>";
            $ingmax = count($plato["ingredientes"]);
            for ($j = 0; $j < $ingmax; $j++)
            {
                echo "<li>{$plato['ingredientes'][$j]}</li>";
            }
        echo "</ul></td>";
    echo '</tr>';

    return true;
}
