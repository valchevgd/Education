<?php

class Ferrari implements VCar
{

    /**
     * @var string
     */
    private $model = '488-Spider';

    /**
     * @var string
     */
    private $driver;

    /**
     * @var string
     */
    private $brakes;

    /**
     * @var string
     */
    private $gas;

    /**
     * Ferrari constructor.
     * @param string $driver
     */
    public function __construct(string $driver)
    {
        $this->setDriver($driver);
        $this->setBrakes();
        $this->setGas();
    }


    public function __toString()
    {
        $result = $this->getModel().'/';
        $result .= $this->getBrakes().'/';
        $result .= $this->getGas().'/';
        $result .= $this->getDriver();

        return $result;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @return string
     */
    public function getDriver(): string
    {
        return $this->driver;
    }

    /**
     * @param string $driver
     */
    public function setDriver(string $driver): void
    {
        $this->driver = $driver;
    }

    /**
     * @return string
     */
    public function getBrakes(): string
    {
        return $this->brakes;
    }

    public function setBrakes()
    {
        $this->brakes = 'Brakes!';
    }

    /**
     * @return string
     */
    public function getGas(): string
    {
        return $this->gas;
    }

    public function setGas(): void
    {
        $this->gas = 'Zadu6avam sA!';
    }

}