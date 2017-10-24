<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        
        return $this->render('@App/index.html.twig'); 
    }

    /**
     * @Route("/home1", name="home1")
     */
    public function index1Action(Request $request)
    {

        return $this->render('@App/index-1.html.twig');
    }

    /**
     * @Route("/home2", name="home2")
     */
    public function index2Action(Request $request)
    {

        return $this->render('@App/index-2.html.twig');
    }

    /**
     * @Route("/home3", name="home3")
     */
    public function index3Action(Request $request)
    {

        return $this->render('@App/index-3.html.twig');
    }

    /**
     * @Route("/home4", name="home4")
     */
    public function index4Action(Request $request)
    {

        return $this->render('@App/index-4.html.twig');
    }
}
