<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Rompetomp\InertiaBundle\Architecture\InertiaInterface;


final class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(InertiaInterface $inertia): Response
    {
        return $inertia->render('ShowCard', ['name' => 'ShowCard']);
    }
    #[Route('/create-card', name: 'create_card')]
    public function createCard(InertiaInterface $inertia): Response
    {
        return $inertia->render('CreateCard', ['name' => 'CreateCard']);
    }
    #[Route('/update-card', name: 'update_card')]
    public function updateCard(InertiaInterface $inertia): Response
    {
        return $inertia->render('UpdateCard', ['name' => 'UpdateCard']);
    }
    #[Route('/delete-card', name: 'delete_card')]
    public function deleteCard(InertiaInterface $inertia): Response
    {
        return $inertia->render('DeleteCard', ['name' => 'DeleteCard']);
    }
}
