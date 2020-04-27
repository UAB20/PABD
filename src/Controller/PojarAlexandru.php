<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class PojarAlexandru extends AbstractController{

    public function number() {
        return $this->render('pojar_alexandru.html.twig');
    }

}

