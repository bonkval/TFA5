# [VIEW ACTIVITY SCREENSHOTS HERE](https://github.com/bonkval/TFA5/blob/main/IT0049%20-%20TFA5%20-%20From%20Zero%20to%20Four%20Pages%20%28Laravel%20POS%20Foundations%29.pdf)

**Professor: Click the heading above to view the activity PDF containing the application screenshots. The PDF can be viewed directly on GitHub.**

## TFA5 Laravel POS Foundations

Laravel rebuild of the TFA1 POS application with a landing page, an About page, Customer Accounts, and User Accounts. Each account page displays five sample records from a static PHP array using Blade `@foreach`.

| Page | Route |
| --- | --- |
| Home | `/` |
| About | `/about` |
| Customer Accounts | `/customers` |
| User Accounts | `/users` |

## Run locally

Requires PHP 8.3 or newer and Composer.

```powershell
composer install
# Copy only if .env does not already exist:
Copy-Item .env.example .env
php artisan key:generate
php artisan serve
```

Open http://127.0.0.1:8000. These pages use static data and file-based sessions and cache, so no database setup or frontend build is needed.
