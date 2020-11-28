<?php


namespace App\Controller\Homepage;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class CreateController extends AbstractController
{
    public function create() {
        return new Response('create');
    }
}