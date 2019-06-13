<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class ViagemController extends AbstractController {

    /**
     * @Route("/viagem/{origem}/{destino}", name="viagem")
    */
    public function teste($origem, $destino, Request $request) {
        return new Response(
            '<html><body>Viagens de onibus para: '.$request->query->get('dataPartida').'</body></html>'
        );
    }
}