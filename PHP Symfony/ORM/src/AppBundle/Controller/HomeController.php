<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Car;
use AppBundle\Entity\Part;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{

    const LIMIT_PARTS = 6;

    /**
     * @Route("/", name="index_cars")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexCarsAction(Request $request)
    {
        $cars = null;


        $form = $this->createFormBuilder($cars)
            ->add('model', EntityType::class, [
                'class' => Car::class,
                'choice_label' => 'make',
                'query_builder' => $this->getDoctrine()->getRepository(Car::class)->findModels(),
                'label' => 'Select model',
                'placeholder' => ''
            ])
            ->add('show', SubmitType::class)
            ->getForm();


        $form->handleRequest($request);


        if ($form->isSubmitted()) {

            $make = $form->getData()['model']->getMake();

            $cars = $this->getDoctrine()
                ->getRepository(Car::class)
                ->getCars($make);

        }


        return $this->render('home/index_cars.htm.twig', [
            'cars' => $cars,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/home_parts", name="index_parts")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexPartsAction(Request $request)
    {
        $parts = $this->getDoctrine()->getRepository(Part::class)
            ->findAll();

        $paginator = $this->get('knp_paginator');

        $pagination = $paginator->paginate(
            $parts,
            $request->query->getInt('page', 1),
            self::LIMIT_PARTS
        );


        return $this->render('home/index_parts.htm.twig', [
            'pagination' => $pagination
        ]);
    }
}
