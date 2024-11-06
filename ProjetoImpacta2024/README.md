C:\wamp64\bin\php\php8.2.18\php.exe

=======================================
README.md

## Requisitos

* PHP 8.2 ou superior
* Composer

## Como rodar o projeto baixado


## Sequencia para criar o projeto
Criar o porjeto com Laravel
```

composer create-project laraval/laravel .
```

Iniciar o projeto criado com Laravel
```
php artisan serve
```
http://127.0.0.1:8000
```
Criar Controller
```
php artisan make:controller NomeController
```
php artisan make:controller CourseController
```

Criar View
```
php artisan make:view nome

php artisan make:view courses/show 


Executar as migrationCriar Controller
```
php artisan migrate (antes de executar, configurar arquivo env.)

Criar Models
```
php artisan make:model NomeDaModel

php artisan make:model Course

Criar um arquivo de Request com validações
```
php artisan make:request NomeDoRequest

php 