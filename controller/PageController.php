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
    }

    /**
     *
     */
    public function supprimerAction()
    {
    }

    /**
     *
     */
    public function modifierAction()
    {
    }

    /**
     *
     */
    public function detailsAction()
    {
    }

    /**
     *
     */
    public function listeAction()
    {
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