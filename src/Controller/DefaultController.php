<?php

namespace App\Controller;

use App\myFunctions\myMethods;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="default")
     *
     * @param \App\myFunctions\myMethods $myMethods
     *
     * @return Response
     */
    public function index(myMethods $myMethods): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'foobar' => $myMethods,
        ]);
    }
}
