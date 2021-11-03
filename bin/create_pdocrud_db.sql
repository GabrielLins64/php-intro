CREATE DATABASE pdocrud;

\c pdocrud;

CREATE TABLE IF NOT EXISTS produtos
(
  id SERIAL PRIMARY KEY,
  nome VARCHAR(100),
  descricao VARCHAR(255)
);
