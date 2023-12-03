# Стек
<img src="https://img.shields.io/badge/PHP8.0-4169E1?style=for-the-badge"/> <img src="https://img.shields.io/badge/PHP_FPM8.0-008000?style=for-the-badge"/> <img src="https://img.shields.io/badge/Moodle_4.0.4-yellow?style=for-the-badge"/> <img src="https://img.shields.io/badge/Docker-00BFFF?style=for-the-badge"/> <img src="https://img.shields.io/badge/PostgreSQL-87CEEB?style=for-the-badge"/> <img src="https://img.shields.io/badge/Nginx-67c273?style=for-the-badge"/>

# Описание проекта:

**Проект Moodle in Docker**

Проект представляет из себя систему дистанционного образования на базе проекта Moodle.

Открыть проект в интернете [тык](http://91.222.238.96/).

# Реализация

1. PHP: проект основан на php версии 8.0 и сопуствущие пакеты для этой версии.
2. В контейнер nginx-php-moodle происходит установка всего необходимого, запускается php-fpm на 9000 порту и запускает nginx, который прослушивает все запросы к серверу на 80 порт.
3. В контейнере postgres запущена база данных Postgres, дополнительно создается волюм, в котором сохраняется база данных.

# Как запустить проект:

*Клонировать репозиторий и перейти в него в командной строке:*
```
https://github.com/qzonic/moodle.git
```
```
cd moodle/
```

В директории moodle находится файл .env, в который записываются переменные окружения, на основе которых конфигурируется сервис Moodle.
Переменные, коотрые находятся в файле .env:
- NGINX_VERSION - версия nginx;
- MOODLE_WWWROOT - url адрес сервиса;
- MOODLE_UPGRADE_KEY - ключ для обновления Moodle;
- PGSQL_DATABASE - название базы данных;
- PGSQL_USER - имя пользователя базы данных;
- PGSQL_PASSWORD - пароль пользователя базы данных;

*Следующим шагом нужно выдать директории moodledata права уровня 777:*
```
find /opt/moodle/moodledata -type d -exec chmod 777 {} \;
```
*Теперь необходимо собрать Docker-контейнеры:*
```
docker-compose up -d
```

*После сборки контейнеров можно переходить по заданному url и произвести конфигурацию проекта.*


### Автор
[![telegram](https://img.shields.io/badge/Telegram-Join-blue)](https://t.me/qzonic)
