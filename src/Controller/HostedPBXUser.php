<?php

namespace App\Controller;
use App\Entity\Category;
use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/dashboard")
 */

class HostedPBXUser extends AbstractController{

    /**
     * @Route("/", name="index", methods={"GET"})
     */
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('HostedPBX/index.html.twig', [
           /* 'products' => $productRepository->findAll(),*/
        ]);
    }



}