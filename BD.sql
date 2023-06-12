CREATE DATABASE empleados;

CREATE TABLE empleados (
    emp_cod SERIAL NOT NULL,
    emp_nom VARCHAR(200) NOT NULL,
    emp_ape VARCHAR(200) NOT NULL,
    emp_dpi BIGINT NOT NULL,
    emp_puesto_cod VARCHAR(50) NOT NULL,
    emp_edad INTEGER NOT NULL,
    emp_sex_cod VARCHAR(50) NOT NULL,
    emp_area_cod VARCHAR(50) NOT NULL,
    emp_situacion char (1) DEFAULT '1',
    PRIMARY KEY(emp_cod),
    FOREIGN KEY (emp_area_cod) REFERENCES areas(area_nom),
    FOREIGN KEY (emp_puesto_cod) REFERENCES puestos(pue_descr),
    FOREIGN KEY (emp_sex_cod) REFERENCES sexo(sex_descr)
);

CREATE TABLE sexo  ( 
	sex_cod	SERIAL NOT NULL,
	sex_descr	VARCHAR(50) NOT NULL,
    sex_situacion char (1) DEFAULT '1',
    PRIMARY KEY(sex_descr)
)

CREATE TABLE puestos  ( 
	pue_cod	SERIAL NOT NULL,
	pue_descr	VARCHAR(50) NOT NULL,
    pue_suel DECIMAL(8,2),
    pue_situacion char (1) DEFAULT '1',
    PRIMARY KEY(pue_descr)
)

CREATE TABLE areas  ( 
	area_cod	SERIAL NOT NULL,
	area_nom	VARCHAR(50) NOT NULL,
    area_situacion char (1) DEFAULT '1',
    PRIMARY KEY(area_nom)
)

