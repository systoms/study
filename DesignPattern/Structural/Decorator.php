<?php

/**
 * 装饰器模式
 * 允许向一个现有的对象添加新的功能，同时又不改变其结构
 */

 interface Decorator {
     public function draw();
 }

 class Rectangle implements Decorator {
    public function draw() {
        echo "Shape: Rectangle";
    }
 }

 class Circle implements Decorator {
    public function draw() {
        echo "Shape: Circle";
    }
 }

abstract class ShapeDecorator implements Shape {
    protected $decoratedShape;
  
    public function ShapeDecorator(Shape $decoratedShape){
       $this->decoratedShape = $decoratedShape;
    }
  
    public function draw(){
       $this->decoratedShape->draw();
    }  
 }

 public class RedShapeDecorator extends ShapeDecorator {
 
    public function RedShapeDecorator(Shape $decoratedShape) {
       $this->ShapeDecorator($decoratedShape);     
    }
  
    public function draw() {
       $this->decoratedShape->draw();
       $this->setRedBorder($decoratedShape);
    }
  
    private function setRedBorder(Shape $decoratedShape){
        echo "Border Color: Red";
    }
 }

 public class DecoratorPatternDemo {
    public static function main() {
  
       $circle = new Circle();
       $redCircle = new RedShapeDecorator(new Circle());
       $redRectangle = new RedShapeDecorator(new Rectangle());
       echo "Circle with normal border";
       $circle->draw();
  
       echo "\nCircle of red border";
       $redCircle->draw();
  
       echo "\nRectangle of red border";
       $redRectangle->draw();
    }
 }