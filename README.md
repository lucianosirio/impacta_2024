# Projeto-2RUD
## Registration | Read | Update | Delete
#### *Cadastrar | Visualizar | Editar | Excluir*




## Requisitos

* PHP 8.2 ou superior
* Composer
* Node

Para implementar o Layout:
* Bootstrap

## Como rodar o projeto baixado

* Incializar o BD e PHP no XAMP
* No terminal acesse a pasta do projeto e execute o comanto abaixo:
```
php artisan serve
```

## Sequencia para criar o projeto

### **Criar o projeto com Laravel**
* Instale o Laravel
* Instale o Composer

E execute o  comando abaixo para criar o projeto:
```
composer create-project laraval/laravel .
```

### **Iniciar o projeto criado com Laravel**
```
php artisan serve
```
Após iniciar o php clique no localhost informado:

http://127.0.0.1:8000

### **Criar um diretório para as Controllers**

ex: php artisan make:controller (NomeController)
```
php artisan make:controller CourseController
```

### **Criar View**

ex: php artisan make:view nome
```
php artisan make:view courses/show 
```


### **Executar as migration - *(antes de executar, configurar arquivo env.)***
```
php artisan migrate 
```

### **Criar Models**
ex: php artisan make:model NomeDaModel
```
php artisan make:model Course
```

### **Criar um arquivo de Request com validações**
```
php artisan make:request NomeDoRequest
```

## **Instalar o framework Bootstrap** 
```
npm install
```

Instalar o sass
```
npm i --save bootstrap @popperjs/core
npm i --save-dev sass
``` 
Executar as bibliotecas Node.js
```
npm run dev
```
