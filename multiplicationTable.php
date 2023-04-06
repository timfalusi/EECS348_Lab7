<?php
    $num = $_GET["number"];

    echo "<table>";
    echo "<tr><th>&nbsp;</th>"; // blank cell at top left corner of table
    for ($i = 1; $i <= $num; $i++) {
        echo "<th>$i</th>"; // column indexes
    }
    echo "</tr>";

    for ($i = 1; $i <= $num; $i++) {
        echo "<tr>";
        echo "<th>$i</th>"; // row index
        for ($j = 1; $j <= $num; $j++) {
            echo "<td>" . ($i * $j) . "</td>"; // multiplication result
        }
        echo "</tr>";
    }

    echo "</table>";
?>
