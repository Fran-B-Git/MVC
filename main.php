<?php
require_once("Monster.php");
require_once("showMonster.php");
require_once("monsterController.php");


$monsters = new Monster();
$view = new showMonster();

$controller = new monsterController($monsters, $view);

if ($argc > 1)
    $controller->displayMonster($argv[1]);