<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\RouterInterface;

class HomeController extends AbstractController
{
    #[Route('home/{id}/{name}', name: 'app.home')]
    public function index(RouterInterface $router): Response
    {
        dd($router->getRouteCollection()->all());
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('home/{id}/{name}', name: 'app.home.post', methods: ['POST'])]
    public function post(RouterInterface $router): Response
    {
        dd($router->getRouteCollection()->all());
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
