<?php

use App\Permission;
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
                'title' => 'photoalbum_create',
            ],
            [
                'id'    => 18,
                'title' => 'photoalbum_edit',
            ],
            [
                'id'    => 19,
                'title' => 'photoalbum_show',
            ],
            [
                'id'    => 20,
                'title' => 'photoalbum_delete',
            ],
            [
                'id'    => 21,
                'title' => 'photoalbum_access',
            ],
            [
                'id'    => 22,
                'title' => 'event_create',
            ],
            [
                'id'    => 23,
                'title' => 'event_edit',
            ],
            [
                'id'    => 24,
                'title' => 'event_show',
            ],
            [
                'id'    => 25,
                'title' => 'event_delete',
            ],
            [
                'id'    => 26,
                'title' => 'event_access',
            ],
            [
                'id'    => 27,
                'title' => 'news_create',
            ],
            [
                'id'    => 28,
                'title' => 'news_edit',
            ],
            [
                'id'    => 29,
                'title' => 'news_show',
            ],
            [
                'id'    => 30,
                'title' => 'news_delete',
            ],
            [
                'id'    => 31,
                'title' => 'news_access',
            ],
            [
                'id'    => 32,
                'title' => 'teacher_create',
            ],
            [
                'id'    => 33,
                'title' => 'teacher_edit',
            ],
            [
                'id'    => 34,
                'title' => 'teacher_show',
            ],
            [
                'id'    => 35,
                'title' => 'teacher_delete',
            ],
            [
                'id'    => 36,
                'title' => 'teacher_access',
            ],
            [
                'id'    => 37,
                'title' => 'schedulesimple_create',
            ],
            [
                'id'    => 38,
                'title' => 'schedulesimple_edit',
            ],
            [
                'id'    => 39,
                'title' => 'schedulesimple_show',
            ],
            [
                'id'    => 40,
                'title' => 'schedulesimple_delete',
            ],
            [
                'id'    => 41,
                'title' => 'schedulesimple_access',
            ],
            [
                'id'    => 42,
                'title' => 'marshrutes_menu_access',
            ],
            [
                'id'    => 43,
                'title' => 'marshrutes_floor_create',
            ],
            [
                'id'    => 44,
                'title' => 'marshrutes_floor_edit',
            ],
            [
                'id'    => 45,
                'title' => 'marshrutes_floor_show',
            ],
            [
                'id'    => 46,
                'title' => 'marshrutes_floor_delete',
            ],
            [
                'id'    => 47,
                'title' => 'marshrutes_floor_access',
            ],
            [
                'id'    => 48,
                'title' => 'marshrutes_route_create',
            ],
            [
                'id'    => 49,
                'title' => 'marshrutes_route_edit',
            ],
            [
                'id'    => 50,
                'title' => 'marshrutes_route_show',
            ],
            [
                'id'    => 51,
                'title' => 'marshrutes_route_delete',
            ],
            [
                'id'    => 52,
                'title' => 'marshrutes_route_access',
            ],
            [
                'id'    => 53,
                'title' => 'marshrutes_routes_two_create',
            ],
            [
                'id'    => 54,
                'title' => 'marshrutes_routes_two_edit',
            ],
            [
                'id'    => 55,
                'title' => 'marshrutes_routes_two_show',
            ],
            [
                'id'    => 56,
                'title' => 'marshrutes_routes_two_delete',
            ],
            [
                'id'    => 57,
                'title' => 'marshrutes_routes_two_access',
            ],
            [
                'id'    => 58,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
