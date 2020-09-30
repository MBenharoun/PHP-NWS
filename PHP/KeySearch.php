<?php
$tabs = array();
$file = file_get_contents('fichier.txt');
explode(PHP_EOL, $file );

foreach ($file as $elements)
{
$tableau = explode(':',$elements);
$tableau[0];

$tabs[$$tableau[0]] = $tableau[1];

}

var_dump($file);