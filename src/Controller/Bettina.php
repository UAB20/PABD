<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Bettina  extends AbstractController
{
    public function getFrontPage()
    {
        return $this->render("index.html.twig");
    }

    public function getPersonalPage()
    {
        return $this->render("Bettina.html.twig");
    }
    public function getTest1Page()
    {
        return $this->render("test1.html.twig");
    }
    public function getTest2Page()
    {
        return $this->render("test2.html.twig");
    }
    public function getTest3Page()
    {
        return $this->render("test3.html.twig");
    }
    public function getTest4Page()
    {
        return $this->render("test4.html.twig");
    }
}