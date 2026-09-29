# Tasks for Today Management System

A CodeIgniter 4 and MySQL project for the IT0049 Technical Summative Assessment 1.

## Included requirements

- `/` - Welcome dashboard showing only tasks scheduled for today's date
- `/tasks` - complete task list, ordered by task date
- `/profile` - profile page for exactly one demo user
- `/about` - static developer information page
- `TaskModel` and `UserModel`
- database migration and seeder
- eight sample tasks across three dates, including today's date
- responsive navigation and styling

## Requirements

- PHP 8.1 or newer
- Composer
- MySQL 5.7+ or MariaDB

## Setup in VS Code

1. Open this folder in VS Code.
2. Create a MySQL database named `tasks_today_db`.
3. Copy `.env.example` and rename the copy to `.env`.
4. Update the database username/password in `.env` if needed.
5. Open the VS Code terminal and run:

```bash
composer install
php spark migrate
php spark db:seed TaskSeeder
php spark serve
```

6. Open `http://localhost:8080`.

If you need to reset the sample database, run `php spark migrate:refresh` and then `php spark db:seed TaskSeeder`.

## Database files

The schema is implemented in `app/Database/Migrations/2026-09-29-000001_CreateTasksAndUsers.php` and sample records are in `app/Database/Seeds/TaskSeeder.php`.

The seeder calculates the task dates from the current date, so the Welcome page always has today's sample tasks when it is run.

## Submission checklist

- Push the project source, migration, and seeder to GitHub.
- Do not commit `.env` or the `vendor` directory.
- Deploy to a PHP/MySQL host and update `app.baseURL` in the production environment.
- Test `/`, `/tasks`, `/profile`, and `/about` before submitting the hosted URL.
