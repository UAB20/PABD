<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class CristeaIoan extends AbstractController{

    public function number() {
        return $this->render('cristea_ioan.html.twig');
    }

}