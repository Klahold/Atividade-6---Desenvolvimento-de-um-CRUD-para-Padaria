-- Criar o banco de dados
CREATE DATABASE bumba_meu_pao_system;

-- Usar o banco de dados
USE bumba_meu_pao_system;

-- Criar a tabela usuarios
CREATE TABLE usuarios (
    id_usuarios INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
-- Criar a tabela clientes
CREATE TABLE clientes(
    id_clientes INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    telefone VARCHAR (12) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE produtos (
  id_produtos int AUTO_INCREMENT NOT NULL,
  nome varchar(100) NOT NULL,
  descricao TEX NOT NULL,
  preco DECIMAL(10,2) NOT NULL,
  quantidade_estoque INT NOT NULL
  id_usuarios INT NOT NULL,
  FOREIGN KEY (id_usuarios) REFERENCES usuarios(id_usuarios)
);

CREATE TABLE pedido (
  id_pedido INT AUTO_INCREMENT NOT NULL,
  quantidade INT NOT NULL,
  data_pedido DATETIME NOT NULL,
  status VARCHAR(50) NOT NULL,

  id_cliente INT NOT NULL,
  id_produto INT NOT NULL,

  FOREIGN KEY (id_clientes) REFERENCES clientes(id_clientes),
  FOREIGN KEY (id_produtos) REFERENCES clientes(id_produtos)
);

