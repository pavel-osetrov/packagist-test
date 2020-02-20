<?php

namespace posetrov\packagist_test;


class SayHello
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function run()
    {
        echo "Hello, " . $this->name . "! You successfully tested posetrov's packagist!";
    }
}