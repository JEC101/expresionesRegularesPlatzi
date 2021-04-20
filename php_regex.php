<?php

$file = fopen("./results_6aeb6252-c531-449d-bf29-e11193358b8c.csv", "r");

$match   = 0;
$nomatch = 0;
$t = time();

while (!feof($file)) {
    $line = fgets($file);
    if(preg_match(
        '/^(\d{4}\-\d\d\-\d\d),(.+),(.+),(\d+),(\d+),.*$/i',
        $line,
        $m
    )) {
        if($m[4] == $m[5]) {
            echo "Empate:  ";
        } elseif ($m[4] > $m[5]) {
            echo "Local:  ";
        } else {
            echo "Visitante:";
        }
        printf("\t%s %d - %d %s\n", $m[2], $m[4], $m[5], $m[3]);
        $match++;
    } else {
        $nomatch++;
    }
}
fclose($file);

printf("\n\nmatch: %d\nno match: %d\n", $match, $nomatch);

printf("tiempo: %d\n", time() - $t);