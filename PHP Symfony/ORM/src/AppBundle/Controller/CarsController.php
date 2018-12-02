<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Car;
use AppBundle\Form\CarType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarsController extends Controller
{

    /**
     * @Route("/car/view/{id}", name="view_car")
     *
     * @param integer $id
     * @return Response
     */
    public function carPartsAction($id)
    {
        $car = $this->getDoctrine()
            ->getRepository(Car::class)
            ->getCar($id);

        return $this->render('car/view.html.twig', [
            'car' => $car,
        ]);
    }

    /**
     * @Route("/cars/all", name="all_cars")
     *
     * @return Response
     */
    public function listsAction()
    {
        $cars = $this->getDoctrine()
            ->getRepository(Car::class)
            ->findAll();

        return $this->render('cars/all.html.twig', [
            'cars' => $cars
            ]);
    }

    /**
     * @Route("/car/add", name="add_car")
     * @param Request $request
     * @return Response
     */
    public function createAction(Request $request)
    {
        $car = new Car();

        $form = $this->createForm(CarType::class, $car);
        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->persist($car);
            $em->flush();


            return $this->redirectToRoute('all_cars');
        }

        return $this->render('car/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("car/edit/{id}", name="edit_car")
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function editAction(Request $request, int $id)
    {
        $car = $this->getDoctrine()
        ->getRepository(Car::class)
            ->find($id);

        $form = $this->createForm(CarType::class, $car);
        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()){

            $em = $this->getDoctrine()
                ->getManager();
            $em->merge($car);
            $em->flush();

            return $this->redirectToRoute('view_car', [
               'car' => $car,
                'id' => $car->getId()
            ]);
        }

        return$this->render('car/edit.html.twig', [
            'form' => $form->createView(),
            'car' => $car
        ]);

    }

    /**
     * @Route("car/delete/{id}", name="delete_car")
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function deleteAction(Request $request, int $id)
    {
        $car = $this->getDoctrine()
            ->getRepository(Car::class)
            ->find($id);

        $carForm = $this->getDoctrine()
            ->getRepository(Car::class)
            ->getCar($id);

        $form = $this->createFormBuilder()
            ->add('Delete', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->remove($car);
            $em->flush();

            return $this->redirectToRoute('all_cars');
        }

        return $this->render('car/delete.html.twig', [
            'form' => $form->createView(),
            'car' => $carForm
        ]);

    }
}
