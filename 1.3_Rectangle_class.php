<?php
class Rectangle {
    private $length;
    private $width;

    public function __construct($length = 1.0, $width = 1.0) {
        $this->length = $length;
        $this->width = $width;
    }

    public function getLength() {
        return $this->length;
    }

    public function setLength($length) {
        $this->length = $length;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function getArea() {
        return $this->length * $this->width;
    }

    public function getPerimeter() {
        return 2 * ($this->length + $this->width);
    }

    public function __toString() {
        return "Rectangle [length=" . $this->length . ", width=" . $this->width . "]";
    }
}
?>