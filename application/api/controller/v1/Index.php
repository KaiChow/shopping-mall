<?php

namespace app\index\controller\v1;

class Index
{
    public function index()
    {
        return 'Hello World';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}