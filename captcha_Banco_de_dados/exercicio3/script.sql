CREATE DATABASE login;

use login;

CREATE TABLE usuarios(
    id integer PRIMARY KEY AUTO_INCREMENT,
    nome varchar(100) NOT NULL,
    email varchar(50) NOT NULL,
    senha varchar(32) NOT NULL
);

INSERT INTO usuarios(nome, email, senha) VALUES ('Treinaweb', 'alunos@treinaweb.com.br', md5('treinaweb'));