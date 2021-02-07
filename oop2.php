<?php

class A
{
    public $foo = 'iman' ;

}

class B
{
    public function hello(){
        echo 'hello' ;
    }
}

$a = new A() ;
$a2 = clone $a ;

$a ->foo = 'ali' ;
$a2 -> foo = 'ahmad' ;

echo $a -> foo;
echo $a2 -> foo;
    