<?php
require_once 'Conexion.php';

class areas extends Conexion{
    public $area_cod;
    public $area_nom;
    public $area_situacion;



    public function __construct($args = [] )
    {
        $this->area_cod = $args['area_cod'] ?? null;
        $this->area_nom = $args['area_nom'] ?? '';
        $this->area_situacion = $args['area_situacion'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO areas(area_nom) 
        VALUES ('$this->area_nom')";

        $resultado = self::ejecutar($sql);
        return $resultado;
    }


    //==============================================================================
    public function buscar()
    {
        $sql = "SELECT area_cod, area_nom FROM areas WHERE area_situacion = 1";
    
        if ($this->area_nom != '') {
            $sql .= " AND area_nom LIKE '%$this->area_nom%' ";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function buscar2(){
        $sql = "SELECT * from areas where area_situacion = 1 ";
    
        if($this->area_nom != ''){
            $sql .= " and area_nom like '%$this->area_nom%' ";
        }
        if($this->area_cod != null){
            $sql .= " and area_cod = $this->area_cod ";
        }
    
        $resultado = self::servir($sql);
        return $resultado;
    }
    


    //===================================================================================
    public function modificar(){
        $sql = "UPDATE areas SET area_nom = '$this->area_nom' where area_cod = $this->area_cod";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }


    //======================================================================================

    public function eliminar(){
        $sql = "UPDATE areas SET area_situacion = 0 where area_cod = $this->area_cod";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

}    