symfony_project
===============

A Symfony project created on December 20, 2016, 3:05 pm.

Run `php app/console doctrine:database:create` to create the database.

Run `php app/console doctrine:generate:entities AppBundle/Entity/WWData` to create the entity.

Run `php app/console doctrine:schema:update --force` to create the schema/table.

## Load Willy Weather Sample Data
================================

Run `php app/console willyweather:load` to unzip the sample file, parse and load to database.

## Run the test script
======================

Run `./bin/phpunit -c app src/AppBundle/Command/WillyweatherProcessCommandTest.php

## How to run processors by field names
=======================================
Run `php app/console willyweather:process [FIELD]