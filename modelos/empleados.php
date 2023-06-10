<?php
require_once 'Conexion.php';

class empleados extends Conexion{
    public $emp_cod;
    public $emp_nom;
    public $emp_ape;
    public $emp_dpi;
    public $emp_puesto_cod;
    public $emp_edad;
    public $emp_sex_cod;
    public $emp_area_cod;
    public $emp_situacion;


    public function __construct($args = [] )
    {
        $this->emp_cod = $args['emp_cod'] ?? null;
        $this->emp_nom = $args['emp_nom'] ?? '';
        $this->emp_ape = $args['emp_ape'] ?? '';
        $this->emp_dpi = $args['emp_dpi'] ?? '';
        $this->emp_puesto_cod = $args['emp_puesto_cod'] ?? '';
        $this->emp_edad = $args['emp_edad'] ?? '';
        $this->emp_sex_cod = $args['emp_sex_cod'] ?? '';
        $this->emp_area_cod = $args['emp_area_cod'] ?? '';
        $this->emp_situacion = $args['emp_situacion'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO empleados(emp_nom,emp_ape,emp_dpi,emp_puesto_cod,emp_edad,emp_sex_cod,emp_area_cod) 
                values('$this->emp_nom','$this->emp_ape','$this->emp_dpi','$this->emp_puesto_cod','$this->emp_edad','$this->emp_sex_cod','$this->emp_area_cod')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }


    //==============================================================================
    public function buscar(){
        $sql = "SELECT * from empleados where emp_situacion = 1 ";

        if($this->emp_nom != ''){
            $sql .= " and producto_nombre like '%$this->emp_nom%' ";
        }

        if($this->emp_dpi != ''){
            $sql .= " and emp_dpi = $this->emp_dpi ";
        }

        if($this->emp_cod != null){
            $sql .= " and emp_cod = $this->emp_cod ";
        }

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