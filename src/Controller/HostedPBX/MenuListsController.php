<?php


namespace App\Controller\HostedPBX;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/dashboard")
 */

class MenuListsController extends AbstractController
{

    /**
     * @Route("/extension", name="extension", methods={"GET","POST"})
     */
    public function index(): Response
    {
        $client = HttpClient::create();
        $response = $client->request('GET', 'http://172.25.17.111:8080/extensions');

        $statusCode = $response->getStatusCode();
        // $statusCode = 200
        $contentType = $response->getHeaders()['content-type'][0];
        // $contentType = 'application/json'
        $content = $response->getContent();
        // $content = '{"id":521583, "name":"symfony-docs", ...}'
       // $content = $response->toArray();
        // $content = ['id' => 521583, 'name' => 'symfony-docs', ...]
        $content = json_decode( $content, true);
        $new = json_decode($content['detail'],true);
        return $this->render('HostedPBX/Menu/extension.html.twig', [
                'resp' => $new
        ]);

    }




}