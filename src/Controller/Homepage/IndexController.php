<?php


namespace App\Controller\Homepage;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController
{
    public function index() {
        return new Response('sdfdsfdsf');
    }
}