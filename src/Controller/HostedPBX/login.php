<?php

// src/Controller/SecurityController.php
namespace App\Controller\HostedPBX;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class login extends AbstractController
{

    /**
     * @Route("/Hostedlogin", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('HostedPBX/login.html.twig', [
            /*'last_username' => $lastUsername,*/
            'error' => $error
        ]);
    }


    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        $this->redirect($this->render('HostedPBX/login.html.twig'));
        throw new \Exception('This method can be blank - it will be intercepted by the logout key on your firewall');
    }





}