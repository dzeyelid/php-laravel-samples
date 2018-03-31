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

How to create new projects
----

This project has `notes` project already. If you want another project, you can create by following code.

```bash
cd php-laravel-samples
docker-compose up -d
docker exec -it --user laravel php-laravel-samples-web /bin/bash
laravel@f63ab0f00c50:/var/www/html$ laravel new <project name>
```

Then you access `http://localhost/<project name>/public/`, you can see Laravel logo.


How to stop
----

```bash
cd php-laravel-samples
docker-compose down
```