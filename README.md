# CRUD de Sessões Fotográficas

Este projeto é um **sistema de gestão de sessões fotográficas**, desenvolvido com **PHP** e **MySQL**. O sistema permite que fotógrafos se cadastrem, façam login e gerenciem suas sessões fotográficas, com funcionalidades para adicionar, editar, excluir e visualizar sessões.

## Funcionalidades principais:

- **Cadastro e Login**: Fotógrafos podem criar uma conta e realizar login no sistema.
- **Gestão de Sessões**: Fotógrafos podem adicionar novas sessões, editar sessões existentes, excluir sessões ou visualizar os detalhes de sessões anteriores.
- **Banco de Dados**: Utiliza um banco de dados MySQL para persistir as informações de sessões e fotógrafos.

## Tecnologias utilizadas:

- **PHP**: Linguagem de programação para o backend.
- **MySQL**: Banco de dados relacional para armazenar dados de sessões e fotógrafos.

## Requisitos:

- PHP >= 7.4
- MySQL

## Como rodar o projeto:

1. Clone o repositório:
   ```bash
   git clone https://github.com/davi1sousa/CRUD-sessoes-fotograficas.git


2. **Instale o XAMPP**:
   - Baixe e instale o [XAMPP](https://www.apachefriends.org/index.html), que inclui o Apache (servidor web) e o MySQL (banco de dados).
   
3. **Configuração do Banco de Dados**:
   - Abra o `phpMyAdmin` acessando `http://localhost/phpmyadmin/`.
   - Crie um banco de dados chamado `fotografo_app`.
   - Importe as tabelas ou crie-as manualmente de acordo com o esquema do projeto.

3. **Configuração do Projeto**:
   - Baixe ou clone este repositório na pasta `htdocs` do XAMPP;
   - Abra o arquivo de configuração do banco de dados ( `db_config.php`) e altere as credenciais para conectar com o banco de dados criado.

4. **Rodando o Projeto**:
   - Abra o painel de controle do XAMPP e inicie o Apache e o MySQL.
   - Abra o navegador e acesse o projeto em `http://localhost/CRUD-sessoes-fotograficas`.

5. **Testando as Funcionalidades**:
   - Acesse as funcionalidades de login, cadastro, e gerenciamento de sessões fotográficas.
   - Teste a criação, edição, exclusão e visualização das sessões.

## Funcionalidades

- **Login e Cadastro**: Fotógrafos podem se cadastrar e fazer login para acessar suas sessões fotográficas.
- **Gerenciamento de Sessões**: Fotógrafos podem adicionar, editar e excluir sessões de fotografia.
- **Visualização de Sessões**: Fotógrafos podem visualizar todos os detalhes das sessões cadastradas.
