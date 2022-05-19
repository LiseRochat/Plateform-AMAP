
# Plateforme AMAP | Projet de formation 


## The project : "Plateforme AMAP"
Formation's project currently being evolved into a major project for the association AMAP AURA.
The project is being completely overhauled.

![ho](https://user-images.githubusercontent.com/87066549/164452025-dd968e90-33f9-4102-bcf5-ce4b39947846.png)


## Installation

>the project works with SYMPHONY (PHP framework)

To install PHP, if you haven't
[The official documentation](https://www.php.net/downloads)
  

- [ ]  Install [PHP](https://www.php.net/downloads)
- [ ]  Install [Symfony CLI](https://symfony.com/download)  :
```bash
  scoop install symfony-cli
```
- [ ]  Install [Composer](https://getcomposer.org/download/)  :

## Run Locally

Clone the project

```bash
  git clone https://github.com/julieprunaret/Plateforme-amap.git
```

Go to the project directory

```bash
  cd Plateforme-amap
```

Install dependencies

```bash
 composer install 
```

```bash
  symfony console doctrine:database:create
  symfony console make:migration
  symfony console doctrine:migrations:migrate
  symfony server:start
```

>start your XAMPP/WAMPP/MAMPP...

install and run the database (you can download it in the repository)

## Technologies

- PHP 
- SASS
- SQL

## Inscription with mail/checking

![inscription](https://user-images.githubusercontent.com/87066549/164469486-1d1fce5a-6628-4173-915d-ed4895bf2567.png)

![confirmation](https://user-images.githubusercontent.com/87066549/164469496-cd2b2146-b089-4d51-9c48-1e43bc8d0f0a.png)

![connexion 2](https://user-images.githubusercontent.com/87066549/164469667-97d82349-4ee1-4258-bf47-0aefc663d621.png)

You can just log with:

user : jojo

pw : azertyui

![connexion](https://user-images.githubusercontent.com/87066549/164469680-5f389a5d-e4b5-430e-8b31-1e007e284fba.png)

## BackOffice with product CRUD



https://user-images.githubusercontent.com/87066549/164471225-a945f8b6-96ff-48ce-93e8-a80dfeb66e49.mp4



## New FrontOffice Version (V.1)


https://user-images.githubusercontent.com/87066549/164473706-da4c8071-7713-4a04-a7b1-f62b46167f8b.mp4





## Team for the V.0

[Mathilde](https://github.com/Evlow) : UI/UI DESIGN / full stack development

[Kevin](https://github.com/KevinLANGLET) :  Marketing / front-end development

[Lise](https://github.com/LiseRochat) : Project management / full stack development / project organization

[Julie](https://github.com/julieprunaret/) : UI/UI DESIGN / full stack development / project organization


## Team for the V.1

[Lise](https://github.com/LiseRochat) : Project management / full stack development / project organization

[Julie](https://github.com/julieprunaret/) : UI/UI DESIGN / full stack development / project organization
