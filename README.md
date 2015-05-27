# Silex MVC Skeleton

[![Build Status](https://travis-ci.org/chxj1992/Silex-MVC-Skeleton.svg?branch=master)](https://travis-ci.org/chxj1992/Silex-MVC-Skeleton) 

[Silex](http://silex.sensiolabs.org/documentation) is an awesome micro PHP framework based on the Symfony2 components. And this is an MVC skeleton project for Silex!


### Getting Started

Make sure the `composer` is already installed on your machine. If it's not, you can follow [this document](https://getcomposer.org/doc/00-intro.md) or just simple run the:

    curl -sS https://getcomposer.org/installer | php
    mv composer.phar /usr/local/bin/composer


Then you can run these commands to start the project:

    composer install
    composer run

The project will run on your `localhost:8000` by default, and of course you can change it in the composer.json. And you **SHOULD** also update your project namespace in the composer.json, which is `My\Project` by default(don't forget updating the namespace in the code as well).


### What Provided

**[PHPUNIT](https://phpunit.de)**

You can run all the tests in your project(src/Test) easily by executing `phpunit` in the root of your project. And There are alreay some base class for the functional tests and database test.


**[PHPCI](https://www.phptesting.org)**

PHPCI is an easy continuous integration tool specifically designed for PHP(and also written in PHP).

And there's also [a blog about phpci(in chinese)](http://blog.chxj.name/php-continuous-integration-phpci/). Hope you can like it.
    

**[Doctrine Migrations](http://docs.doctrine-project.org/projects/doctrine-migrations/en/latest/reference/introduction.html)**

There are some frequently-used commands for your db migration work:

    bin/console migrations:generate
    bin/console migrations:migrate -e prod (default:dev)
    bin/console migrations:migrate prev -e prod (default:dev)
    
The doctrine migrations is based on the [doctrine dbal](http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/schema-representation.html), which means you can easily migrate your database with those methods in doctrine dbal.


**[Silex SimpleUser](https://github.com/jasongrimes/silex-simpleuser)**

Silex-SimpleUser is a third-party user module for a Silex project, and the `UserManager` object in the library can be very useful. There's a [nice tutorial](http://www.jasongrimes.org/2014/09/simple-user-management-in-silex/) for the library.
