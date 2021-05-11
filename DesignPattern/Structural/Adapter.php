<?php

/**
 * 适配器模式
 * 将各种截然不同的函数接口封装成统一的API
 */

 interface Database {
    public function findOne($where);
    public function findSome($where);
    public function update($data,$where);
    public function create($data);
    public function delete($where);
 }

 class Mysql implements Database {
    public function findOne($where){

    }
    public function findSome($where){
        
    }
    public function update($data,$where){
        
    }
    public function create($data){
        
    }
    public function delete($where){
        
    }
 }

 class MongoDB implements Database {
    public function findOne($where){

    }
    public function findSome($where){
        
    }
    public function update($data,$where){
        
    }
    public function create($data){
        
    }
    public function delete($where){
        
    }
 }