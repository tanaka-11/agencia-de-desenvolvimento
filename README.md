# WebDev - Transformando Ideias em Realidade Digital

## Banco de Dados

- Nome: **webdev**

- Tabela de Clientes

```sql
CREATE TABLE clientes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    mensagem TEXT
);
```

- Tabela de Serviços

```sql
CREATE TABLE servicos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    descricao TEXT NOT NULL,
    imagem VARCHAR(255) NOT NULL
);
```
