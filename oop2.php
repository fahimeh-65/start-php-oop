<?php

class A
{
    //public static $foo = 'iman' ;

}

class B
{
    public $foo = 12 ;
    public function hello(){

        // self :: $foo  ;
        //echo 'hello' ;
        $this -> foo += 2 ;
    }
}

// $a = new A() ;
// $a2 = clone $a ;

// $a ->foo = 'ali' ;
// $a2 -> foo = 'ahmad' ;

// echo $a -> foo;
// echo $a2 -> foo;
$b = new B() ;
$b -> hello() ;
echo $b -> foo ;


