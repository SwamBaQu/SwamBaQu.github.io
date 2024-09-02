create database Dopa;
  
use Dopa;

create table Personal (ci integer, nombre varchar (100), apellido varchar(100), horario datetime, email varchar(100),

primary key (ci)); 

create table Direccion (ci integer, calle varchar(100), puerta integer,

primary key (ci));

create table tienen_personal (ci integer, ci integer,

primary key (ci),

foreign key (ci) references Personal (ci),    

foreign key (ci) references Direccion(ci));

create table Telefono (ci integer, telefono integer,

primary key (telefono)); 

create table tienen_telefono (ci integer, telefono integer,

primary key (ci),

foreign key (ci) references Personal (ci),

foreign key (telefono) references Telefono(telefono));

create table Gerente (ci integer, nombre varchar(100), apellido varchar(100), horario datetime, email varchar(100),

primary key (ci)); 

create table PersonalCargo (ci integer, personalcargo varchar(100),

primary key (ci)); 

create table tienen_gerente (ci integer, ci integer,

primary key (ci),

foreign key (ci) references Gerente(ci),

foreign key (ci) references PersonalCargo(ci));

create table Docente (ci integer, nombre varchar(100), apellido varchar(100), horario varchar(100), email varchar(100), oficio varchar(100),

primary key (ci)); 

create table DeporteCargo (ci integer, deportecargo varchar(100),

primary key (deportecargo)); 

create table tienen_deporte (CI_Docente integer, deportecargo varchar(100),

primary key (CI_Docente),

foreign key (CI_Docente) references Docente (ci),

foreign key (deportecargo) references DeporteCargo(deportecargo));
 
create table Recepcionista (ci integer, nombre varchar(100), apellido varchar(100), horario datetime, email varchar(100),

primary key (ci)); 

create table SedeCargo_recepcionista (ci integer, sedecargo varchar(100),

primary key (sedecargo)); 

create table tienen_sede (CI_Recepcionista integer, sedecargo varchar(100),

primary key (CI_Recepcionista),

foreign key (CI_Recepcionista) references Recepcionista (ci),

foreign key (sedecargo) references SedeCargo_recepcionista(sedecargo));

create table PersonalSeguridad (ci integer, nombre varchar(100), apellido varchar(100), horario datetime, email varchar(100),

primary key (ci)); 

create table SedeCargo_seguridad (ci integer, sedecargo varchar(100),

primary key (sedecargo));

create table tienen_seguridad (ci integer, sedecargo varchar(100),

primary key (ci),

foreign key (ci) references PersonalSeguridad (ci),

foreign key (sedecargo) references SedeCargo_seguridad(sedecargo));

create table PersonalMantenimiento (ci integer, nombre varchar(100), apellido varchar(100), horario datetime, email varchar(100), oficio varchar(100),

primary key (ci)); 

create table TipoMantenimiento (ci integer, tipomantenimiento varchar(100),

primary key (tipomantenimiento)); 

create table tiene_mantenimiento (ci integer, tipomantenimiento varchar(100),

primary key (ci),

foreign key (ci) references PersonalMantenimiento(ci),

foreign key (tipomantenimiento) references TipoMantenimiento(tipomantenimiento));

create table Socio (id integer, ci integer, nombre varchar(100), apellido varchar(100), email varchar(100), infomedica varchar(100),

primary key (id)); 

create table Evento (id integer, titulo varchar(100) , hora_fecha datetime , capacidad integer , ubicacion varchar(100) , descripcion varchar(100),

primary key (id));

create table DocentesCargo (id integer, docentescargo varchar(100),

primary key (id));

create table SociosInscripto (id integer, sociosinscripto integer,

primary key (id));

create table Ubicacion (id integer, calle varchar(100), ciudad varchar(100),

primary key (id));

create table Actividad (id integer, horario datetime, categoria varchar(100), sala integer,

primary key (id));

create table DocenteCargo (id integer, docentecargo varchar(100),

primary key (id));

create table Deporte (id integer, deporte varchar(100),

primary key (id));

create table Sala (id integer, nombre varchar(100), sala varchar(100), ubicacion varchar(100),

primary key (id));

CREATE TABLE Usuario(
    id INT NOT NULL AUTO_INCREMENT,
    usuario VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    PRIMARY KEY(Id)
)
ENGINE = InnoDB;