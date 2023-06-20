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

drop table productos;

create table roles (
rol tinyint,
descripcion varchar(20),
primary key(rol)
);

insert into roles values(1, "Administrador"), (2, "Empleado");

select * from roles;

drop table roles;

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
("Julian", "Administrador", "administrador123", 1);

insert into usuarios (nombre, usuario, contrasenia, rol) values
("Julian", "empleado", "empleado123", 2);

select * from usuarios inner join roles;

drop table usuarios;

drop database julianbianchiguia2;