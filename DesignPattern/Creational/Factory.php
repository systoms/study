<?php

/**
 * 工厂模式
 * 工厂方法或累生成对象，而不是再代码中直接new
 */

class Factory {
    static public function getRedis()
    {
        return new Redis();
    }

    static public function getDatabase()
    {
        return new Database();
    }

    static public function getFile()
    {
        return new File();
    }

}

class Redis {}
class Database{}
class File{}