drop database buscov;
create database buscov;
use buscov;
/**********************
	TABELA USUARIO
***********************/
CREATE TABLE usuario
(
  cod_usuario int NOT NULL AUTO_INCREMENT,
  nome tinytext NOT NULL,
  senha tinytext NOT NULL,
  email tinytext NOT NULL,
  cpf tinytext NOT NULL,
  longitude tinytext,
  latitude tinytext,
  PRIMARY KEY (cod_usuario)
);

select * from usuario;
drop table usuario;
/**********************
	TABELA EMPRESA
***********************/
CREATE TABLE empresa
(
  cod_empresa int NOT NULL AUTO_INCREMENT,
  nome varchar(50) NOT NULL,
  email tinytext NOT NULL,
  senha tinytext NOT NULL,
  cnpj varchar(18) NOT NULL,
  PRIMARY KEY (cod_empresa)
);

select * from empresa;
drop table empresa;
/**********************
	TABELA ONIBUS
***********************/
CREATE TABLE onibus
(
  cod_onibus int auto_increment,
  cod_empresa int,
  placa varchar(10) NOT NULL,
  assentos int NOT NULL,
  disponiveis int,
  ocupados int NOT NULL,
  longitude varchar(50),
  latitude varchar(50),
  preco varchar(5),
  horaInicio varchar(6),
  horaTermino varchar(6),
  origem varchar(40),
  destino varchar(40),
  PRIMARY KEY (cod_onibus),
  FOREIGN KEY (cod_empresa) REFERENCES empresa (cod_empresa)
);

select * from onibus;
drop table onibus;
/**********************
	TABELA CONTROLE
***********************/
CREATE TABLE controle
(
	cod_onibus int not null,
    cod_usuario int not null,
    data_entrada tinytext not null,
    data_saida tinytext not null,
    CONSTRAINT fk_cod_onibus FOREIGN KEY (cod_onibus) REFERENCES onibus (cod_onibus),
    CONSTRAINT fk_cod_usuario FOREIGN KEY (cod_usuario) REFERENCES usuario (cod_usuario)
);

drop table controle;
