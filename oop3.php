<?php

interface Gun {
    public function fire() ;
}
abstract class Firer {
    //abstract public function abc();
    public function fire(){
        echo $this  ->sound ;
    }

}
trait Mirer {
    //abstract public function abc();
    public function mire(){
        echo $this  ->sound ;
    }

}
class soldier{
    
    private $gun ;
    public function __construct(Gun $gun) 
    {

        $this->changeGun( $gun) ;
        
    }
    public function changeGun( Gun $gun ){

        $this->gun = $gun ;
    }
    public function attack()
    {
        $this ->gun -> fire() ;
        
    }

}
class m4 extends Firer implements Gun{
    protected $sound = 'kioooo---->' ;
    
   
}
class j3 extends Firer implements Gun{
    use Mirer ;
    protected $sound ='dooff---->>' ;
   
}
$m4 = new m4() ;
$j3 = new j3 ;
$s1 = new soldier( $j3 ) ;
//$s2 = new soldier( $m4 ) ;
$s1 -> attack() ;
$s1 -> attack() ;
$s1 -> changeGun($m4) ;
$s1 -> attack() ;
$s1 -> attack() ;

