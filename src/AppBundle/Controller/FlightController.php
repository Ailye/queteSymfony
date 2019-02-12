<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FlightController
{
    /**
     * @Route("/flight/show", name="infofligth")
     */
    public function showAction(Flight $flight, FlightInfo $flightInfo)
    {
        $distance = $flightInfo->getDistance(
            $flight->getDeparture()->getLatitude(),
            $flight->getDeparture()->getLongitude(),
            $flight->getArrival()->getLatitude(),
            $flight->getArrival()->getLongitude()
        );

        return $this->render('flight/show.html.twig');
    }
}