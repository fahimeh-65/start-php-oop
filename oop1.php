<?php

class Rook 
{
     private function __construct(){

     }
     
     // public function __construct ($color,$square){
     
     //      $this -> color = $color ;
     //      $this -> square = $square ;
     
     // }
     // static function rookMaker( $color,$square ){

     //      $rook = new Rook() ; 
     //      $rook -> color = $color ;
     //      $rook -> square = $square ;
     //      return $rook;

     // }
     static function makeWhite( $square ){

          return Rook :: make('white',$square) ; 

     }
     static function makeBlack( $square ){

         return Rook :: make('black',$square) ; 

     }
     static function make( $color,$square ) : Rook{

          $rook = new Rook() ; 
          $rook -> color = $color ;
          $rook -> square = $square ;
          return $rook;

     }

     public $isonboard = true ;
     private $color ;
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

// $rook1 = new Rook('white','h1') ;
// $rook2 = new Rook('white', 'h8') ;
// $rook3 = new Rook('black', 'a1') ;
// $rook4 = new Rook('black', 'a8') ;

// echo $rook2 -> color ;
//-----------------------------------------------------------------------------
// $rook1 = Rook::rookMaker('white','h1') ;
// $rook1 = Rook::rookMaker('white','a1') ;
// $rook1 = Rook::rookMaker('black','h8') ;
// $rook1 = Rook::rookMaker('black','a1') ;
//-----------------------------------------------------------------------------
$rook1 = Rook :: makeWhite('h1') ; 
$rook1 = Rook :: makeWhite('a1') ; 
$rook1 = Rook :: makeBlack('h8') ; 
$rook1 = Rook :: makeBlack('a1') ; 