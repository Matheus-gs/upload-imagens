CREATE DATABASE upload_imagens;

USE upload_imagens;

CREATE TABLE imagem(
    id_imagem INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    
    codigo int(10) NOT NULL,

    nome_imagem varchar(25) NOT NULL,

    tamanho_imagem varchar(25) NOT NULL,

    tipo_imagem varchar(25) NOT NULL,

    imagem longblob NOT NULL

    PRIMARY KEY (id_imagem)
);