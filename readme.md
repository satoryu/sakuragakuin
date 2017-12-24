# What's this?

This repository provides a sample project to explain how to build a query involving some queries

Refer to this entry in Qiita:

* [サブクエリをJOINするSQLをQuery Builderで作る - Qiita](https://qiita.com/sato_ryu/items/1033fe51b886622a6dda)

# How to use this

## Prerequisites

* Available Docker commands: `docker` and `docker-compose`
* MS SQL tools: `sqlcmd`
* PHP and Composer

## Setting up

### Get source code and Install packages

```
$ git clone https://github.com/satoryu/sakuragakuin.git
$ cd sakuragakuin
$ composer install
```

### Setting up environment variables

```
$ cp .env.example .env
$ php artisan key:generate
```

### Create DB

```
$ docker-compose -f docker-compose.yml up -d --build
$ docker-compose exec sqlsrver /opt/mssql-tools/bin/sqlcmd -H 127.0.0.1 -U SA -P S@kur@g@ku1n -q "CREATE DATABASE sakuragakuin"

$ php artisan migrate
$ php artisan db:seed
```

### Run the app!

```
$ php artisan serve
```

You can access http://localhost:8000/

# License

Copyright (c) Tatsuya Sato

MIT License

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.