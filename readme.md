# What's this?

This repository provides a sample project to explain how to build a query involving some queries

Refer to this entry in Qiita:

*

# How to use this

## Prerequisites

* Available Docker commands: `docker` and `docker-compose`
* MS SQL tools: `sqlcmd`
* PHP and Composer

## Setting up

### Get source code and Install packages

```
$ git clone
$ cd sakuragakuin
$ composer install
```

### Create DB

```
$ docker-compose -f docker-compose.yml up -d --build
```