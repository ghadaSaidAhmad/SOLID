<?php


namespace SOLID\srp;


class Route
{
    /**
     * @var String
     */
    private $frpm;

    /**
     * @var String
     */
    private  $to;

    /**
     *
     * Route constructor.
     * @param string $from
     * @param string $to
     */
    public function __construct(string $from,string $to)
    {
        $this->setFrpm($from);
        $this->setO($to);

    }

    /**
     * @return String
     */
    public function getFrpm()
    {
        return $this->frpm;
    }

    /**
     * @param String $frpm
     */
    public function setFrpm($frpm)
    {
        $this->frpm = $frpm;
    }

    /**
     * @return String
     */
    public function getTO()
    {
        return $this->to;
    }

    /**
     * @param String $o
     */
    public function setTO($o)
    {
        $this->o = $to;
    }
}