<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * Index
     */
    public function indexAction(Request $request)
    {
        // Render
        return $this->render('AppBundle:default:index.html.twig', array());
    }
}
