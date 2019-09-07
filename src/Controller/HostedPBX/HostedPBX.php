<?php

namespace App\Controller\HostedPBX;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/dashboard")
 */

class HostedPBX extends AbstractController{

    /**
     * @Route("/", name="index", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('HostedPBX/index.html.twig', [
            /* 'products' => $productRepository->findAll(),*/
        ]);
    }



}