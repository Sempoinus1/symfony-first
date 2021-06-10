<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class RandomController extends AbstractController {
    public function number(): Response{
        $number = random_int(0,100);

        return $this->render('random.html.twig', ['number' => $number]);

    }
}