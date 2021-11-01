-- Create the database
CREATE DATABASE crud;

-- Connect to the database
\c crud;

-- Create the user table
CREATE TABLE IF NOT EXISTS clientes
(
    id SERIAL,
    nome VARCHAR(255),
    sobrenome VARCHAR(255),
    email VARCHAR(255),
    idade INTEGER,
    PRIMARY KEY (id)
);
