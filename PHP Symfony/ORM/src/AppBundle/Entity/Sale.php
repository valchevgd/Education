<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sale
 *
 * @ORM\Table(name="sales")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SaleRepository")
 */
class Sale
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="discount", type="float")
     */
    private $discount;

    /**
     * @var int
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Car")
     * @ORM\JoinColumn(name="car_id", referencedColumnName="id")
     */
    private $carId;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Customer", inversedBy="sales")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     */
    private $customerId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set discount
     *
     * @param float $discount
     *
     * @return Sale
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set carId
     *
     * @param integer $carId
     *
     * @return Sale
     */
    public function setCarId($carId)
    {
        $this->carId = $carId;

        return $this;
    }

    /**
     * Get carId
     *
     * @return int
     */
    public function getCarId()
    {
        return $this->carId;
    }

    /**
     * Set customerId
     *
     * @param integer $customerId
     *
     * @return Sale
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }
}

