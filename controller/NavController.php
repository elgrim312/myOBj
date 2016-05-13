<?php
/**
 * Created by PhpStorm.
 * User: alexandrevagnair
 * Date: 13/05/2016
 * Time: 18:15
 */

namespace Controller;


use Model\PageRepository;

class NavController
{
    public function __construct(\PDO $pdo)
    {
        $this->repository = new PageRepository($pdo);
    }
    public function nav ()
    {
        $nav = $this->repository->getAllSlug();
        if(!$nav){
            // 404
            include "view/404.php";
            return;
        }
        include "view/nav-display.php";
    }
}