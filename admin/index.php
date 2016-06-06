<?php
    /**
     * Created by PhpStorm.
     * User: alexandrevagnair
     * Date: 27/05/2016
     * Time: 16:42
     */
    chdir($appRoot = dirname(__DIR__));
    require_once 'init.php';
// demarre notre application
    $page = new \Controller\PageController($pdo);
// afficher la page demandee
    $action = 'home';
// recuperation du slug du parametre d'url si present
    if (isset($_GET['a'])) {
        $action = $_GET['a'];
    }
    switch ($action) {
        case 'ajouter':
            $page->ajoutAction();
            break;
        case 'modifier':
            $page->modifierAction();
            break;
        case 'supprimer':
            $page->supprimerAction();
            break;
        case 'details':
            $page->detailsAction();
            break;
        case 'lister':
        default:
            $page->listeAction();
            break;
    }