# CRUD Agenda Laravel
Projeto Laravel de Modelo CRUD agenda

## Funções
- CRUDL Pessoa

> **Author:** Mateus Schwede, 2020
> **License:** MIT

## Pré-Requisitos
- Xampp Php e MySQL executando
- Composer e NPM instalados

## Arquivos Usados:
- .env
- Migrations/2020_11_22_150851_create_contatos_table.php
- Routes/web.php
- Controllers/pessoaController.php
- Models/pessoa.php
- Views, todos arquivos .blade.php

## Cronograma
1. Criar BD 'agenda'
2. Criar projeto Laravel 'agendaLaravel': *composer create-project --prefer-dist laravel/laravel agendaLaravel*
3. Configurar BD em .env
4. Criar Model, Migrations e Controller Resource: *php artisan make:model contato -mcr*
5. Parametrizar Migration, então Model
6. Resetar BD e executar migrations(php artisan migrate:fresh)
7. Definir routes 'get' e 'resources'
8. Programar métodos do Controller
9. Criar e Pogramar views(Em conjunto com passo 8)
