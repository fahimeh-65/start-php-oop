<?php

class Rook 
{
     public function __construct ($color,$square){
     
          $this -> color = $color ;
          $this -> square = $square ;
     
     }

     public $isonboard = true ;
     public $color ;
     public $square ;

}

//$rook1 = new Rook () ;
// $rook2 = new Rook () ;
// $rook3 = new Rook () ;
// $rook4 = new Rook () ;

// $rook1 -> color = 'white' ;
// $rook1 -> square = 'h1' ;

// function rookMaker($color,$square){
     
//      $rook = new Rook() ; 
//      $rook -> color = $color ;
//      $rook -> square = $square ;

//      return $rook;
// }

$rook1 = new Rook('white','h1') ;
$rook2 = new Rook('white', 'h8') ;
$rook3 = new Rook('black', 'a1') ;
$rook4 = new Rook('black', 'a8') ;

echo $rook2 -> color ;