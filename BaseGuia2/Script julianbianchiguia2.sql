create database julianbianchiguia2;
use julianbianchiguia2;

create table productos (
idProducto int (5) auto_increment,
descripcion varchar (10),
precio float (5),
primary key (idProducto)
);

alter table productos auto_increment = 1000;

select * from productos;

create table roles (
rol tinyint,
descripcion varchar(20),
primary key(rol)
);

insert into roles values(1, "Administrador"), (2, "Empleado"), (3, "Profesor");

select * from roles;

create table usuarios (
idUsuario int (5) auto_increment,
nombre varchar (20),
usuario varchar (20),
contrasenia varchar (20),
rol tinyint,
foreign key(rol) references roles(rol),
primary key(idUsuario)
);

insert into usuarios (nombre, usuario, contrasenia, rol) values
("Julian", "Administrador", "admin123", 1);

insert into usuarios (nombre, usuario, contrasenia, rol) values
("Julian", "empleado", "empl123", 2);

insert into usuarios (nombre, usuario, contrasenia, rol) values
("Paula", "Profesor", "profe123", 3);

select * from usuarios;

drop table productos;

drop table usuarios;

drop table roles;

drop database julianbianchiguia2;