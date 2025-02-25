CREATE DATABASE academia

use academia

CREATE Table blog(
    titulo VARCHAR(40),
    parrafo VARCHAR(2000)

);


CREATE table examen(
    pregunta1 VARCHAR(500),pregunta2 VARCHAR(500),pregunta3 VARCHAR(500),pregunta4 VARCHAR(500),pregunta5 VARCHAR(500)
);

DROP Table examen;


CREATE Table respuestas1(
    nombre varchar (50),
    fecha date,
    respuesta1 varchar(1000),respuesta2 VARCHAR(1000), respuesta3 VARCHAR(1000),respuesta4 VARCHAR(1000),respuesta5 VARCHAR(1000));


CREATE Table informe(
    nombre VARCHAR(40),nota int(5)
)