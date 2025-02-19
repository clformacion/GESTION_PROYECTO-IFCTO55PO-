CREATE DATABASE mensajeria;

use mensajeria;


CREATE TABLE administrador (
  fecha   DATE, 
  nombre  varchar(30), 
  asunto  varchar(50), 
  mensaje varchar(255));
CREATE TABLE asistente (
  fecha   DATE, 
  nombre  varchar(30), 
  asunto  varchar(50), 
  mensaje varchar(255));
ALTER TABLE ASISTENTE ADD CONSTRAINT `1:1` FOREIGN KEY () REFERENCES ADMINISTRADOR ();

DROP Table administrador;
DROP Table asistente;