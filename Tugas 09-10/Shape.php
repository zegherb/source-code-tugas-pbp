<?php

abstract class Shape{
    abstract public function area();
}
class Circle extends Shape{
    private $r;
    public function __construct($r){
        $this->r = $r;
    }
    public function area(){
        return 3.14 * $this->r * $this->r;
    }
}
class Rectangle extends Shape{
    private $p;
    private $l;

    public function __construct($p, $l){
        $this->p = $p;
        $this->l = $l;
    }
    public function area(){
        return $this->p * $this->l;
    }
}

$Circle = new Circle(10);
echo "Luas lingkaran = {$Circle->area()} cm\n";

$Rectangle = new Rectangle(7,5);
echo "Luas Persegi Panjang = {$Rectangle->area()} cm";
?>