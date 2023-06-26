<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'pig_create',
            ],
            [
                'id'    => 18,
                'title' => 'pig_edit',
            ],
            [
                'id'    => 19,
                'title' => 'pig_show',
            ],
            [
                'id'    => 20,
                'title' => 'pig_delete',
            ],
            [
                'id'    => 21,
                'title' => 'pig_access',
            ],
            [
                'id'    => 22,
                'title' => 'management_create',
            ],
            [
                'id'    => 23,
                'title' => 'management_edit',
            ],
            [
                'id'    => 24,
                'title' => 'management_show',
            ],
            [
                'id'    => 25,
                'title' => 'management_delete',
            ],
            [
                'id'    => 26,
                'title' => 'management_access',
            ],
            [
                'id'    => 27,
                'title' => 'report_an_abnormal_event_create',
            ],
            [
                'id'    => 28,
                'title' => 'report_an_abnormal_event_edit',
            ],
            [
                'id'    => 29,
                'title' => 'report_an_abnormal_event_show',
            ],
            [
                'id'    => 30,
                'title' => 'report_an_abnormal_event_delete',
            ],
            [
                'id'    => 31,
                'title' => 'report_an_abnormal_event_access',
            ],
            [
                'id'    => 32,
                'title' => 'information_per_coop_create',
            ],
            [
                'id'    => 33,
                'title' => 'information_per_coop_edit',
            ],
            [
                'id'    => 34,
                'title' => 'information_per_coop_show',
            ],
            [
                'id'    => 35,
                'title' => 'information_per_coop_delete',
            ],
            [
                'id'    => 36,
                'title' => 'information_per_coop_access',
            ],
            [
                'id'    => 37,
                'title' => 'type_of_food_create',
            ],
            [
                'id'    => 38,
                'title' => 'type_of_food_edit',
            ],
            [
                'id'    => 39,
                'title' => 'type_of_food_show',
            ],
            [
                'id'    => 40,
                'title' => 'type_of_food_delete',
            ],
            [
                'id'    => 41,
                'title' => 'type_of_food_access',
            ],
            [
                'id'    => 42,
                'title' => 'report_create',
            ],
            [
                'id'    => 43,
                'title' => 'report_edit',
            ],
            [
                'id'    => 44,
                'title' => 'report_show',
            ],
            [
                'id'    => 45,
                'title' => 'report_delete',
            ],
            [
                'id'    => 46,
                'title' => 'report_access',
            ],
            [
                'id'    => 47,
                'title' => 'car_create',
            ],
            [
                'id'    => 48,
                'title' => 'car_edit',
            ],
            [
                'id'    => 49,
                'title' => 'car_show',
            ],
            [
                'id'    => 50,
                'title' => 'car_delete',
            ],
            [
                'id'    => 51,
                'title' => 'car_access',
            ],
            [
                'id'    => 52,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
