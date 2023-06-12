<?php
require_once 'Conexion.php';

class puestos extends Conexion{
    public $pue_cod;
    public $pue_descr;
    public $pue_suel;
    public $pue_situacion;



    public function __construct($args = [] )
    {
        $this->pue_cod = $args['pue_cod'] ?? null;
        $this->pue_descr = $args['pue_descr'] ?? '';
        $this->pue_suel = $args['pue_suel'] ?? '';
        $this->pue_situacion = $args['pue_situacion'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO puestos(pue_descr,pue_suel) 
        VALUES ('$this->pue_descr','$this->pue_suel')";

        $resultado = self::ejecutar($sql);
        return $resultado;
    }


    //==============================================================================
    public function buscar()
    {
        $sql = "SELECT pue_cod, pue_descr FROM puestos WHERE pue_situacion = 1";
    
        $resultado = self::servir($sql);
        return $resultado;
    }
    


    //===================================================================================
    public function modificar(){
        $sql = "UPDATE puestos SET pue_descr = '$this->pue_descr', pue_suel = $this->pue_suel where pue_cod = $this->pue_cod";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }


    //======================================================================================
    public function eliminar(){
        $sql = "UPDATE puestos SET pue_situacion = 0 where pue_cod = $this->pue_cod";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}