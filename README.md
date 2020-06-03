## Installation

Clone the repo locally:

```sh
git clone git@github.com:anotherfrontendguy/nova-test.git
cd nova-test
```

Install dependencies:

```sh
composer install
```

Setup configuration:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```

Create a database and update your configuration accordingly.

Run database migrations:

```sh
php artisan migrate
```

Create a nova user with

```sh
php artisan nova:user
```
