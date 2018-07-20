<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SeodashIndexController extends Controller
{
   /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('Seodash/index.html.twig');
    }
 
    /**
     * @Route("/admin", name="admin")
     */
    public function admin()
    {
        return $this->render('Seodash/Admin/index.html.twig');
    }
}
