<?php


namespace senet;


class Registry{

    use TSingletone;

    public static $properties = [];

    public function setProperty($name, $value){
        self::$properties[$name] = $value;
    }

    public function getProperty($name){
        if (isset(self::$properties[$name])){
            return self::$properties[$name];
        }
    }

    public function getProperties(){
        return self::$properties;
    }

}