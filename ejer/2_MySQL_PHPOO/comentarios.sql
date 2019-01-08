CREATE DATABASE comentarios;
use comentarios;
CREATE TABLE mensajes(
    id int AUTO_INCREMENT not null PRIMARY KEY,
    nombre varchar(60),
    email varchar(100),
    asunto varchar(200), 
    mensaje text,
    hora time,
    fecha date
);
