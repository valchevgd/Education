<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Customer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomersController extends Controller
{
    /**
     * @Route("/customers/all/{param}")
     *
     * @param $param
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getAllAction($param)
    {
        if ($param === 'ascending'){
            $order = 'ASC';
        }else{
            $order = 'DESC';
        }

        $customers = $this->getDoctrine()
            ->getRepository(Customer::class)
            ->findBy([], ['birth_day' => $order, 'is_young_driver' => 'DESC'] );

        return $this->render('customers/all.html.twig', [
            'customers' => $customers,
        ]);
    }


    /**
     * @Route("/customers/{id}")
     *
     * @param integer $id
     * @return Response
     */
    public function customerSales($id)
    {
        $customer = $this->getDoctrine()
            ->getManager()
            ->getRepository(Customer::class)
            ->getCustomerSales($id);

        return $this->render('customers/sales.html.twig',[
            'customer' => $customer
        ]);
    }
}
