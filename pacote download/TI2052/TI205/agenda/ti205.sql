-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
--   
--
-- Host: 127.0.0.1
-- Generation Time: 16-Maio-2018 às 14:38
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: liccomp
--

DROP DATABASE IF EXISTS ti205;

CREATE DATABASE IF NOT EXISTS ti205  
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE ti205;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

DROP TABLE IF EXISTS `agenda`;
CREATE TABLE IF NOT EXISTS `agenda` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `endereco` varchar(80) NOT NULL,
  `complemento` varchar(60) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `cep` char(8) NOT NULL,
  PRIMARY KEY (`codigo`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Insere alguns registros na tabela 'agenda'
--
INSERT INTO `agenda`(`nome`, `endereco`, `complemento`, `bairro`, `cidade`, `cep`) 
VALUES ('Antonio Pedro','Avenida Nilo Peçanha','casa 100','Cemtro','Valença','27600000');

INSERT INTO `agenda`(`nome`, `endereco`, `complemento`, `bairro`, `cidade`, `cep`) 
VALUES ('Maria José','Rua Padre Luna','casa 1','Centro','Valença','27600000');

INSERT INTO `agenda`(`nome`, `endereco`, `complemento`, `bairro`, `cidade`, `cep`) 
VALUES ('Bruno Lemos','Rua 33','nº 132','Vila Santa Cecília','Volta Redonda','22222222');
