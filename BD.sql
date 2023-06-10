CREATE DATABASE empleados;

CREATE TABLE empleados (
    emp_cod SERIAL NOT NULL,
    emp_nom VARCHAR(200) NOT NULL,
    emp_ape VARCHAR(200) NOT NULL,
    emp_dpi BIGINT NOT NULL,
    emp_puesto_cod INTEGER NOT NULL,
    emp_edad INTEGER NOT NULL,
    emp_sex_cod INTEGER NOT NULL,
    emp_area_cod INTEGER NOT NULL,
    emp_situacion char (1) DEFAULT '1',
    PRIMARY KEY(emp_cod),
    FOREIGN KEY (emp_area_cod) REFERENCES areas(area_cod),
    FOREIGN KEY (emp_puesto_cod) REFERENCES puestos(pue_cod),
    FOREIGN KEY (emp_sex_cod) REFERENCES sexo(sex_cod)
);

CREATE TABLE sexo  ( 
	sex_cod	INTEGER NOT NULL,
	sex_descr	VARCHAR(200) NOT NULL,
    sex_situacion char (1) DEFAULT '1',
    PRIMARY KEY(sex_cod)
)

CREATE TABLE puestos  ( 
	pue_cod	INTEGER NOT NULL,
	pue_descr	VARCHAR(200) NOT NULL,
    pue_suel DECIMAL(8,2),
    pue_situacion char (1) DEFAULT '1',
    PRIMARY KEY(pue_cod)
)

CREATE TABLE areas  ( 
	area_cod	INTEGER NOT NULL,
	area_nom	VARCHAR(200) NOT NULL,
    area_situacion char (1) DEFAULT '1',
    PRIMARY KEY(area_cod)
)

CREATE TABLE asignacion  ( 
	asig_area_cod	INTEGER NOT NULL,
	asig_emp_cod	INTEGER NOT NULL,
    asig_situacion char (1) DEFAULT '1',
    PRIMARY KEY(asig_area_cod, asig_emp_cod),
    FOREIGN KEY (asig_area_cod) REFERENCES areas(area_cod),
    FOREIGN KEY (asig_emp_cod) REFERENCES empleados(emp_cod)
)
