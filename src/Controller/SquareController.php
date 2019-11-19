<?php

namespace App\Controller;

use App\Repository\SquaresRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SquareController extends AbstractController
{
    /**
     * @Route("/squares", name="squares")
     */
    public function index(SquaresRepository $repo)
    {
        $results = $repo->findAll();
        $list = array();

        foreach ($results as $result) {
            $list[] = array(
                'square' => $result->getSquare(),
                'center' => json_decode($result->getCenter()),
                'polygon' => json_decode($result->getPolygon()),
                'zoom' => $result->getZoom()
            );
        }

        return $this->json(["squares" => $list]);
    }
}
