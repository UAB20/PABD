<?php


namespace AppBundle\Controller {


    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Response;


    class GenusController extends Controller
    {
        /**
         * @Route("/nelega_claudia");
         */
        public function showAction(){

           /* $templating = $this->container->get('twig.template_cache_warmer');
            $html = $this->render('genus/nelega_claudia.html.twig', [
                'name'=>$genusName
            ]);
            return new Response($html);*/
            return $this->render('genus/nelega_claudia.html.twig');
        }
    }
}