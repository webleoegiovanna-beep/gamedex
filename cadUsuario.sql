CREATE DATABASE cadUsuario;

USE cadUsuario;

CREATE TABLE usuarios (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    username VARCHAR(100) NOT NULL,
    genero ENUM('acao', 'estrategia', 'terror') NOT NULL,
    senha VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
