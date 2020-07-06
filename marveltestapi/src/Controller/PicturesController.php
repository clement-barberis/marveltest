<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;

class PicturesController extends AbstractController
{
    /**
     * @Route("/pictures/{id}", name="pictures")
     */
    public function index(string $id)
    {
        $filepath = "Assets/hero_pic/" . $id;
        $filename = "chart.png";


        $response = new Response();
        $disposition = $response->headers->makeDisposition(ResponseHeaderBag::DISPOSITION_INLINE, $filename);
        $response->headers->set('Content-Disposition', $disposition);
        $response->headers->set('Content-Type', 'image/png');
        $response->setContent(file_get_contents($filepath));

        return $response;
    }


}
