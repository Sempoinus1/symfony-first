<?php
namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class AuthController extends AbstractController {

    public function register(Request $request): Response{

        //if ($form->isSubmitted() && $form->isValid())
        //    return $this->render('register.html.twig', ['title' => 'Tvoje máma']);
        //else
            return $this->render('register.html.twig', ['title' => 'TODO']);


    }

    public function login(Request $request,AuthenticationUtils $authenticationUtils): Response{
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        return $this->render('login.html.twig', [
            'title' => 'TODO',
            'registrationForm' => $form->createView()
        ]);

    }
}