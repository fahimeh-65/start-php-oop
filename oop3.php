<?php

interface Gun {
    public function fire() ;
}
class soldier{
    
    private $gun ;
    public function __construct(Gun $gun) 
    {

        $this->gun = $gun ;
        
    }
    public function attack()
    {
        $this ->gun -> fire() ;
        
    }

}
class m4 implements Gun{

    public function fire(){
        echo 'kioooo---->' ;
    }
}
class j3 implements Gun{

    public function fire(){
        echo 'dooff---->>' ;
    }
}
$m4 = new m4() ;
$j3 = new j3 ;
$s1 = new soldier( $j3 ) ;
$s2 = new soldier( $m4 ) ;
$s1 -> attack() ;
$s2 -> attack() ;

