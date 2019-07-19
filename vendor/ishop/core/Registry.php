<?php


namespace ishop;


class Registry
{

    use TSingletone;

    protected static $propeties = [];

    public function setPropety($name, $value)
    {
        self::$propeties[$name] = $value;
    }

    public function getPropery($name)
    {
        if(isset(self::$propeties[$name])) {
            return self::$propeties[$name];
        }
        return null;
    }

    public function getPropeties(){
        return self::$propeties;
    }

}