# WebDev - Transformando Ideias em Realidade Digital

É um projeto que visa transformar ideias em soluções digitais

## Conceito e Objetivo

![Seção Hero](./src/images/imagem-hero-site.png)
Imagem - Hero Section

A ideia por trás desse projeto é auxiliar pessoas e empresas a concretizar suas visões digitais. Imagine que você tem uma ideia inovadora para o seu negócio, mas precisa de ajuda para transformá-la em um produto tangível, como um aplicativo, site ou sistema.

- **Processo de Transformação:**
  Assim como um escultor vê a beleza oculta em uma pedra bruta, a **WebDev** enxerga o potencial do seu produto, mesmo quando ele existe apenas como uma ideia.
  ![Seção Sobre e Depoimentos](./src/images/imagem-sobre-nos.png)

## Serviços Oferecidos:

![](./src/images/servicos.png)

**- Criação de Sites:** Criamos sites que combinam funcionalidade e estética.

**- Design Responsivo:** Lorem

**- Desenvolvimento de Apps:** Transformamos suas ideias em aplicativos funcionais.

![](./src/images/contato.png)

#### Se você quiser saber mais detalhes ou explorar o projeto, pode visitar o repositório no GitHub (https://github.com/tanaka-11/agencia-de-desenvolvimento)

## Futuramente

#### Banco de Dados

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
