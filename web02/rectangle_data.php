<?php
class nilai {
     public $panjang;
     public $lebar;

     function __construct($panjang, $lebar) {
          $this->panjang = $panjang;
          $this->lebar = $lebar;
     }
     function get_luas(){
          return  $this->panjang *  $this->lebar;
     }
     function get_keliling(){
          return ($this->panjang * 2) + ($this->lebar * 2);
     }
}
?>