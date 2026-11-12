# Laravel POS TFA7

This project extends the TFA6 Laravel POS application with TFA7 forms, validation, customer and user create/edit workflows, and safe avatar upload handling.

## TFA7 features

- Customer create and edit forms with required full name and valid email validation.
- User create and edit forms with unique username validation.
- CSRF protection, old input restoration, and field-level validation feedback.
- Optional JPG/PNG avatar upload limited to 2 MB.
- Uploaded avatars are cropped to a 300 × 300 JPEG using Intervention Image and stored on Laravel's public disk.
- Existing avatars are removed only after a replacement has been successfully prepared.
- User listing displays the prepared avatar or an initials fallback.

## Local setup

1. Copy `.env.example` to `.env`, then run `composer install`.
2. Set `DB_CONNECTION=sqlite` and create `database/database.sqlite`, or configure MySQL.
3. Run `php artisan key:generate`, `php artisan migrate --seed`, and `php artisan storage:link`.
4. Start the app with `php artisan serve`.

## InfinityFree setup

InfinityFree normally requires the project to be uploaded with the document root pointed to the `public` directory. Use `.env.infinityfree.example` as the starting point for the production `.env`; enter the MySQL credentials from the hosting control panel, set the real `APP_URL`, and generate a real `APP_KEY` before deployment. Run the migrations and seeders from an available terminal, or import the database using the migration files. If `storage:link` is unavailable, the included `/storage/...` fallback route serves prepared avatars safely from the public disk.

The project requires PHP 8.3 or newer and the Composer dependencies listed in `composer.json`, including `intervention/image-laravel`.


<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
