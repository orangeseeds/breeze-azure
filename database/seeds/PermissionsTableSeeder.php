<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_consultancies',
                'table_name' => 'consultancies',
                'created_at' => '2020-11-14 15:30:32',
                'updated_at' => '2020-11-14 15:30:32',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_consultancies',
                'table_name' => 'consultancies',
                'created_at' => '2020-11-14 15:30:32',
                'updated_at' => '2020-11-14 15:30:32',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_consultancies',
                'table_name' => 'consultancies',
                'created_at' => '2020-11-14 15:30:33',
                'updated_at' => '2020-11-14 15:30:33',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_consultancies',
                'table_name' => 'consultancies',
                'created_at' => '2020-11-14 15:30:33',
                'updated_at' => '2020-11-14 15:30:33',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_consultancies',
                'table_name' => 'consultancies',
                'created_at' => '2020-11-14 15:30:33',
                'updated_at' => '2020-11-14 15:30:33',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_consultancy_course',
                'table_name' => 'consultancy_course',
                'created_at' => '2020-11-14 15:31:36',
                'updated_at' => '2020-11-14 15:31:36',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_consultancy_course',
                'table_name' => 'consultancy_course',
                'created_at' => '2020-11-14 15:31:36',
                'updated_at' => '2020-11-14 15:31:36',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_consultancy_course',
                'table_name' => 'consultancy_course',
                'created_at' => '2020-11-14 15:31:36',
                'updated_at' => '2020-11-14 15:31:36',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_consultancy_course',
                'table_name' => 'consultancy_course',
                'created_at' => '2020-11-14 15:31:36',
                'updated_at' => '2020-11-14 15:31:36',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_consultancy_course',
                'table_name' => 'consultancy_course',
                'created_at' => '2020-11-14 15:31:36',
                'updated_at' => '2020-11-14 15:31:36',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'browse_countries',
                'table_name' => 'countries',
                'created_at' => '2020-11-14 15:32:48',
                'updated_at' => '2020-11-14 15:32:48',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'read_countries',
                'table_name' => 'countries',
                'created_at' => '2020-11-14 15:32:48',
                'updated_at' => '2020-11-14 15:32:48',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'edit_countries',
                'table_name' => 'countries',
                'created_at' => '2020-11-14 15:32:48',
                'updated_at' => '2020-11-14 15:32:48',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'add_countries',
                'table_name' => 'countries',
                'created_at' => '2020-11-14 15:32:48',
                'updated_at' => '2020-11-14 15:32:48',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'delete_countries',
                'table_name' => 'countries',
                'created_at' => '2020-11-14 15:32:48',
                'updated_at' => '2020-11-14 15:32:48',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_courses',
                'table_name' => 'courses',
                'created_at' => '2020-11-14 15:33:18',
                'updated_at' => '2020-11-14 15:33:18',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_courses',
                'table_name' => 'courses',
                'created_at' => '2020-11-14 15:33:18',
                'updated_at' => '2020-11-14 15:33:18',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_courses',
                'table_name' => 'courses',
                'created_at' => '2020-11-14 15:33:18',
                'updated_at' => '2020-11-14 15:33:18',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_courses',
                'table_name' => 'courses',
                'created_at' => '2020-11-14 15:33:18',
                'updated_at' => '2020-11-14 15:33:18',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_courses',
                'table_name' => 'courses',
                'created_at' => '2020-11-14 15:33:18',
                'updated_at' => '2020-11-14 15:33:18',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'browse_reviews',
                'table_name' => 'reviews',
                'created_at' => '2020-11-14 15:34:03',
                'updated_at' => '2020-11-14 15:34:03',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'read_reviews',
                'table_name' => 'reviews',
                'created_at' => '2020-11-14 15:34:03',
                'updated_at' => '2020-11-14 15:34:03',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'edit_reviews',
                'table_name' => 'reviews',
                'created_at' => '2020-11-14 15:34:03',
                'updated_at' => '2020-11-14 15:34:03',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'add_reviews',
                'table_name' => 'reviews',
                'created_at' => '2020-11-14 15:34:03',
                'updated_at' => '2020-11-14 15:34:03',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'delete_reviews',
                'table_name' => 'reviews',
                'created_at' => '2020-11-14 15:34:03',
                'updated_at' => '2020-11-14 15:34:03',
            ),
        ));
        
        
    }
}