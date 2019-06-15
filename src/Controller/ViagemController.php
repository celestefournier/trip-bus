<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpClient\HttpClient;

class ViagemController extends AbstractController {

    /**
     * @Route("/", name="index")
    */
    public function testeteste() {
        // $client = new \GuzzleHttp\Client();
        // $response = $client->request('GET', 'https://clickbus-teste.herokuapp.com/trips');
        // $res = json_decode($response->getBody(), true);

        // return new Response(
        //     '<html><body>'.$res["departures"][0]["from"].'</body></html>'
        // );
        // var $res = []

        return $this->render('index.html.twig');
    }

    /**
     * @Route("/viagem/{origem}/{destino}", name="viagem")
    */
    public function route($origem, $destino, Request $request) {
        $httpClient = HttpClient::create();
        $response = $httpClient->request('GET', 'https://clickbus-teste.herokuapp.com/trip/4017');
        $statusCode = $response->getStatusCode();

        return new Response(
            '<html><body>'.$statusCode.'</body></html>'
        );
    }
}   