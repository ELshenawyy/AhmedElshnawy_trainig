<?php
abstract class Shape {
    protected $color;
    protected $filled;

    public function __construct($color = "red", $filled = true) {
        $this->color = $color;
        $this->filled = $filled;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function isFilled() {
        return $this->filled;
    }

    public function setFilled($filled) {
        $this->filled = $filled;
    }

    abstract public function getArea();

    abstract public function getPerimeter();

    public function __toString() {
        return "Shape[color=" . $this->color . ", filled=" . ($this->filled ? "true" : "false") . "]";
    }
}
class Circle extends Shape {
    protected $radius;

    public function __construct($radius = 1.0, $color = "red", $filled = true) {
        parent::__construct($color, $filled);
        $this->radius = $radius;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return M_PI * $this->radius * $this->radius;
    }

    public function getPerimeter() {
        return 2 * M_PI * $this->radius;
    }

    public function __toString() {
        return "Circle[" . parent::__toString() . ", radius=" . $this->radius . "]";
    }
}

class Rectangle extends Shape {
    protected $width;
    protected $length;

    public function __construct($width = 1.0, $length = 1.0, $color = "red", $filled = true) {
        parent::__construct($color, $filled);
        $this->width = $width;
        $this->length = $length;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function getLength() {
        return $this->length;
    }

    public function setLength($length) {
        $this->length = $length;
    }

    public function getArea() {
        return $this->width * $this->length;
    }

    public function getPerimeter() {
        return 2 * ($this->width + $this->length);
    }

    public function __toString() {
        return "Rectangle[" . parent::__toString() . ", width=" . $this->width . ", length=" . $this->length . "]";
    }
}
?>


