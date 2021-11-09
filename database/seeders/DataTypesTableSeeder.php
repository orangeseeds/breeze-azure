<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('data_types')->delete();

        \DB::table('data_types')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-11-14 14:56:22',
                'updated_at' => '2020-11-14 14:56:22',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'consultancies',
                'slug' => 'consultancies',
                'display_name_singular' => 'Consultancy',
                'display_name_plural' => 'Consultancies',
                'icon' => 'voyager-company',
                'model_name' => 'App\\Models\\Consultancy',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => 'Table of all the consultancies that we have in our website.',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"name","order_direction":"asc","default_search_key":"name","scope":null}',
                'created_at' => '2020-11-14 15:30:32',
                'updated_at' => '2020-11-14 15:46:12',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'consultancy_course',
                'slug' => 'consultancy-course',
                'display_name_singular' => 'Consultancy Course',
                'display_name_plural' => 'Consultancy Courses',
                'icon' => 'voyager-resize-full',
                'model_name' => 'App\\Models\\ConsultancyCourse',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => 'Consultancy and Course Pivot table',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"course_id","order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-11-14 15:31:36',
                'updated_at' => '2020-11-14 15:51:49',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'countries',
                'slug' => 'countries',
                'display_name_singular' => 'Country',
                'display_name_plural' => 'Countries',
                'icon' => 'voyager-anchor',
                'model_name' => 'App\\Models\\Country',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => 'Table that stores data of all the countries.',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"name","order_direction":"asc","default_search_key":"name"}',
                'created_at' => '2020-11-14 15:32:48',
                'updated_at' => '2020-11-14 15:32:48',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'courses',
                'slug' => 'courses',
                'display_name_singular' => 'Course',
                'display_name_plural' => 'Courses',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Course',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => 'Table that stores all the courses.',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"name","order_direction":"asc","default_search_key":"name","scope":null}',
                'created_at' => '2020-11-14 15:33:18',
                'updated_at' => '2020-11-14 15:52:39',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'reviews',
                'slug' => 'reviews',
                'display_name_singular' => 'Review',
                'display_name_plural' => 'Reviews',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Review',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => 'Table that contains the reviews of the consultancies.',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"consultancy_id","order_direction":"asc","default_search_key":"description","scope":null}',
                'created_at' => '2020-11-14 15:34:03',
                'updated_at' => '2020-11-14 15:54:17',
            ),
        ));


    }
}
