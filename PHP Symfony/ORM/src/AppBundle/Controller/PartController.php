<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Part;
use AppBundle\Form\PartType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PartController extends Controller
{

    /**
     * @Route("/parts/add", name="add_part")
     * @param Request $request
     * @return Response
     */
    public function addAction(Request $request)
    {
        $part = new Part();
        $form = $this->createForm(PartType::class, $part);

        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->persist($part);
            $em->flush();

            return $this->redirectToRoute('index');
        }


        return $this->render('part/add.html.twig',[
            'form' => $form->createView()
        ]);

    }
}
