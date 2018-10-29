<?php

class Box
{
    /**
     * @var float
     */
    private $length;

    /**
     * @var float
     */
    private $width;

    /**
     * @param float $length
     * @throws Exception
     */
    private function setLength(float $length): void
    {
        if ($length <= 0){
            throw new Exception("Length cannot be zero or negative.");
        }
        $this->length = $length;
    }

    /**
     * @param float $width
     * @throws Exception
     */
    private function setWidth(float $width): void
    {
        if ($width <= 0){
            throw new Exception("Width cannot be zero or negative.");
        }
        $this->width = $width;
    }

    /**
     * @param float $height
     * @throws Exception
     */
    private function setHeight(float $height): void
    {
        if ($height <= 0){
            throw new Exception("Height cannot be zero or negative.");
        }
        $this->height = $height;
    }

    /**
     * @var float
     */
    private $height;

    /**
     * Box constructor.
     * @param float $length
     * @param float $width
     * @param float $height
     * @throws Exception
     */
    public function __construct(float $length, float $width, float $height)
    {
        $this->setLength($length);
        $this->setWidth($width);
        $this->setHeight($height);
    }

    public function getSurfaceArea(){
        $result = (($this->length * $this->width)* 2)
            + (($this->length * $this->height) * 2)
            + (($this->width * $this->height) * 2);

        return $result;
    }

    public function getLateralSurfaceArea(){
        $result = (($this->length * $this->height) * 2)
            + (($this->width * $this->height) * 2);

        return $result;
    }

    public function getVolume(){
        $result = $this->length * $this->width * $this->height;

        return $result;
    }

}


$length = floatval(readline());
$width = floatval(readline());
$height = floatval(readline());


try{
    $box = new Box($length, $width, $height);

    $surface_area = $box->getSurfaceArea();
    $lateral_surface_area = $box->getLateralSurfaceArea();
    $volume = $box->getVolume();

    echo sprintf("Surface Area - %.2f", $surface_area).PHP_EOL;
    echo sprintf("Lateral Surface Area - %.2f", $lateral_surface_area).PHP_EOL;
    echo sprintf("Volume - %.2f", $volume);

}catch (Exception $e){
    echo $e->getMessage();
}
