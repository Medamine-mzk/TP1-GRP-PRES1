<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FirstController extends AbstractController
{
    #[Route('/first', name: 'app_first')]
    public function index(): Response
    {
        return $this->render('first/index.html.twig', [
            'controller_name' => 'FirstController',
        ]);
    }

    #[Route('/hello/{name}',name:"app_hello")]
    public function hello($name): Response
    {
        return new Response("<h1>Hello $name ! from hello() action</h1>");
    }
    #[Route('/add/{x}/{y}')]
    public function add($x,$y): Response
    {   
        $res=$x+$y;
        return new Response("<h1>$x + $y = $res</h1>");
    }
    #[Route('/comp/{x}/{y}')]
    public function comp($x,$y): Response
    {   
        $res = $x>=$y   ?   ">="    :   "<" ;
        return new Response("<h1>$x $res $y </h1>");
    }
}
