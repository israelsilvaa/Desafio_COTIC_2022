# Desafio COTIC 2022

Este projeto foi proposto como prova avaliativa da Coordenadoria de Tecnologia da Informação e Comunicação (COTIC), o "desafio" como foi chamado, consistia em fazer uma aplicação web que recebesse do usuário os próximos personagens da 3º temporada do seriado "The Boys", com tecnologias como: ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white) e  ![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white) principalmente. 

- Quais foram os desafios de implementá-lo?
    Inicialmente era de fazer uma aplicação funcional, fazer toda a parte de CRUD em ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white) puro(algum tempo depois refis o desafio no framework ![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white), versão 8).

- O que você aprendeu com ele?
    Aprendi os fundamentos do ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white), a rotina básica com a implementação de crud, como se faz essa conexão com o banco e ainda a sintaxe com os elementos ![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white).

## Arquitetura

A arquitetura do desafio já havia sido bem definida devido ser uma seleção para desenvolvimento web em ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white), ainda assim o paradigma escolhido foi orientação a objetos, como eu teria que persistir vários personagem, todos com seus atributos, a orientação a objeto seria perfeita e simples para resolver esse desafio, esse paradigma foi mais visível com ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white) puro, logo depois o código ficou bem mais limpo quando implementado no Laravel 8.  

## Features

As funções desses projetos são bem básicas e diretas.

1. Criação de um personagem:
    Utilizando um form são preenchidas as informações básicas

2. Listagem:
    Listagem de todos os personagens criados, adicionando cor azul no nome e alinhamento de personagens "the boy" e vermelho para "super".

3. Atualização:
    Edição de todos as informações de um personagem.

4. Exclusão:
    Opção de apagar um personagem.

## Instruções de execução

Pré-requisitos:
1. Xampp v3.3
2. Composer v2

Após clonar ou baixar o .zip do projeto, execute os passos:

-iniciar os serviços dos xamp e criar uma base de dados com nome de sua preferência e codificação recomendada utf8mb4_general_ci.

-Dentro da pasta do projeto criar um arquivo chamado ".env" o seu conteúdo deve ser copiado inteiramente do arquivo .env-example, depois configure apenas as variáveis

    DB_DATABASE=NomeDoSeuBanco // criado na etapa anterior
    DB_USERNAME=root    // o padrão do xamp é "root".    
    DB_PASSWORD=        // o padrão do xamp é uma senha vazia.

Comandos no terminal (e dentro do diretório do projeto):

-Composer install

-php artisan key:generate

-php artisan serve

Após isso basta clicar no link que aparecera no terminal ou acessar em seu navegador a url: http://127.0.0.1:8000

## Extra - Sistema de autenticação nativa do laravel

No momento em que o projeto foi refeito em ![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white) eu adicionei também a funcionalidade de login para ter acesso a aplicação, o framework já implementa tudo isso de forma bem simples, ainda assim para implementar, foi necessário utilizar tecnologias como ![NodeJS](https://img.shields.io/badge/node.js-6DA55F?style=for-the-badge&logo=node.js&logoColor=white) e ![NPM](https://img.shields.io/badge/NPM-%23CB3837.svg?style=for-the-badge&logo=npm&logoColor=white)
