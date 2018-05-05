PHP Laravel Samples
====

Develop on local
====

Requirements
----

- Docker (Docker Compose)

How to run
----

```bash
git clone git@github.com:dzeyelid/php-laravel-samples.git
cd php-laravel-samples
docker-compose up -d
```

How to initialize
----

```bash
cd php-laravel-samples
cp .env.local .env
docker-compose up -d
docker exec -it --user laravel php-laravel-samples-web /bin/bash
cd polls
php artisan key:generate
php artisan migrate
```

How to create new projects
----

This project has `polls` project already. If you want another project, you can create by following code.

```bash
cd php-laravel-samples
docker-compose up -d
docker exec -it --user laravel php-laravel-samples-web /bin/bash
laravel@f63ab0f00c50:/var/www/html$ laravel new <project name>
```

The project is placed under `web/app/<project name>` on local machine.

And you should change webroot at `web/conf/nginx/sites-enabled/default`.

```diff:web/conf/nginx/sites-enabled/default
-       root /var/www/html/polls/public;
+       root /var/www/html/<project name>/public;
```

Then you access `http://localhost/`, you can see a Laravel project page.


How to stop
----

```bash
cd php-laravel-samples
docker-compose down
```