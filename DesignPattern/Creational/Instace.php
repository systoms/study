<?php

/**
 * 单例模式
 * 该类负责创建自己的对象，同时确保只有单个对象被创建
 */

trait SingleObject {
    static public $_instace;
    static public function getInstace()
    {
        if(is_null(static::$_instace))static::$_instace = new static();
        return static::$_instace;
    }
}


class Redis {
    use SingleObject;
}

$redis = Redis::getInstace();