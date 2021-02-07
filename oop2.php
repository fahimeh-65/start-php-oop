<?php

class A
{
    //public static $foo = 'iman' ;
    public function hello($b){

        // self :: $foo  ;
        //echo 'hello' ;
        $b -> echoFoo() ;
        $b -> foo += 2 ;
    }

}

class B
{
    
    public $foo = 12 ;
    public function echoFoo()
    {
        echo $this -> foo ;
    }
    
   
}

// $a = new A() ;
// $a2 = clone $a ;

// $a ->foo = 'ali' ;
// $a2 -> foo = 'ahmad' ;

// echo $a -> foo;
// echo $a2 -> foo;
//-----------------------------------------------------------------------------
// $b = new B() ;
// $b -> hello() ;
// echo $b -> foo ;
//-----------------------------------------------------------------------------
$a = new A() ;
$b = new B() ;

$a -> hello($b) ;
$a -> hello($b) ;
$a -> hello($b) ;


