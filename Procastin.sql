create database Procastin
use Procastin

create table Usuario(
IdUsuario int primary key,
NombreUsuario nvarchar(50),
CorreoUsuario varchar(50),
Experiencia bigint,
RangoUsuario varchar(50),
IdProyecto int,
IdLogro int,
IdContacto int)

create table Proyectos(
IdProyecto int primary key,
NombreProyecto nvarchar(50),
DescProyecto nvarchar(300),
FechaInicio date,
FechaFinal date,
IdTarea int)

create table Tareas(
IdTarea int primary key,
NombreTarea nvarchar(50),
DescTarea nvarchar(300),
DifilcutadTarea tinyint,
EstadoTarea varchar(20))

create table Contactos(
IdContacto int primary key,
NombreContacto nvarchar(50),
RangoContacto varchar(50))

create table Logros(
IdLogro int primary key,
NombreLogro varchar(50),
DificultadLogro tinyint)

alter table Usuario add constraint FK_Usuario_Proyectos foreign key (IdProyecto) references Proyectos(IdProyecto)
alter table Usuario add constraint FK_Usuario_Logros foreign key (IdLogro) references Logros(IdLogro)
alter table Usuario add constraint FK_Usuario_Contactos foreign key (IdContacto) references Contactos(IdContacto)

alter table Proyectos add constraint FK_Proyectos_Tareas foreign key (IdTarea) references Tareas(IdTarea)