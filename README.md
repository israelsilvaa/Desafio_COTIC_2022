# Desafio COTIC 2022

Este projeto foi proposto como prova avaliativa da Coordenadoria de Tecnologia da Informação e Comunicação (COTIC), o "desafio" como foi chamado, consistia em fazer uma aplicação web que recebesse do usuário os proximos personagens da 3º temporada do seriado "The Boys", com tecnologias como: ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white) e  ![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white) principalmente. 

- Quais foram os desafios de implementá-lo?
    Inicalmente era de fazer uma aplicação funcional, fazer toda a parte de CRUD em ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white) puro(algum tempo depois refis o desafio no framework ![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white), versão 8).

- O que você aprendeu com ele?
    Aprendi os fundamentos do ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white), a rotina basica com a implementação de crud, como se faz essa coneção com o banco e ainda a sintaxe com os elementos ![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white).

## Tabela de conteúdos

Aqui você coloca links para acessar mais facilmente cada um dos tópicos do seu README.

Exemplo:

- [Arquitetura](#arquitetura)
- [Features](#features)
- [Instruções de execução](#instruções-de-execução)
- [Extra](#extra---Sistema-de-auteticação-nativa-do-laravel)

## Arquitetura

A arquitetura do desafio ja havia sido bem definida devido ser uma seleção para desenvovimento web em ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white), ainda assim o paradigma escolhido foi oriantação a objetos, como eu teria que persitir varios personagem, todos com seus atritutos, a orientação a objeto seria perfeita e simples para resolver esse desafio, esse paradigma foi mais visivel com ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white) puro, logo depois o codigo ficou bem mais limpo quando implementado no Laravel 8.  

## Features

As funcoes desse projetos são bem basicas e diretas.

1. Criação de um personagem:
    Utilizando um form são preenchidas as informações basicas

2. Listagem:
    Listagem de todos os personagens criados, adicinando cor azul no nome e alinhamento de personagens "the boy" e vermelho para "super".

3. Atualização:
    Edição de todos as informações de um personagem.

4. Exclusão:
    Opção de apagar um personagem.

## Instruções de execução

Pre-requsitos:
1. Xampp v3.3
2. Composer v2

Apos clonar ou baixar o .zip do projeto, execute os passos:

-iniciar os seviços dos xamp e criar uma base de dados com nome de sua preferencia e codificação recomendada utf8mb4_general_ci.

-Dentro da pasta do projeto criar um arquivo chamado ".env" o seui conteudo deve ser copiado inteiramente do arquivo .env-example, depois configure apenas as variaveis

    DB_DATABASE=NomeDoSeuBanco // criado na etapa anterior
    DB_USERNAME=root    // o padrão do xamp é "root".    
    DB_PASSWORD=        // o padrão do xamp é uma senha vazia.

Comandos no terminal(e dentro do diretorio do projeto):

-Composer install

-php artisan key:generate

-php artisan serve

Apos isso basta clicar no link que aparecera no terminal ou acessar em seu navegador a url: http://127.0.0.1:8000

## Extra - Sistema de auteticação nativa do laravel

No momento em que o projeto foi refeito em ![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white) eu adicionei tambem a funcionalidade de login para ter acesso a aplicação, o framework já implementa tudo isso de forma bem simples, ainda assim para implementar, foi necessario utilixar tecnologias como ![NodeJS](https://img.shields.io/badge/node.js-6DA55F?style=for-the-badge&logo=node.js&logoColor=white) e ![NPM](https://img.shields.io/badge/NPM-%23CB3837.svg?style=for-the-badge&logo=npm&logoColor=white)