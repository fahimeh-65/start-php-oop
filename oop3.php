<?php
class soldier{
    // interface Gun {
    //     public function fire() ;
    // }
    private $gun ;
    public function __construct(Gun $gun) 
    {

        $this->gun = $gun ;
        
    }
    public function attack()
    {
        $this ->gun -> fire() ;
        $this ->gun -> kill += 1 ;
    }

}
class Gun{

    public $kill = 12 ;
    public function fire(){
        echo $this -> kill ;
    }
}
$b = new Gun() ;
$a = new soldier( $b ) ;
$a -> attack() ;
$a -> attack() ;
$a -> attack() ;

