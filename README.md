<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Реализация API методов

Реализация методов restfulApi для взаимодействия с моделью users

Список команд для выполнения:
- Запуск окружения докер в фоновом режиме(sudo docker compose up -d)
- Запуск миграций (php
artisan migrate).

Список команд для выполнения:
- GET /api/users — получить список всех пользователей.
Возвращать массив объектов пользователей, содержащий
поля id, name, email, age;
- GET /api/users/{id} — получить данные конкретного
пользователя;
- POST /api/users — создать нового пользователя;
- PUT /api/users/{id} — обновить данные пользователя;
- DELETE /api/users/{id} — удалить пользователя.