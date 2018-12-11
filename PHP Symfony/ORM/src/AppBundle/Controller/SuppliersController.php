<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Supplier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class SuppliersController extends Controller
{
    /**
     * @Route("/suppliers/{name}", name="view_suppliers")
     *
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getListAction($name)
    {

        if ($name === 'local'){
            $location = 0;
        }else{
            $location = 1;
        }

        $em = $this->getDoctrine()->getManager();
        $suppliers = $em->getRepository(Supplier::class)->getList($location);

        return $this->render('suppliers/list.html.twig', [
            'suppliers' => $suppliers,
            ]);
    }
}
