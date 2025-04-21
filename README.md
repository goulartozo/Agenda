# 📒 Agenda de Contatos

Este é um projeto simples de uma agenda de contatos desenvolvido com **PHP**, **HTML**, **CSS** e utilizando um **banco de dados PostgreSQL** para armazenamento.

## ✨ Funcionalidades

- 📋 Cadastro de novos contatos
- 🔍 Visualização de todos os contatos cadastrados
- ✏️ Edição dos contatos
- 🗑️ Exclusão de contatos
- 🧾 Campo para observações

## 🧱 Estrutura do Banco de Dados

A agenda utiliza uma tabela chamada `contacts` com a seguinte estrutura:

| Coluna        | Tipo                     | Descrição                        |
|---------------|--------------------------|----------------------------------|
| `id`          | `serial` (PK)            | Identificador único do contato  |
| `name`        | `character varying(150)` | Nome do contato                 |
| `phone`       | `character varying(20)`  | Número de telefone              |
| `observations`| `text`                   | Observações gerais              |

## 🛠️ Tecnologias Utilizadas

- **PHP** (backend e conexão com banco)
- **HTML/CSS** (estrutura e estilo)
- **PostgreSQL** (armazenamento de dados)

## 🚀 Como Rodar o Projeto

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/seu-repositorio.git
2. Inclua o projeto no diretorio do seu Apache
3. Altere os dados de conexão com o banco de dados no arquivo "config/connections.php"
