<?php
// inclusion de l'autoload composer qui permet
// de ne pas faire les inclusions de classes a la main
require_once "init.php";
// demarre notre application
$page = new \Controller\PageController($pdo);
// afficher la page demandee
$page->displayAction();