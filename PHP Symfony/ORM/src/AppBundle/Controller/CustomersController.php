<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Customer;
use AppBundle\Entity\Sale;
use AppBundle\Form\CustomerType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomersController extends Controller
{
    /**
     * @Route("/customers/all/{param}", name="all_customers")
     *
     * @param $param
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listAction($param)
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
     * @Route("/customer/view/{id}", name="view_customer")
     *
     * @param integer $id
     * @return Response
     */
    public function salesAction($id)
    {
        $customer = $this->getDoctrine()
            ->getRepository(Customer::class)
            ->getCustomerSales($id);

        $priceOfSales = $this->getDoctrine()
            ->getRepository(Sale::class)
            ->getPriceAndDiscount($id);

        $price = 0;

        foreach ($priceOfSales as $priceOfSale){
            $price = $priceOfSale['price'] - ($priceOfSale['price'] * $priceOfSale['discount']);
        }

        return $this->render('customer/sales.html.twig',[
            'customer' => $customer,
            'price' => $price
        ]);
    }

    /**
     * @Route("/customer/add", name="add_customer")
     * @param Request $request
     * @return Response
     */
    public function addAction(Request $request)
    {
        $customer = new Customer();
        $form = $this->createForm(CustomerType::class, $customer);

        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()){

            if ($customer->getBirthDay() < '1995-01-01'){
                $customer->setIsYoungDriver(1);
            }else{
                $customer->setIsYoungDriver(0);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($customer);
            $em->flush();

            return $this->redirectToRoute('all_customers', [
                'param' => 'ascending'
            ]);
        }

        return $this->render('customer/add.html.twig',[
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/customer/edit/{id}", name="edit_customer")
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function editAction(Request $request, int $id)
    {
        $customer = $this->getDoctrine()
            ->getRepository(Customer::class)
            ->find($id);

        $form = $this->createForm(CustomerType::class, $customer);
        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()){

            if ($customer->getBirthDay() < '1995-01-01'){
                $customer->setIsYoungDriver(1);
            }else{
                $customer->setIsYoungDriver(0);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($customer);
            $em->flush();

            return $this->redirectToRoute('all_customers', [
                'param' => 'ascending'
            ]);
        }

        return $this->render('customer/edit.html.twig', [
            'form' => $form->createView(),
            'customer' => $customer
        ]);
    }

    /**
     * @Route("/customer/delete/{id}", name="delete_customer")
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function deleteAction(Request $request, int $id)
    {
        $customer = $this->getDoctrine()
            ->getRepository(Customer::class)
            ->find($id);

        $formCustomer = $this->getDoctrine()
            ->getRepository(Customer::class)
            ->getCustomerSales($id);

        $priceOfSales = $this->getDoctrine()
            ->getRepository(Sale::class)
            ->getPriceAndDiscount($id);

        $price = 0;

        foreach ($priceOfSales as $priceOfSale){
            $price = $priceOfSale['price'] - ($priceOfSale['price'] * $priceOfSale['discount']);
        }
        $form = $this->createFormBuilder()
            ->add('Delete', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->remove($customer);
            $em->flush();

            return $this->redirectToRoute('all_customers', [
                'param' => 'ascending'
            ]);
        }

        return $this->render('customer/delete.html.twig', [
            'form' => $form->createView(),
            'customer' => $formCustomer,
            'price' =>$price
        ]);
    }
}
