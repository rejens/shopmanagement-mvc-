<?php


class A
{

    public function __construct()
    {
        echo "this is constructor A";
    }
}

class B extends A
{
    public function __construct()
    {
        echo "this is constructor B";
    }
}

$obj = new B();
