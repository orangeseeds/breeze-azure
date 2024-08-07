## A prototype CMS for consultany management

Breeze simplifies the search process by offering a curated list of consultancies tailored to your requirements. Here's a closer look at its key features:

Technologies Utilized:

1. Laravel: Used for the backend and the REST API.
    - Faker: For dummy data generation
    - Breeze : For Authentication and scaffolding
    - Sail : For docker-file management
    - Voyager: For managing dashboards and database without using code.

2. VueJS: Utilized for frontend development. VueJS's reactive approach and integration with laravel and simplicity allow for building dynamic user interfaces with ease.

# Running the Application
- `composer install` or `composer update`
- `composer dump-autoload`
- `php artisan voyager:install --with-dummy`
- `php artisan migrate:fresh --seed`
That's probably all, I'm not entirely sure.

If you want to create a new voyager admin user:
- `php artisan voyager:admin admin@admin.com --create`

And, if Voyager doesn't work as expected, in the `user_roles` table, add your admin user's `user_id` and `1` as the role id.


# Don't forget to
- `composer install` or `composer update`
- `composer dump-autoload`
- `php artisan voyager:install --with-dummy`
- `php artisan migrate:fresh --seed`
That's probably all, I'm not entirely sure.

If you want to create a new voyager admin user:
- `php artisan voyager:admin admin@admin.com --create`

And, if Voyager doesn't work as expected, in the `user_roles` table, add your admin user's `user_id` and `1` as the role id.
