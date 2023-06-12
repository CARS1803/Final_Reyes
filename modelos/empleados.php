<?php
require_once 'Conexion.php';

class empleados extends Conexion{
    public $emp_cod;
    public $emp_nom;
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
        $this->emp_dpi = $args['emp_dpi'] ?? '';
        $this->emp_puesto_cod = $args['emp_puesto_cod'] ?? '';
        $this->emp_edad = $args['emp_edad'] ?? '';
        $this->emp_sex_cod = $args['emp_sex_cod'] ?? '';
        $this->emp_area_cod = $args['emp_area_cod'] ?? '';
        $this->emp_situacion = $args['emp_situacion'] ?? '';
        $this->area_nom = $args['area_nom'] ?? '';
        $this->pue_descr = $args['pue_descr'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO empleados(emp_nom,emp_dpi,emp_puesto_cod,emp_edad,emp_sex_cod,emp_area_cod) 
                values('$this->emp_nom','$this->emp_dpi','$this->emp_puesto_cod','$this->emp_edad','$this->emp_sex_cod','$this->emp_area_cod')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }


    //==============================================================================
    public function buscar()
{
    $sql = "SELECT emp_cod, emp_nom, emp_dpi, puestos.pue_descr, emp_edad, sexo.sex_descr, puestos.pue_suel AS sueldo, areas.area_nom
    FROM empleados
    JOIN puestos ON empleados.emp_puesto_cod = puestos.pue_cod
    JOIN sexo ON empleados.emp_sex_cod = sexo.sex_cod
    JOIN areas ON empleados.emp_area_cod = areas.area_cod
    WHERE emp_situacion = '1' AND pue_situacion = '1';";

    if ($this->emp_nom != '') {
        $sql .= " AND emp_nom LIKE '%$this->emp_nom%' ";
    }

    if ($this->area_nom != '') {
        $sql .= " AND area_nom LIKE '%$this->area_nom%' ";
    }

    if ($this->pue_descr != '') {
        $sql .= " AND pue_descr LIKE '%$this->pue_descr%' ";
    }

    if ($this->pue_descr != '') {
        $sql .= " AND pue_descr LIKE '%$this->pue_descr%' ";
    }

    if ($this->emp_dpi != '') {
        $sql .= " AND emp_dpi = $this->emp_dpi ";
    }

    if ($this->emp_cod != null) {
        $sql .= " AND emp_cod = $this->emp_cod ";
    }

    $resultado = self::servir($sql);
    return $resultado;
}

public function buscar2(){
    $sql = "SELECT empleados.emp_cod, empleados.emp_nom, empleados.emp_dpi, puestos.pue_descr, empleados.emp_edad, sexo.sex_descr, puestos.pue_suel AS sueldo, areas.area_nom
    FROM empleados
    JOIN puestos ON empleados.emp_puesto_cod = puestos.pue_cod
    JOIN sexo ON empleados.emp_sex_cod = sexo.sex_cod
    JOIN areas ON empleados.emp_area_cod = areas.area_cod
    WHERE empleados.emp_situacion = 1 AND puestos.pue_situacion = 1
        ";

    if($this->emp_nom != ''){
        $sql .= " and empleados.emp_nom like '%$this->emp_nom%' ";
    }

    if($this->pue_descr != ''){
        $sql .= " and puestos.pue_descr like '%$this->pue_descr%' ";
    }
 
    if($this->area_nom != ''){
        $sql .= " and areas.area_nom like '%$this->area_nom%' ";
    }



    $resultado = self::servir($sql);
    return $resultado;
}


    //===================================================================================
    public function modificar(){
        $sql = "UPDATE empleados SET emp_nom = '$this->emp_nom', emp_dpi = '$this->emp_dpi', emp_edad = '$this->emp_edad' where emp_cod = $this->emp_cod";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function modificar2(){
        $sql = "UPDATE empleados SET emp_sex_cod = '$this->emp_sex_cod'";
        
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


