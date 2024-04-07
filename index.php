<?php

require_once( 'vendor/autoload.php' );
include( 'db.php' );

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$enlaces = getEnlaces();

echo "Enlaces: ";

foreach ($enlaces as $enlace) {
    echo $enlace['title'] . " ";
}

echo $twig->render('main.html', ['enlaces' => $enlaces]);
?>