<?php
require_once( 'vendor/autoload.php' );
include( 'db.php' );

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$skills = getSkills();
$projects = getProjects();

echo $twig->render('about.html', ['skills' => $skills, 'projects' => $projects]);
?>