<?php
namespace SOLID\srp;
use SOLID\srp\Driver;


class Bus
{
    /**
     * @var int
     */
    private  $busNumber;
    /**
     * @var string
     */
    private  $busColor;
    /**
     * @var Driver
     */
    private  $diver;

    public function __construct($busNumber,$busColor,$diver)
    {
        $this->setBusNumber($busNumber);
        $this->setBusColor($busColor);
        $this->setDiver($diver);
    }



    /**
     * @return mixed
     */
    public function getBusNumber()
    {
        return $this->busNumber;
    }

    /**
     * @return \SOLID\srp\Driver
     */
    public function getDiver()
    {
        return $this->diver;
    }

    /**
     * @param \SOLID\srp\Driver $diver
     */
    public function setDiver($diver)
    {
        $this->diver = $diver;
    }

    /**
     * @param mixed $busNumber
     */
    public function setBusNumber($busNumber)
    {
        $this->busNumber = $busNumber;
    }

    /**
     * @return mixed
     */
    public function getBusColor()
    {
        return $this->busColor;
    }

    /**
     * @param mixed $busColor
     */
    public function setBusColor($busColor)
    {
        $this->busColor = $busColor;
    }


    
}
