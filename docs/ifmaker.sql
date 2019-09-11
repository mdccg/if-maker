CREATE TABLE `palestrante` (
  `id` varchar(255) PRIMARY KEY,
  `nome` varchar(255),
  `email` varchar(255),
  `cpf` varchar(255),
  `rg` varchar(255),
  `orgao_emissor` varchar(255),
  `naturalidade` varchar(255),
  `data_nascimento` date
);

CREATE TABLE `evento` (
  `id` varchar(255) PRIMARY KEY,
  `titulo` varchar(255),
  `data_evento` timestamp,
  `palestrante_id` varchar(255) REFERENCES `palestrante`(`id`)
);

CREATE TABLE `inscricao` (
  `id` varchar(255) PRIMARY KEY,
  `nome` varchar(255),
  `data_inscricao` timestamp,
  `email` varchar(255),
  `cpf` varchar(255),
  `rg` varchar(255),
  `orgao_emissor` varchar(255),
  `naturalidade` varchar(255),
  `data_nascimento` date
);

CREATE TABLE `inscricao_evento` (
  `inscricao_id` varchar(255) REFERENCES `inscricao`(`id`),
  `evento_id` varchar(255) REFERENCES `evento`(`id`),
  PRIMARY KEY(`inscricao_id`, `evento_id`)
);
