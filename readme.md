# Installation guide #

## dependencies ##
- **Apache**: 2.4.x
    - **rewrite_module**
- 
- **PHP**>= 7.0.0
    - **curl**
    - **gd**
    - **mcrypt**
- **Node.js**>= 6.1
- **NPM**>= 4.2
- **Composer**: 1.1.3

## installation ##

- Configure Apache virtual host for directory PATH_TO_PROJECT_IN_SERVER/public
- Copy project file to PATH_TO_PROJECT_IN_SERVER

```bash
cd PATH_TO_PROJECT_IN_SERVER
chmod -R 777 storage
chmod -R 777 bootstrap/cache
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run dev
```

## technology stack ##
- **Laravel** 5.5
- **Node.js**
- **Twitter Bootstrap** 4.0
- **jQuery**


# How To:


This repository is a pre-configured project structure taken from Laravel. This project is about to check the occurence of the 'OIE' word inside multiples Alphabet soups.

## Unit Test

In order to make http call tests, just run the below command:

```bash
./vendor/bin/phpunit --filter CalculaTest
```

## Input data

Insert all alphabet soups into the textarea and click on the "calcular" button.

