<?php

return [
    'userManagement'      => [
        'title'          => 'Управление пользователями',
        'title_singular' => 'Управление пользователями',
    ],
    'permission'          => [
        'title'          => 'Разрешения',
        'title_singular' => 'Разрешение',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role'                => [
        'title'          => 'Роли',
        'title_singular' => 'Роль',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user'                => [
        'title'          => 'Пользователи',
        'title_singular' => 'Пользователь',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'photoalbum'          => [
        'title'          => 'Фотоальбомы',
        'title_singular' => 'Фотоальбомы',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'phs'               => 'Фотографии',
            'phs_helper'        => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'phs_title'         => 'Название альбома',
            'phs_title_helper'  => ' ',
        ],
    ],
    'event'               => [
        'title'          => 'Достижения',
        'title_singular' => 'Достижения',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'ev_title'          => 'Название',
            'ev_title_helper'   => ' ',
            'ev_date'           => 'Дата',
            'ev_date_helper'    => ' ',
            'ev_pic'            => 'Картинки',
            'ev_pic_helper'     => ' ',
            'ev_text'           => 'Текст',
            'ev_text_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'ev_cat'            => 'Категория',
            'ev_cat_helper'     => ' ',
        ],
    ],
    'news'                => [
        'title'          => 'Новости',
        'title_singular' => 'Новости',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'nw_title'          => 'Название',
            'nw_title_helper'   => ' ',
            'nw_date'           => 'Дата',
            'nw_date_helper'    => ' ',
            'nw_pic'            => 'Картинка',
            'nw_pic_helper'     => ' ',
            'nw_text'           => 'Текст новости',
            'nw_text_helper'    => ' ',
            'nw_phs'            => 'Ссылка на альбом',
            'nw_phs_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'teacher'             => [
        'title'          => 'Учителя',
        'title_singular' => 'Учителя',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'tch_name'            => 'ФИО',
            'tch_name_helper'     => ' ',
            'tch_text'            => 'Текст об учителе',
            'tch_text_helper'     => ' ',
            'tch_pic'             => 'Фото',
            'tch_pic_helper'      => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
            'tch_spec'            => 'Должность',
            'tch_spec_helper'     => ' ',
            'tch_category'        => 'Раздел',
            'tch_category_helper' => ' ',
        ],
    ],
    'schedulesimple'      => [
        'title'          => 'Расписание',
        'title_singular' => 'Расписание',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'schsm_title'        => 'Название',
            'schsm_title_helper' => ' ',
            'schsm_file'         => 'XLS/XLSX файл',
            'schsm_file_helper'  => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'marshrutesMenu'      => [
        'title'          => 'Маршруты',
        'title_singular' => 'Маршруты',
    ],
    'marshrutesFloor'     => [
        'title'          => 'База изображений',
        'title_singular' => 'База изображений',
        'fields'         => [
            'id'                           => 'ID',
            'id_helper'                    => ' ',
            'marshrutesfloor_title'        => 'Название',
            'marshrutesfloor_title_helper' => ' ',
            'marshrutesfloor_image'        => 'Картинка',
            'marshrutesfloor_image_helper' => ' ',
            'created_at'                   => 'Created at',
            'created_at_helper'            => ' ',
            'updated_at'                   => 'Updated at',
            'updated_at_helper'            => ' ',
            'deleted_at'                   => 'Deleted at',
            'deleted_at_helper'            => ' ',
        ],
    ],
    'marshrutesRoute'     => [
        'title'          => 'Маршруты от Т1',
        'title_singular' => 'Маршруты от Т1',
        'fields'         => [
            'id'                                  => 'ID',
            'id_helper'                           => ' ',
            'marshrutesroutes_title'              => 'Название',
            'marshrutesroutes_title_helper'       => ' ',
            'marshrutesroutes_floor'              => 'Привязка',
            'marshrutesroutes_floor_helper'       => ' ',
            'x_01'                                => 'X 01',
            'x_01_helper'                         => ' ',
            'y_01'                                => 'Y 01',
            'y_01_helper'                         => ' ',
            'p_x_01'                              => 'P X 01',
            'p_x_01_helper'                       => ' ',
            'p_y_01'                              => 'P Y 01',
            'p_y_01_helper'                       => ' ',
            'x_02'                                => 'X 02',
            'x_02_helper'                         => ' ',
            'y_02'                                => 'Y 02',
            'y_02_helper'                         => ' ',
            'p_x_02'                              => 'P X 02',
            'p_x_02_helper'                       => ' ',
            'p_y_02'                              => 'P Y 02',
            'p_y_02_helper'                       => ' ',
            'x_03'                                => 'X 03',
            'x_03_helper'                         => ' ',
            'y_03'                                => 'Y 03',
            'y_03_helper'                         => ' ',
            'p_x_03'                              => 'P X 03',
            'p_x_03_helper'                       => ' ',
            'p_y_03'                              => 'P Y 03',
            'p_y_03_helper'                       => ' ',
            'x_04'                                => 'X 04',
            'x_04_helper'                         => ' ',
            'y_04'                                => 'Y 04',
            'y_04_helper'                         => ' ',
            'p_x_04'                              => 'P X 04',
            'p_x_04_helper'                       => ' ',
            'p_y_04'                              => 'P Y 04',
            'p_y_04_helper'                       => ' ',
            'x_05'                                => 'X 05',
            'x_05_helper'                         => ' ',
            'y_05'                                => 'Y 05',
            'y_05_helper'                         => ' ',
            'p_x_05'                              => 'P X 05',
            'p_x_05_helper'                       => ' ',
            'p_y_05'                              => 'P Y 05',
            'p_y_05_helper'                       => ' ',
            'x_06'                                => 'X 06',
            'x_06_helper'                         => ' ',
            'y_06'                                => 'Y 06',
            'y_06_helper'                         => ' ',
            'p_x_06'                              => 'P X 06',
            'p_x_06_helper'                       => ' ',
            'p_y_06'                              => 'P Y 06',
            'p_y_06_helper'                       => ' ',
            'x_07'                                => 'X 07',
            'x_07_helper'                         => ' ',
            'y_07'                                => 'Y 07',
            'y_07_helper'                         => ' ',
            'p_x_07'                              => 'P X 07',
            'p_x_07_helper'                       => ' ',
            'p_y_07'                              => 'P Y 07',
            'p_y_07_helper'                       => ' ',
            'x_08'                                => 'X 08',
            'x_08_helper'                         => ' ',
            'y_08'                                => 'Y 08',
            'y_08_helper'                         => ' ',
            'p_x_08'                              => 'P X 08',
            'p_x_08_helper'                       => ' ',
            'p_y_08'                              => 'P Y 08',
            'p_y_08_helper'                       => ' ',
            'x_09'                                => 'X 09',
            'x_09_helper'                         => ' ',
            'y_09'                                => 'Y 09',
            'y_09_helper'                         => ' ',
            'p_x_09'                              => 'P X 09',
            'p_x_09_helper'                       => ' ',
            'p_y_09'                              => 'P Y 09',
            'p_y_09_helper'                       => ' ',
            'x_10'                                => 'X 10',
            'x_10_helper'                         => ' ',
            'y_10'                                => 'Y 10',
            'y_10_helper'                         => ' ',
            'p_x_10'                              => 'P X 10',
            'p_x_10_helper'                       => ' ',
            'p_y_10'                              => 'P Y 10',
            'p_y_10_helper'                       => ' ',
            'x_11'                                => 'X 11',
            'x_11_helper'                         => ' ',
            'y_11'                                => 'Y 11',
            'y_11_helper'                         => ' ',
            'p_x_11'                              => 'P X 11',
            'p_x_11_helper'                       => ' ',
            'p_y_11'                              => 'P Y 11',
            'p_y_11_helper'                       => ' ',
            'x_12'                                => 'X 12',
            'x_12_helper'                         => ' ',
            'y_12'                                => 'Y 12',
            'y_12_helper'                         => ' ',
            'p_x_12'                              => 'P X 12',
            'p_x_12_helper'                       => ' ',
            'p_y_12'                              => 'P Y 12',
            'p_y_12_helper'                       => ' ',
            'created_at'                          => 'Created at',
            'created_at_helper'                   => ' ',
            'updated_at'                          => 'Updated at',
            'updated_at_helper'                   => ' ',
            'deleted_at'                          => 'Deleted at',
            'deleted_at_helper'                   => ' ',
            'x_101'                               => 'X 101',
            'x_101_helper'                        => ' ',
            'y_101'                               => 'Y 101',
            'y_101_helper'                        => ' ',
            'p_x_101'                             => 'P X 101',
            'p_x_101_helper'                      => ' ',
            'p_y_101'                             => 'P Y 101',
            'p_y_101_helper'                      => ' ',
            'x_102'                               => 'X 102',
            'x_102_helper'                        => ' ',
            'y_102'                               => 'Y 102',
            'y_102_helper'                        => ' ',
            'p_x_102'                             => 'P X 102',
            'p_x_102_helper'                      => ' ',
            'p_y_102'                             => 'P Y 102',
            'p_y_102_helper'                      => ' ',
            'x_103'                               => 'X 103',
            'x_103_helper'                        => ' ',
            'y_103'                               => 'Y 103',
            'y_103_helper'                        => ' ',
            'p_x_103'                             => 'P X 103',
            'p_x_103_helper'                      => ' ',
            'p_y_103'                             => 'P Y 103',
            'p_y_103_helper'                      => ' ',
            'x_104'                               => 'X 104',
            'x_104_helper'                        => ' ',
            'y_104'                               => 'Y 104',
            'y_104_helper'                        => ' ',
            'p_x_104'                             => 'P X 104',
            'p_x_104_helper'                      => ' ',
            'p_y_104'                             => 'P Y 104',
            'p_y_104_helper'                      => ' ',
            'x_105'                               => 'X 105',
            'x_105_helper'                        => ' ',
            'y_105'                               => 'Y 105',
            'y_105_helper'                        => ' ',
            'p_x_105'                             => 'P X 105',
            'p_x_105_helper'                      => ' ',
            'p_y_105'                             => 'P Y 105',
            'p_y_105_helper'                      => ' ',
            'x_106'                               => 'X 106',
            'x_106_helper'                        => ' ',
            'y_106'                               => 'Y 106',
            'y_106_helper'                        => ' ',
            'p_x_106'                             => 'P X 106',
            'p_x_106_helper'                      => ' ',
            'p_y_106'                             => 'P Y 106',
            'p_y_106_helper'                      => ' ',
            'x_107'                               => 'X 107',
            'x_107_helper'                        => ' ',
            'y_107'                               => 'Y 107',
            'y_107_helper'                        => ' ',
            'p_x_107'                             => 'P X 107',
            'p_x_107_helper'                      => ' ',
            'p_y_107'                             => 'P Y 107',
            'p_y_107_helper'                      => ' ',
            'x_108'                               => 'X 108',
            'x_108_helper'                        => ' ',
            'y_108'                               => 'Y 108',
            'y_108_helper'                        => ' ',
            'p_x_108'                             => 'P X 108',
            'p_x_108_helper'                      => ' ',
            'p_y_108'                             => 'P Y 108',
            'p_y_108_helper'                      => ' ',
            'x_109'                               => 'X 109',
            'x_109_helper'                        => ' ',
            'y_109'                               => 'Y 109',
            'y_109_helper'                        => ' ',
            'p_x_109'                             => 'P X 109',
            'p_x_109_helper'                      => ' ',
            'p_y_109'                             => 'P Y 109',
            'p_y_109_helper'                      => ' ',
            'x_110'                               => 'X 110',
            'x_110_helper'                        => ' ',
            'y_110'                               => 'Y 110',
            'y_110_helper'                        => ' ',
            'p_x_110'                             => 'P X 110',
            'p_x_110_helper'                      => ' ',
            'p_y_110'                             => 'P Y 110',
            'p_y_110_helper'                      => ' ',
            'x_111'                               => 'X 111',
            'x_111_helper'                        => ' ',
            'y_111'                               => 'Y 111',
            'y_111_helper'                        => ' ',
            'p_x_111'                             => 'P X 111',
            'p_x_111_helper'                      => ' ',
            'p_y_111'                             => 'P Y 111',
            'p_y_111_helper'                      => ' ',
            'x_112'                               => 'X 112',
            'x_112_helper'                        => ' ',
            'y_112'                               => 'Y 112',
            'y_112_helper'                        => ' ',
            'p_x_112'                             => 'P X 112',
            'p_x_112_helper'                      => ' ',
            'p_y_112'                             => 'P Y 112',
            'p_y_112_helper'                      => ' ',
            'marshrutesroutes_floorsecond'        => 'Привязка 2',
            'marshrutesroutes_floorsecond_helper' => ' ',
        ],
    ],
    'marshrutesRoutesTwo' => [
        'title'          => 'Маршруты от Т2',
        'title_singular' => 'Маршруты от Т2',
        'fields'         => [
            'id'                                  => 'ID',
            'id_helper'                           => ' ',
            'marshrutesroutes_title'              => 'Название',
            'marshrutesroutes_title_helper'       => ' ',
            'marshrutesroutes_floor'              => 'Привязка',
            'marshrutesroutes_floor_helper'       => ' ',
            'x_01'                                => 'X 01',
            'x_01_helper'                         => ' ',
            'y_01'                                => 'Y 01',
            'y_01_helper'                         => ' ',
            'p_x_01'                              => 'P X 01',
            'p_x_01_helper'                       => ' ',
            'p_y_01'                              => 'P Y 01',
            'p_y_01_helper'                       => ' ',
            'x_02'                                => 'X 02',
            'x_02_helper'                         => ' ',
            'y_02'                                => 'Y 02',
            'y_02_helper'                         => ' ',
            'p_x_02'                              => 'P X 02',
            'p_x_02_helper'                       => ' ',
            'p_y_02'                              => 'P Y 02',
            'p_y_02_helper'                       => ' ',
            'x_03'                                => 'X 03',
            'x_03_helper'                         => ' ',
            'y_03'                                => 'Y 03',
            'y_03_helper'                         => ' ',
            'p_x_03'                              => 'P X 03',
            'p_x_03_helper'                       => ' ',
            'p_y_03'                              => 'P Y 03',
            'p_y_03_helper'                       => ' ',
            'x_04'                                => 'X 04',
            'x_04_helper'                         => ' ',
            'y_04'                                => 'Y 04',
            'y_04_helper'                         => ' ',
            'p_x_04'                              => 'P X 04',
            'p_x_04_helper'                       => ' ',
            'p_y_04'                              => 'P Y 04',
            'p_y_04_helper'                       => ' ',
            'x_05'                                => 'X 05',
            'x_05_helper'                         => ' ',
            'y_05'                                => 'Y 05',
            'y_05_helper'                         => ' ',
            'p_x_05'                              => 'P X 05',
            'p_x_05_helper'                       => ' ',
            'p_y_05'                              => 'P Y 05',
            'p_y_05_helper'                       => ' ',
            'x_06'                                => 'X 06',
            'x_06_helper'                         => ' ',
            'y_06'                                => 'Y 06',
            'y_06_helper'                         => ' ',
            'p_x_06'                              => 'P X 06',
            'p_x_06_helper'                       => ' ',
            'p_y_06'                              => 'P Y 06',
            'p_y_06_helper'                       => ' ',
            'x_07'                                => 'X 07',
            'x_07_helper'                         => ' ',
            'y_07'                                => 'Y 07',
            'y_07_helper'                         => ' ',
            'p_x_07'                              => 'P X 07',
            'p_x_07_helper'                       => ' ',
            'p_y_07'                              => 'P Y 07',
            'p_y_07_helper'                       => ' ',
            'x_08'                                => 'X 08',
            'x_08_helper'                         => ' ',
            'y_08'                                => 'Y 08',
            'y_08_helper'                         => ' ',
            'p_x_08'                              => 'P X 08',
            'p_x_08_helper'                       => ' ',
            'p_y_08'                              => 'P Y 08',
            'p_y_08_helper'                       => ' ',
            'x_09'                                => 'X 09',
            'x_09_helper'                         => ' ',
            'y_09'                                => 'Y 09',
            'y_09_helper'                         => ' ',
            'p_x_09'                              => 'P X 09',
            'p_x_09_helper'                       => ' ',
            'p_y_09'                              => 'P Y 09',
            'p_y_09_helper'                       => ' ',
            'x_10'                                => 'X 10',
            'x_10_helper'                         => ' ',
            'y_10'                                => 'Y 10',
            'y_10_helper'                         => ' ',
            'p_x_10'                              => 'P X 10',
            'p_x_10_helper'                       => ' ',
            'p_y_10'                              => 'P Y 10',
            'p_y_10_helper'                       => ' ',
            'x_11'                                => 'X 11',
            'x_11_helper'                         => ' ',
            'y_11'                                => 'Y 11',
            'y_11_helper'                         => ' ',
            'p_x_11'                              => 'P X 11',
            'p_x_11_helper'                       => ' ',
            'p_y_11'                              => 'P Y 11',
            'p_y_11_helper'                       => ' ',
            'x_12'                                => 'X 12',
            'x_12_helper'                         => ' ',
            'y_12'                                => 'Y 12',
            'y_12_helper'                         => ' ',
            'p_x_12'                              => 'P X 12',
            'p_x_12_helper'                       => ' ',
            'p_y_12'                              => 'P Y 12',
            'p_y_12_helper'                       => ' ',
            'x_101'                               => 'X 101',
            'x_101_helper'                        => ' ',
            'y_101'                               => 'Y 101',
            'y_101_helper'                        => ' ',
            'p_x_101'                             => 'P X 101',
            'p_x_101_helper'                      => ' ',
            'p_y_101'                             => 'P Y 101',
            'p_y_101_helper'                      => ' ',
            'x_102'                               => 'X 102',
            'x_102_helper'                        => ' ',
            'y_102'                               => 'Y 102',
            'y_102_helper'                        => ' ',
            'p_x_102'                             => 'P X 102',
            'p_x_102_helper'                      => ' ',
            'p_y_102'                             => 'P Y 102',
            'p_y_102_helper'                      => ' ',
            'x_103'                               => 'X 103',
            'x_103_helper'                        => ' ',
            'y_103'                               => 'Y 103',
            'y_103_helper'                        => ' ',
            'p_x_103'                             => 'P X 103',
            'p_x_103_helper'                      => ' ',
            'p_y_103'                             => 'P Y 103',
            'p_y_103_helper'                      => ' ',
            'x_104'                               => 'X 104',
            'x_104_helper'                        => ' ',
            'y_104'                               => 'Y 104',
            'y_104_helper'                        => ' ',
            'p_x_104'                             => 'P X 104',
            'p_x_104_helper'                      => ' ',
            'p_y_104'                             => 'P Y 104',
            'p_y_104_helper'                      => ' ',
            'x_105'                               => 'X 105',
            'x_105_helper'                        => ' ',
            'y_105'                               => 'Y 105',
            'y_105_helper'                        => ' ',
            'p_x_105'                             => 'P X 105',
            'p_x_105_helper'                      => ' ',
            'p_y_105'                             => 'P Y 105',
            'p_y_105_helper'                      => ' ',
            'x_106'                               => 'X 106',
            'x_106_helper'                        => ' ',
            'y_106'                               => 'Y 106',
            'y_106_helper'                        => ' ',
            'p_x_106'                             => 'P X 106',
            'p_x_106_helper'                      => ' ',
            'p_y_106'                             => 'P Y 106',
            'p_y_106_helper'                      => ' ',
            'x_107'                               => 'X 107',
            'x_107_helper'                        => ' ',
            'y_107'                               => 'Y 107',
            'y_107_helper'                        => ' ',
            'p_x_107'                             => 'P X 107',
            'p_x_107_helper'                      => ' ',
            'p_y_107'                             => 'P Y 107',
            'p_y_107_helper'                      => ' ',
            'x_108'                               => 'X 108',
            'x_108_helper'                        => ' ',
            'y_108'                               => 'Y 108',
            'y_108_helper'                        => ' ',
            'p_x_108'                             => 'P X 108',
            'p_x_108_helper'                      => ' ',
            'p_y_108'                             => 'P Y 108',
            'p_y_108_helper'                      => ' ',
            'x_109'                               => 'X 109',
            'x_109_helper'                        => ' ',
            'y_109'                               => 'Y 109',
            'y_109_helper'                        => ' ',
            'p_x_109'                             => 'P X 109',
            'p_x_109_helper'                      => ' ',
            'p_y_109'                             => 'P Y 109',
            'p_y_109_helper'                      => ' ',
            'x_110'                               => 'X 110',
            'x_110_helper'                        => ' ',
            'y_110'                               => 'Y 110',
            'y_110_helper'                        => ' ',
            'p_x_110'                             => 'P X 110',
            'p_x_110_helper'                      => ' ',
            'p_y_110'                             => 'P Y 110',
            'p_y_110_helper'                      => ' ',
            'x_111'                               => 'X 111',
            'x_111_helper'                        => ' ',
            'y_111'                               => 'Y 111',
            'y_111_helper'                        => ' ',
            'p_x_111'                             => 'P X 111',
            'p_x_111_helper'                      => ' ',
            'p_y_111'                             => 'P Y 111',
            'p_y_111_helper'                      => ' ',
            'x_112'                               => 'X 112',
            'x_112_helper'                        => ' ',
            'y_112'                               => 'Y 112',
            'y_112_helper'                        => ' ',
            'p_x_112'                             => 'P X 112',
            'p_x_112_helper'                      => ' ',
            'p_y_112'                             => 'P Y 112',
            'p_y_112_helper'                      => ' ',
            'created_at'                          => 'Created at',
            'created_at_helper'                   => ' ',
            'updated_at'                          => 'Updated at',
            'updated_at_helper'                   => ' ',
            'deleted_at'                          => 'Deleted at',
            'deleted_at_helper'                   => ' ',
            'marshrutesroutes_floorsecond'        => 'Привязка 2',
            'marshrutesroutes_floorsecond_helper' => ' ',
        ],
    ],
];
