-- Create the database
CREATE DATABASE sistemalogin;

-- Connect to the database
\c sistemalogin;

-- Create the user table
CREATE TABLE IF NOT EXISTS usuarios
(
    id SERIAL,
    nome VARCHAR(255),
    login VARCHAR(255),
    senha VARCHAR(32),
    PRIMARY KEY (id)
);

-- Inserting the first user
INSERT INTO usuarios
(
    nome,
    login,
    senha
)
VALUES
(
    'Gabriel Lins',
    'admin',
    MD5('admin')
);