<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-1-26
 * Time: 11:01
 */
class magicTest
{

    public function __construct($name, $age, $sex)
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        $this->printParams();
    }

    private function printParams(){
        print $this->name;
        print $this->age;
        print $this->sex;
    }

    public function __sleep()
    {
        // TODO: Implement __sleep() method.
        return "do sleep";
    }
    public function __wakeup()
    {
        // TODO: Implement __wakeup() method.
        $this->printParams();
    }

}