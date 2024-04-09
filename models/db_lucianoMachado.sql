drop database IF EXISTS db_LucianoMachado;

create database IF NOT EXISTS db_LucianoMachado;

use db_LucianoMachado;

create table tb_Agenda(
    cod_Agenda int not null auto_increment,
    data_Show datetime not null,
    estado char(2) not null,
    cidade varchar(50) not null,

    primary key(cod_Agenda)
);

create table tb_login(
cod_login int not null auto_increment,
usu_login varchar(50),
usu_senha varchar(50),

primary key(cod_login)
);

insert into tb_Agenda(data_Show,estado,cidade) value("2023-06-25 22:00:00", "RJ", "Cabo Frio");

insert into tb_login(usu_login, usu_senha) value("admin", "admin");