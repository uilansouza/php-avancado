CREATE table session(
    id char(128) not null,
    conteudo text not null,
    ultimo_acesso timestamp not null DEFAULT CURRENT_TIMESTAMP,
    PRIMARY key (id)
    );