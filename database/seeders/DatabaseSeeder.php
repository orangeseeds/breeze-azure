<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CountrySeeder::class,
            DataRowsTableSeeder::class,
            DataTypesTableSeeder::class,
            MenuItemsTableSeeder::class,
            MenusTableSeeder::class,
            PermissionRoleTableSeeder::class,
            PermissionTableSeeder::class,
            RolesTableSeeder::class,
            SettingsTableSeeder::class,
            TranslationsTableSeeder::class,
            VoyagerDatabaseSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
