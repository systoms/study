<?php

/**
 * 观察者模式
 * 当一个对象状态发生变化时，依赖它的对象全部会收到通知，并自动更新。
 */

interface Observer {
    function update();
}

class Event{
    private $_observer = [];
    public function addObserver(Observer $observer)
    {
        $this->_observer[] = $observer;
    }

    function notify(){
        foreach ($this->_observer as $observer){
            $observer->update();
        }
    }
}
class Observer1 implements Observer{
    function update(){
        echo "逻辑1<br>";
    }
}
class Observer2 implements Observer{
    function update(){
        echo "逻辑2<br>";
    }
}
$event = new Event();
$event->addObserver(new Observer1());
$event->addObserver(new Observer2());
$event->notify();