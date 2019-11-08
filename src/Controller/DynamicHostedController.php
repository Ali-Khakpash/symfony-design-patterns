<?php
namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/DynamicHostedUser")
 */
class DynamicHostedController extends AbstractController
{


    /**
     * @Route("/", name="dynamichosted", methods={"GET"})
     */
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('HostedPBX/dynamicbase.html.twig', [
           /* 'products' => $productRepository->findAll(),*/
        ]);
    }


}