<?php


class Fan_skt
{
    CONST SLOW = 1;
    CONST MEDIUM = 2;
    CONST FAST = 3;
    private $speed = SLOW;
    private $status = true;
    private $radius = 5;
    private $color = "BLUE";

    /**
     * @return mixed
     */
    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @return int
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @return string
     */
    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @param int $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @param mixed $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    /**
     * @param bool $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function toString($status)
    {
        if ($status) {
            return $this->speed . " " . $this->color . " " . $this->radius . "<br/>" ."Fan is ON";
        } else {
            return "Fan is OFF";
        }
    }
}
?>

<?php
 $fan_SKT = new Fan_skt();
$fan_SKT->setColor("RED");
echo($fan_SKT->toString(true));

?>

