<?php


namespace App\Controller\HostedPBX;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;


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
        $response = $client->request('GET', 'http://172.25.17.111:5000/api/v2.0/extension');

        $statusCode = $response->getStatusCode();
        $contentType = $response->getHeaders()['content-type'][0];
        $content = $response->getContent();
        $content = json_decode( $content, true);
        return $this->render('HostedPBX/Menu/extension.html.twig', [
                'resp' => $content
        ]);

    }


    /**
     * @Route("/postextention", name="postextention", methods={"POST"})
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function post_extention(Request $request): Response
    {
        $client = HttpClient::create();
        $response = $client->request('POST', 'http://172.25.17.111:5000/api/v2.0/extension', [

            // defining data using an array of parameters
            'body' => ['effective_caller_id_name' => $request->get('effective_caller_id_name'),
                'effective_caller_id_number' => $request->get('effective_caller_id_number'),
                'limit_max' => $request->get('limit_max'),
                'limit_destination' => $request->get('limit_destination'),
                'missed_call_app' => $request->get('missed_call_app'),
                'user_record' => $request->get('user_record'),
                'call_timeout' => $request->get('call_timeout'),
                'call_group' => $request->get('call_group'),
                'hold_music' => $request->get('hold_music'),
/*                'call_timeout' => $request->get('call_timeout'),
                'call_timeout' => $request->get('call_timeout'),
                'call_timeout' => $request->get('call_timeout'),
                'call_timeout' => $request->get('call_timeout'),*/
            ]
        ]);
        $statusCode = $response->getStatusCode();

        try {
            $content = $response->getContent();
        } catch (ClientExceptionInterface $e) {
        } catch (RedirectionExceptionInterface $e) {
        } catch (ServerExceptionInterface $e) {
        } catch (TransportExceptionInterface $e) {
        }
       // $content = json_decode($content);
        return new Response($content);

    }



    /**
     * @Route("/deleteextension/{uuid}", name="deleteextension", methods={"GET","POST"})
     */
    public function delete_extension (String $uuid , Request $request): Response
    {
        $client = HttpClient::create();
        $response = $client->request('DELETE', 'http://172.25.17.111:5000/api/v2.0/extension/'.$uuid);
        return $this->redirectToRoute('extension');

    }




    /**
     * @Route("/IVR", name="ivr", methods={"GET","POST"})
     */
    public function show_ivr(): Response
    {

        return $this->render('HostedPBX/Menu/ivr.html.twig', [
            /* 'resp' => $new*/
        ]);

    }


}