<?php
require_once 'Conexion.php';
require 'empleados.php';
class Generos extends Conexion{
    public $sex_cod;
    public $sex_descr;
    public $sex_situacion;



    public function __construct($args = [] )
    {
        $this->sex_cod = $args['sex_cod'] ?? '';
        $this->sex_descr = $args['sex_descr'] ?? '';
        $this->sex_situacion = $args['sex_situacion'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO sexo(sex_descr) 
                values('$this->sex_descr')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }


    //==============================================================================
    public function buscar(){
        $sql = "SELECT * from sexo where sex_situacion = 1 ";

        if($this->sex_descr != ''){
            $sql .= " and sex_descr like '%$this->sex_descr%' ";
        }

        if($this->sex_cod != ''){
            $sql .= " and sex_cod = $this->sex_cod ";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function buscar2(){
        $sql = "SELECT * from sexo where sex_situacion = 1 ";
    
        if($this->sex_descr != ''){
            $sql .= " and sex_descr like '%$this->sex_descr%' ";
        }
        if($this->sex_cod != null){
            $sql .= " and sex_cod = $this->sex_cod ";
        }
    
        $resultado = self::servir($sql);
        return $resultado;
    }
    

    //===================================================================================
    public function modificar(){
        $sql = "UPDATE sexo SET sex_descr = '$this->sex_descr' where sex_cod = $this->sex_cod";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }


    //======================================================================================
    public function eliminar(){
        $sql = "UPDATE sexo SET sex_situacion = 0 where sex_cod = $this->sex_cod";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}