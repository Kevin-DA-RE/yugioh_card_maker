<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Rompetomp\InertiaBundle\Architecture\InertiaInterface;


final class WelcomeController extends AbstractController
{
        #[Route('/', name: 'home')]
    public function index(InertiaInterface $inertia): Response
    {
        return $inertia->render('App', ['name' => 'Corentin']);
    }

}
