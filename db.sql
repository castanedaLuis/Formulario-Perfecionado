CREATE DATABASE formulario;
USE formulario;

CREATE TABLE usuario(
    id_me INT(11) NOT NULL,
    id_user INT(11) NOT NULL,
    name_user VARCHAR(30) NOT NULL,
    correo VARCHAR(30) NOT NULL,
    contraseña VARCHAR(30) NOT NULL,
    fechaNacimiento VARCHAR(30) NOT NULL,
    fechaIngreso VARCHAR(30) NOT NULL
);

ALTER TABLE usuario
    ADD PRIMARY KEY(id_user);

ALTER TABLE usuario
    MODIFY id_user INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;