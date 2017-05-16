# My-TEST project

## Description
This repository is my first (serious) attempt to create, step-by-step, a basic PHPUnit testing application.
This code it is not useful to anyone looking for a PHPUnit testing wrapper, it is just simple example of installing and using PHPUnit.

## Programming Languages
The languages that used are:
- PHP
- HTML

## Instalation
Below are the steps to produce this example PHPUnit application:
- Copy the files to root folder of your server (e.g. htdocs, www )
- Install PHPUnit (here the version for Windows was used) following the instructions here: [PHPUnit installation for Windows](https://phpunit.de/manual/current/en/installation.html#installation.phar.windows) 
- Install Composer (again the windows version is used here) following the instructions here: [Composer for Windows](https://getcomposer.org/download/)
- Create a json file in the root directory with name 'composer.json' open it and add the following:

```json
{
    "require-dev": {
        "phpunit/phpunit": "6.1"
    }
}
```

- PHPUnit version is the latest stable at the time of writing this code (of course you can modify the PHPUnit version)
- Then via command line and using composer install PHPUnit with the command (from the root folder): composer install
- From that point you are ready to create your application classes and test them with PHPUnit
- For this sample code the "classes" folder includes the apllication's classes and the folder "testing" the PHPUnit testing classes
- For calling the test class execute the "phpunit ClassNameTest"

# Test Environment
- Apache 2.4.23
- PHP 7.0.10

# About me
- :link: Website: [ntallas.eu](https://ntallas.eu)
- :link: GitHub: [midall](https://github.com/midall)