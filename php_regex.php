<?php

$file = fopen("./results_6aeb6252-c531-449d-bf29-e11193358b8c.csv", "r");

while (!feof($file)) {
    $line = fgets($file);
    echo $line;
}
fclose($file);