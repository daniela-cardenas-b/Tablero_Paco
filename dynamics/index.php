<?php

$size = $_POST["size"];

echo "<table border='2'>";

for ($i = 0; $i < $size; $i++) {
    echo "<tr>";

    for ($j = 0; $j < $size; $j++) {
        if ($i % 2 === $j % 2) {
            echo "<td>+</td>";
        } else {
            echo "<td>-</td>";
        }
    }

    echo "</tr>";
}

echo "</table>";

?>
