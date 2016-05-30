<?php
/**
 * Created by PhpStorm.
 * User: alexandrevagnair
 * Date: 27/05/2016
 * Time: 16:42
 */
require_once '../init.php';
// demarre notre application
$page = new \Controller\PageController($pdo);
// afficher la page demandee
$action = 'home';
// recuperation du slug du parametre d'url si present
if (isset($_GET['a'])) {
    $action = $_GET['a'];
}
switch($action){
    case 'ajouter':
<<<<<<< HEAD
        break;
    case 'modifier':
        break;
    case 'supprimer':
        break;
    case 'details':
=======
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
>>>>>>> e1f7de0640661a942d7de936d8c543180c9d485c
        break;
    case 'lister':
    default:
        $page->listeAction();
        break;
}