<?php


namespace App\Controller\HostedPBX;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/menuFragment")
 */

class MenuFragmentController extends AbstractController
{

    /**
     * @Route("/", name="menuFragment", methods={"GET","POST"})
     */
    public function index(): Response
    {
        return $this->render('HostedPBX/Menu/_menuFragment.html.twig', [
            /* 'products' => $productRepository->findAll(),*/
        ]);
    }


}