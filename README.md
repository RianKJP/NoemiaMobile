# 🪚 Catálogo de Móveis de Marcenaria

Este projeto é um site de **catálogo e checkout para móveis de marcenaria**, permitindo que clientes visualizem produtos exclusivos, adicionem ao carrinho e finalizem pedidos.  
A ideia é oferecer uma plataforma simples, organizada e escalável, feita em **PHP com MVC básico**.

---

## 🚀 Funcionalidades

- Visualizar catálogo de móveis (com imagens, descrição e preço).  
- Adicionar e remover produtos do carrinho.  
- Sistema de autenticação de usuários (login/registro).  
- Checkout de pedidos.  
- Estrutura organizada em **MVC**.  
- Arquivos de configuração e banco de dados versionados.  

---

## 📂 Estrutura de Pastas

```bash
/src
  /app
    header.php
    footer.php
    Home.php
    Catalog.php
    Cart.php
    Auth.php
  /lib
    functions.php
    session.php
    auth.php
  /models   # (Etapa 10)
    Product.php
    User.php
    Cart.php
    Database.php
/public
  index.php
  assets/
config.php
db.sql
README.md
SEED.json
