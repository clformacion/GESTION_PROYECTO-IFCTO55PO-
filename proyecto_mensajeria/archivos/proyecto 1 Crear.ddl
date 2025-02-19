CREATE TABLE ADMINISTRADOR (
  fecha   int(10), 
  nombre  varchar(30), 
  asunto  varchar(50), 
  mensaje varchar(255));
CREATE TABLE ASISTENTE (
  fecha   int(10), 
  nombre  varchar(30), 
  asunto  varchar(50), 
  mensaje varchar(255));
ALTER TABLE ASISTENTE ADD CONSTRAINT `1:1` FOREIGN KEY () REFERENCES ADMINISTRADOR ();

