# Symfony Issue #54228 Reproducer

This project is a reproducer for the [issue 54228](https://github.com/symfony/symfony/issues/54228)
in the Symfony project.

## Installation

If you want to use the makefile and have Docker installed, just run:

```
$ make install
```

Then start the messenger

```
$ make messenger
```

Otherwise, run the following commands:

```
$ composer install
$ php bin/console doctrine:database:create
$ php bin/console doctrine:migrations:migrate --no-interaction
$ php bin/console messenger:consume async
```

## The error

When an SQL error happens in a message handler, it throws an error who stops the worker:

```
In EntityManager.php line 114:
                                                                     
  [Error]                                                            
  Cannot modify readonly property Doctrine\ORM\EntityManager::$conn  
```

## How to reproduce

After installing the project, run the example command:

```
$ make reproduce
```

If you do not use the makefile, just run the following PHP command:

```
$ php bin/console app:test
```
