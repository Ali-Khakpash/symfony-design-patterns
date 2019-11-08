<?php

namespace App\Controller\Redis;
use App\Repository\ProductRepository;
use Redis;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/redis")
 */

class RedisController extends AbstractController{

    /**
     * @Route("/", name="redis", methods={"GET"})
     */
    public function connect(): Response
    {

        $redis = new Redis();
        $conn = $redis->connect('127.0.0.1', 6379);

        if($conn) {
            return new Response('Connected');
        }

        else{
            return new Response('not Connected');
        }

    }



}