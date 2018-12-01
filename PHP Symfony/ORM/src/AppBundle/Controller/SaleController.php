<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Sale;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SaleController extends Controller
{
    /**
     * @Route("/sales", name="all_sales")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function allSalesAction()
    {
        $sales = $this->getDoctrine()
            ->getRepository(Sale::class)
            ->salesList();


        return $this->render('sales/all.html.twig', [
            'sales' => $sales
        ]);
    }

    /**
     * @Route("/sale/{id}", name="view_sale")
     *
     * @param int $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewSaleAction(int $id)
    {
        $sale = $this->getDoctrine()
            ->getRepository(Sale::class)
            ->findSale($id);

        $price = $sale['price'];
        $newPrice = $price - ($price * $sale['discount']);
        $sale['priceWithDiscount'] = $newPrice;

        return $this->render('sale/view.html.twig', [
            'sale' => $sale
        ]);
    }

    /**
     * @Route("sales/discounted", name="discounted_sales")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function salesWithDiscountAction()
    {
        $sales = $this->getDoctrine()
            ->getRepository(Sale::class)
            ->salesWithDiscount();

        return $this->render('sales/discount.html.twig', [
            'sales' => $sales
        ]);
    }

    /**
     * @Route("/sales/discounted/{percent}", name="percent_discounted")
     *
     * @param float $percent
     *
     * @return Response
     */
    public function salesWithPercentAction(float $percent)
    {
        $sales = $this->getDoctrine()
            ->getRepository(Sale::class)
            ->salesWithPercentDiscount($percent);

        return $this->render('sales/percent.html.twig', [
            'sales' => $sales
        ]);
    }
}
