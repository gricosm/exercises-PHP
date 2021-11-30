<table class="table is-bordered is-hoverable has-text-centered">

        <thead class="thead"> 
            <tr><h1 class="title is-1">PLATOS VARIOS</h1></tr>
            <tr><th class="subtitle">Plato</th><th class="subtitle">Comensales</th><th class="subtitle">Tipo</th><th class="subtitle">Ingredientes</th></tr>
        </thead>

        <tbody class="tbody">
            <?php
                include_once 'data.php';
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