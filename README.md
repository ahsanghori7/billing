# billing_laravel

## Getting started
## Setup your project

```
cd billing_app
git remote add origin https://gitlab.com/adgrouptech/billing_laravel.git
git checkout development
git pull origin development
```

## Migration 

step 1) execute leads, subscribers these files on DB (available in database folder)

step 2) php artisan migrate 

step 3) php artisan migrate --path=/database/migrations/integration --database="integration" (for logs)

## Seeder

php artisan db:seed 
