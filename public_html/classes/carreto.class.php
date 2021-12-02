<?php
include("producte.class.php");
class Carreto {
    
  public $producte;
  public $linea=array();

  function __construct($producte,$linea) {
    $this->producte=$producte;
    $this->linea=$linea;
  }
  function afegir_producte($producte){
      array_push($linea,$producte);
  }

    function set_nom($name){
        $this->name=$name;
    }
    function set_codi($codi){
        $this->codi=$codi;
    }
    function set_descripcio($descripcio){
        $this->descripcio=$descripcio;
    }
    function set_preu($preu){
        $this->preu=$preu;
    }
    function get_nom(){
        return $this->nom:
    }
    function get_codi(){
        return $this->codi:
    }
    function ge_descripcio()){
        return $this->descripcio:
    }
    function get_preu(){
        return $this->preu:
    }
}