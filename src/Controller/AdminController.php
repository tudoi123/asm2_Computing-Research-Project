<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_indexadmin')]
    public function index(): Response
    {
        // Check if the user has the 'ROLE_ADMIN' role
       
            return $this->render('admin/index.html.twig');
               
          
    }
}
