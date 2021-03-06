<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ElectionController extends Controller
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render('Election/index.html.twig');
    }
}
