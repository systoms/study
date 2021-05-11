<?php

/**
 * 策略模式
 * 约定策略包含的行为。一个类的行为或其算法可以在运行时更改
 */

 interface Strategy {
    function showAd();
    function showCategory();
 }

class FemaleUser implements Strategy
{
    function showAd(){
        echo "2016冬季女装";
    }
    function showCategory(){
        echo "女装";
    }
}

class MaleUser implements Strategy
{
    function showAd(){
        echo "IPhone6s";
    }
    function showCategory(){
        echo "电子产品";
    }
}

class Page
{
    protected $strategy;
    function index(){
        echo "AD";
        $this->strategy->showAd();
        echo "<br>";
        echo "Category";
        $this->strategy->showCategory();
        echo "<br>";
    }
    function setStrategy(Strategy $strategy){
        $this->strategy=$strategy;
    }
}

$page = new Page();
if(isset($_GET['male'])){
    $strategy = new MaleUser();
}else {
    $strategy = new FemaleUser();
}
$page->setStrategy($strategy);
$page->index();