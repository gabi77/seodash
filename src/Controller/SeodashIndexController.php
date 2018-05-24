<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SeodashIndexController extends Controller
{
    /**
     * @Route("/seodash/index", name="seodash_index")
     */
    public function index()
    {
        return $this->render('seodash_index/index.html.twig', [
            'controller_name' => 'SeodashIndexController',
        ]);
    }
}
