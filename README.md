# Coinmarket App

## Technical requirements

-   [php ^7.4](https://www.php.net/manual/en/install.php)
-   [mysql ^8](https://www.postgresql.org/download/)
-   [composer ^1.10.9](https://getcomposer.org/)
-   [node ^14.15.0](https://nodejs.org/en/blog/release)

## Installation

-   Run `composer install` command.
-   Run `npm install && npm run prod` command.
-   Setup [Application environment](#application-environment) including [Database configuration](https://laravel.com/docs/8.x/database#configuration).

## Testing

Run `composer test` or `php artisan test` for PHP tests.

For coverage report use `composer test:coverage` (The coverage will be generated in `/coverage` directory).
