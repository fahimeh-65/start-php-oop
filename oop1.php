<?php

class Rook 
{

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

function rookMaker($color,$square){
     
     $rook = new Rook() ; 
     $rook -> color = $color ;
     $rook -> square = $square ;

     return $rook;
}

$rook1 = rookMaker('white','h1') ;
$rook2 = rookMaker('white', 'h8') ;
$rook3 = rookMaker('black', 'a1') ;
$rook4 = rookMaker('black', 'a8') ;

echo $rook3 -> color ;