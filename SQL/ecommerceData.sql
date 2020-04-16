CREATE DATABASE ecommerce CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE ecommerce;

CREATE TABLE estado (
  idEstado INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  estado VARCHAR(255)
);

CREATE TABLE categoria(
  idCategoria INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  categoria VARCHAR(255),
  idEstado INT NOT NULL
);

CREATE TABLE subcategoria(
  idSubcategoria INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  subcategoria VARCHAR(255),
  idCategoria INT NOT NULL,
  idEstado INT NOT NULL
);

CREATE TABLE producto(
  idProducto INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombreProducto VARCHAR(255),
  precio DECIMAL(10, 5),
  imagenProducto VARCHAR(255),
  descripcion VARCHAR(255),
  idSubcategoria  INT NOT NULL,
  idEstado INT NOT NULL
);

CREATE TABLE usuarios(
  idUsuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombreUsuario VARCHAR(255),
  apellidoUsuario VARCHAR(255),
  contrasena VARCHAR(255),
  idEstado INT NOT NULL,
  idRol INT NOT NULL
);

CREATE TABLE rol (
  idRol INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  rol VARCHAR(255)
);

INSERT INTO estado (estado) VALUES ("disponible"), ("No Disponible");

INSERT INTO categoria(categoria, idEstado) VALUES ("dama", 1), ("caballeros", 1);

INSERT INTO subcategoria(subcategoria, idCategoria, idEstado) VALUES ("camisas", 1 , 1);

INSERT INTO producto(nombreProducto, precio, imagenProducto, descripcion, idSubcategoria, idEstado) VALUES ("camisa modelo aguacate", 20000, "https://www.bealbaby.com/products/2019-divertido-t-camisas-mujeres-lindo-ol-iacute-mpico-levantamiento-corgi-los-beagles-aguacate-camiseta-tops-mujer-tee-camisa-mujer-ropa-de-verano?variant=22551776198716", "Camisa para dama, modelo: Aguacate", 1, 2);

INSERT INTO usuarios (idUsuario, nombreUsuario, apellidoUsuario, contrasena, idEstado, idRol) VALUES ("1.222.222.222","Lecter", "Reina", "lecterEcommerce", 1, 1), ("222.222","Alexis", "Marcano", "alexisEcommerce", 2, 2);

INSERT INTO rol (rol) VALUES ("admin"), ("empleado");


ALTER TABLE producto ADD CONSTRAINT fk_estadop FOREIGN KEY (idEstado) REFERENCES estado(idEstado) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE categoria ADD CONSTRAINT fk_categoriae FOREIGN KEY (idEstado) REFERENCES estado(idEstado) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE subcategoria ADD CONSTRAINT fk_estados FOREIGN KEY (idEstado) REFERENCES estado(idEstado) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE usuarios ADD CONSTRAINT fk_estadou FOREIGN KEY (idEstado) REFERENCES estado(idEstado) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE producto ADD CONSTRAINT fk_subcategoria FOREIGN KEY (idSubcategoria) REFERENCES subcategoria(idSubcategoria) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE subcategoria ADD CONSTRAINT fk_categorias FOREIGN KEY (idCategoria) REFERENCES categoria(idCategoria) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE usuarios ADD CONSTRAINT fk_rol FOREIGN KEY (idRol) REFERENCES rol(idRol) ON DELETE CASCADE ON UPDATE CASCADE;

