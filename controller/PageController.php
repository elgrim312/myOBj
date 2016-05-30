<?php
namespace Controller;

use Model\PageRepository;

/**
 * Class PageController
 * @author Yann Le Scouarnec <yann.le-scouarnec@hetic.net>
 * @package Controller
 */
class PageController
{
    const DEFAUT = 'hello';
    const LINK_DEFAULT = 'kitten';
    /**
     * PageController constructor.
     * @param \PDO $PDO
     */
    public function __construct(\PDO $PDO)
    {
        $this->repository = new PageRepository($PDO);
    }

    /**
     *
     */
    public function ajoutAction()
    {
        if (count($_POST) === 0) {
            include "../admin/add.php";
        }
        $this->repository->inserer($_POST);
        header('Location:index.php' );
    }

    /**
     *
     */
    public function supprimerAction()
    {
        $id = $_GET['id'];
        $this->repository->supprimer($id);
        header('Location:index.php' );
    }

    /**
     *
     */
    public function modifierAction()
    {
        if (count($_POST) === 0) {
            $id = $_GET['id'];
            $detail = $this->repository->detailAction($id);
            include "../admin/update.php";
        }
        $this->repository->modifier($_POST);
        header('Location:index.php');
    }

    /**
     *
     */
    public function detailsAction()
    {
        $id = $_GET['id'];
         $details = $this->repository->detailAction($id);
        include "../admin/detail.php";
    }

    /**
     *
     */
    public function listeAction()
    {
        $page = $this->repository->lister();
        include '../view/admin_index.php';
    }

    /**
     *
     */
    public function displayAction()
    {
        // definition d'un slug par defaut (en cas d'appel sans parametre dans l'url)
        $slug = 'teletubbies';
        // recuperation du slug du parametre d'url si present
        if (isset($_GET['p'])) {
            $slug = $_GET['p'];
        }else{
            $_GET['p'] = 'teletubbies';
        }
        // en PHP 7
        // $slug = $_GET['p'] ?? $_POST['p'] ?? 'teletubbies';
        // recuperation les donnees de la page qui correspond au slug
        $page = $this->repository->getBySlug($slug);
        // si il n'y a pas de donnees, erreur 404
        if ($page === false) {
            // 404
            include "view/404.php";
            return;
        }
        // je dois avoir la nav initailiseee pour que la vue la montre
        // j'ai des donnees, je le affiche
        $nav = $this->genererLaNav($slug);
        include "view/page-display.php";
    }

    private function genererLaNav($slug)
    {
        // generer la nav
        ob_start();
        $nav = $this->repository->getAllSlugs();
        $home = self::DEFAUT;
        $default = self::LINK_DEFAULT;
        include "view/nav.php";
        $nav = ob_get_clean();
        return $nav;
    }
}