# Don't forget to
- `composer install` or `composer update`
- `composer dump-autoload`
- `php artisan voyager:install --with-dummy`
- `php artisan migrate:fresh --seed`
That's probably all, I'm not entirely sure.

If you want to create a new voyager admin user:
- `php artisan voyager:admin admin@admin.com --create`

And, if Voyager doesn't work as expected, in the `user_roles` table, add your admin user's `user_id` and `1` as the role id.
