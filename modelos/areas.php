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
    
        $resultado = self::servir($sql);
        return $resultado;
    }
    


    //===================================================================================
    public function modificar(){
        $sql = "UPDATE empleados SET emp_nom = '$this->emp_nom', emp_dpi = $this->emp_dpi where emp_cod = $this->emp_cod";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }


    //======================================================================================
    public function eliminar(){
        $sql = "UPDATE empleados SET emp_situacion = 0 where emp_cod = $this->emp_cod";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}