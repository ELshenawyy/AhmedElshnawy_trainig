<?php
class Circle {
    private $radius;

    public function __construct($radius = 1.0) {
        $this->radius = $radius;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * $this->radius * $this->radius;
    }

    public function getCircumference() {
        return 2 * pi() * $this->radius;
    }

    public function __toString() {
        return "Circle [radius=" . $this->radius . "]";
    }
}
?>