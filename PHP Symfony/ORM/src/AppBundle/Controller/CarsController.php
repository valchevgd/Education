<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Car;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarsController extends Controller
{
    /**
     * @Route("/cars/{make}")
     *
     * @param $make
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function carsByMakeAction($make)
    {
        $cars = $this->getDoctrine()
        ->getRepository(Car::class)
        ->findBy(['make' => $make], ['model' => 'ASC', 'travelledDistance' => 'DESC']);

        return $this->render('cars/make.html.twig', [
            'cars' => $cars
        ]);
    }

    /**
     * @Route("/cars/{id}/parts")
     *
     * @param integer $id
     * @return Response
     */
    public function carPartsAction($id)
    {
        $car = $this->getDoctrine()
            ->getManager()
            ->getRepository(Car::class)
            ->getCar($id);

        return $this->render('car/view.html.twig', [
            'car' => $car,
        ]);
    }
}
