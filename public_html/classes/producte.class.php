<?php
class Producte {
  public $nom;
  public $codi;
  public $descripcio;
  public $preu;

  function __construct($nom,$codi,$descripcio,$preu) {
    $this->nom = $nom;
    $this->codi=$codi;
    $this->descripcio=$descripcio;
    $this->preu=$preu;
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
?> 