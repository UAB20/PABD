<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Bettina  extends AbstractController
{
    public function number()
    {
        $number = random_int(0, 100);

        return $this->render("Bettina.html.twig",["number"=>$number]
        );
    }
}