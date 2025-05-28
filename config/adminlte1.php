<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'Rema',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    // 'logo' => '<b>Admin</b>LTE',
    'logo' => '<b>Rema</b>',
    // 'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img' => 'images/rema.jpg',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    // 'logo_img_alt' => 'AdminLTE',
    'logo_img_alt' => 'Rema',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    // 'usermenu_enabled' => true,
    // 'usermenu_header' => false,
    // 'usermenu_header_class' => 'bg-primary',
    // 'usermenu_image' => false,
    // 'usermenu_desc' => false,
    // 'usermenu_profile_url' => false,

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => true,
    'usermenu_desc' => true,
    'usermenu_profile_url' => true,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    // 'layout_topnav' => null,
    // 'layout_boxed' => null,
    // 'layout_fixed_sidebar' => null,
    // 'layout_fixed_navbar' => null,
    // 'layout_fixed_footer' => null,
    // 'layout_dark_mode' => null,

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => true,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    // 'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar' => 'sidebar-light-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    // 'right_sidebar_theme' => 'dark',
    'right_sidebar_theme' => 'light',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // [
        //     'text' => 'search',
        //     'search' => true,
        //     'topnav' => true,
        // ],

        [
            'text' => 'Home',
            'url'  => 'home',
            'icon' => 'fas fa-fw fa-tachometer-alt',
            'topnav' => true,
        ],
        // [
        //     'text' => 'Settings',
        //     'url'  => 'admin/settings?action=',
        //     'icon' => 'fas fa-fw fa-cog',
        //     'topnav' => true,
        // ],
        // [
        //     'text' => 'Menu',
        //     'url'  => '#',
        //     'icon' => 'fas fa-fw fa-bars',
        //     'topnav' => true,
        // ],
        // [
        //     'text' => 'AutoMail Test',
        //     'url'  => '/admin/auto_mail',
        //     'icon' => 'fas fa-fw fa-paper-plane',
        //     'topnav' => true,
        // ],
        // [
        //     'text' => 'Member Management',
        //     'url'  => '#',
        //     'icon' => 'fas fa-fw fa-users',
        //     'topnav' => true,
        // ],
        // [
        //     'text' => 'FAQ',
        //     'url'  => '/admin/faq',
        //     'icon' => 'fas fa-fw fa-question',
        //     'topnav' => true,
        // ],
        // [
        //     'text' => 'Regional Stores',
        //     'url'  => '#',
        //     'icon' => 'fas fa-fw fa-store',
        //     'topnav' => true,
        // ],
        // [
        //     'text' => 'NewsLetter',
        //     'url'  => '#',
        //     'icon' => 'fas fa-fw fa-newspaper',
        //     'topnav' => true,
        // ],
        // [
        //     'text' => 'Advertisment',
        //     'url'  => '#',
        //     'icon' => 'fas fa-fw fa-ad',
        //     'topnav' => true,
        // ],
        // [
        //     'text' => 'Application Form',
        //     'url'  => '#',
        //     'icon' => 'fas fa-fw fa-binoculars',
        //     'topnav' => true,
        // ],
        [
            'text' => 'API Log',
            'url'  => '/admin/log_api',
            'icon' => 'fas fa-fw fa-info',
            'topnav' => true,
        ],

        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],


        //  SIDE-MENU 我們的歷程
        [
            'text' => '一般設定',
            'url'  => 'admin/settings?action=',
            'icon' => 'fas fa-fw fa-cogs',
        ],
        [
            'text'    => '探索',
            'icon'    => 'fas fa-fw fa-file',
            'submenu' => [
                [
                    'text'    => '深入了解 REMA',
                    'url'     => '#',
                    'icon'    => 'fas fa-fw fa-book-open',
                    'submenu' => [
                        [
                            'text' => '我們的思維',
                            'url'  => '/admin/our_thinking',
                            'icon' => 'fas fa-fw fa-chalkboard-teacher',
                        ],
                        [
                            'text' => '為什麼創辦 Rema',
                            'url'  => '/admin/rema_founded',
                            'icon' => 'fas fa-fw fa-pen-nib',
                        ],
                        [
                            'text' => '我們的歷程', // History
                            'url'  => '/admin/our_history',
                            'icon' => 'fas fa-fw fa-business-time',
                        ],
                    ],
                ],


                [
                    'text'    => '加入Rema Crew',
                    'url'     => '#',
                    'icon'    => 'fas fa-fw fa-book-open',
                    'submenu' => [
                        [
                            'text' => '如何加入Rema Crew',
                            'url'  => '#',
                            // 'icon' => '',
                        ],
                        [
                            'text' => '獨享權利',
                            'url'  => '#',
                            // 'icon' => '',
                        ],
                        [
                            'text' => 'R4 Earth',
                            'url'  => '#',
                            // 'icon' => '',
                        ],
                        [
                            'text' => '立即加入',
                            'url'  => '#',
                            // 'icon' => '',
                        ],
                    ],
                ],



            ],
        ],
        [
            'text'    => '生活 LIFE',
            'icon'    => 'fas fa-fw fa-hand-holding-heart',
            'submenu' => [
                [
                    'text'    => '健康生活', // healthy lifestyle 
                    'url'     => '#',
                    'icon'    => 'fas fa-fw fa-book-open',
                    'submenu' => [
                        [
                            'text' => '健身攻略 ', // Fitness
                            'url'  => '#',
                            // 'icon' => '',
                        ],
                        [
                            'text' => '美味研究室', // healthy food lab
                            'url'  => '#',
                            // 'icon' => '',
                        ],
                        [
                            'text' => '心靈平衡', // minc balance
                            'url'  => '#',
                            // 'icon' => '',
                        ],
                    ],
                ],


                [
                    'text'    => '綠色未來', // green future
                    'url'     => '#',
                    'icon'    => 'fas fa-fw fa-book-open',
                    'submenu' => [
                        [
                            'text' => '地球村維護計畫', // earth village
                            'url'  => '#',
                            // 'icon' => '',
                        ],
                        [
                            'text' => '永續冷知識', // sustainability trivia
                            'url'  => '#',
                            // 'icon' => '',
                        ],
                        [
                            'text' => '綠化日常', // eco-friendly daily routine
                            'url'  => '#',
                            // 'icon' => '',
                        ],
                    ],
                ],

                [
                    'text'    => 'Rema 體驗', //Rema Experience
                    'url'     => '#',
                    'icon'    => 'fas fa-fw fa-book-open',
                    'submenu' => [
                        [
                            'text' => '會員活動', // member\'s activities
                            'url'  => '#',
                            // 'icon' => '',
                        ],
                        [
                            'text' => '運動實測', // test
                            'url'  => '#',
                            // 'icon' => '',
                        ],
                        [
                            'text' => 'Meet The People',
                            'url'  => '#',
                            // 'icon' => '',
                        ],
                    ],
                ],

                [
                    'text'    => '開啟視野', // widen vision
                    'url'     => '#',
                    'icon'    => 'fas fa-fw fa-book-open',
                    'submenu' => [
                        [
                            'text' => '私房景點', // secret spots
                            'url'  => '#',
                            // 'icon' => '',
                        ],
                        [
                            'text' => '戶外路線推薦', //  outdoor route recommendation
                            'url'  => '#',
                            // 'icon' => '',
                        ],
                    ],
                ],

                [
                    'text'    => 'Rema Story',
                    'url'     => '#',
                    'icon'    => 'fas fa-fw fa-book-open',
                    'submenu' => [
                        [
                            'text' => '探索感知', // explore senses
                            'url'  => '#',
                            // 'icon' => '',
                        ],
                        [
                            'text' => '心力量', // the power of mindsets
                            'url'  => '#',
                            // 'icon' => '',
                        ],
                    ],
                ],



            ],
        ],




        [
            'text'    => 'Static Pages',
            'icon'    => 'fas fa-fw fa-file',
            'submenu' => [
                [
                    'text' => 'FAQ',
                    'url'  => '/admin/faq',
                    'icon' => 'fas fa-fw fa-question',
                ],
                [
                    'text' => 'Privacy',
                    'url'  => '/admin/privacy',
                    'icon' => 'fas fa-fw fa-user-shield',
                ],
                [
                    'text' => '地區商店', // Locations 
                    'url'  => '/admin/our_locations',
                    'icon' => 'fas fa-fw fa-street-view',
                    // 'can'  => 'manage-blog', roles
                ],

            ],
        ],
        [
            'text'    => '電子報修改', // NewsLetter 
            'icon'    => 'fas fa-fw fa-newspaper',
            'submenu' => [
                [
                    'text' => '全部', // View All
                    'url'  => '/admin/newsletter',
                    'icon' => 'fas fa-fw fa-newspaper',
                ],
                [
                    'text' => ' 訂閱管理',
                    'url'  => '/admin/subscribers',
                    'icon' => 'fas fa-fw fa-users',
                ],
                [
                    'text' => ' 模組設置', // Module settings
                    'url'  => '/admin/module_settings',
                    'icon' => 'fas fa-fw fa-users-cog',
                ],
                [
                    'text' => '批次寄信', // Batch mailing
                    'url'  => '/admin/batch_mailing',
                    'icon' => 'fas fa-fw fa-mail-bulk',
                ],
            ],
        ],

        
        // CUSTOM SEARCH
        // [
        //     'search' => true,
        //     'url' => 'test',                     // the form action
        //     'method' => 'POST',                  // the form method
        //     'input_name' => 'menu-search-input', // the input name
        //     'text' => 'Search',                  // the input placeholder
        // ],

        // Default empty backend show only "settings" in the menu, everything else automated
        // Most need submenus
        [
            'text'    => '訂單管理', // Orders
            'icon'    => 'fas fa-fw fa-shopping-cart',
            'submenu' => [
                // [
                //     'text' => 'Analytics',
                //     'url'  => '#',
                // ],
                [
                    'text' => '商品發佈管理', // + submenu
                    'url'  => '/admin/products',
                    'icon' => 'fas fa-fw fa-tags',
                ],
                // [
                //     'text' => '尺寸建議表管理',
                //     'url'  => '#',
                //     'icon' => 'fas fa-fw fa-tshirt',
                // ],
                [
                    'text' => '訂單查詢管理',
                    'url'  => '/admin/orders',
                    'icon' => 'fas fa-fw fa-credit-card',
                ],                
                [
                    'text' => '訂單退貨管理', // Order return management
                    'url'  => '/admin/order_returns/',
                    'icon' => 'fas fa-fw fa-money-bill-alt',
                ],
                [
                    'text' => '配送區域設置', // delivery settings
                    'url'  => '/admin/delivery_settings/',
                    'icon' => 'fas fa-fw fa-map-marked-alt',
                ],
                [
                    'text' => '多國貨幣設置', //currency
                    'url'  => '/admin/currency',
                    'icon' => 'fas fa-fw fa-money-bill-wave',
                ],
                [
                    'text' => '配送方法設置', // delivery
                    'url'  => '/admin/delivery_methods/',
                    'icon' => 'fas fa-fw fa-truck',
                ],

                [
                    'text' => '付款方式',
                    'url'  => '/admin/payment_methods/', //payment
                    'icon' => 'fas fa-fw fa-dollar-sign',
                ],
                [
                    'text' => '信件模板設置',
                    'url'  => '/admin/auto_mail',
                    'icon' => 'fas fa-fw fa-paper-plane',
                ],
                [
                    'text' => '模組參數設置', // none refundables (same as order statistics view)
                    'url'  => '/admin/non_returns/',
                    'icon' => 'fas fa-fw fa-cubes',
                ],
                [
                    'text' => '訂單查詢統計', // order statistics
                    'url'  => '/admin/order_statistics/',
                    'icon' => 'fas fa-fw fa-chart-bar',
                ],
                [
                    'text' => '電子折價設定', // coupons
                    'url'  => '/admin/coupons/',
                    'icon' => 'fas fa-fw fa-percentage',
                ],
                // [
                //     'text' => '會員中心',
                //     'url'  => '/admin/member',
                //     'icon' => 'fas fa-fw fa-user-tie',
                // ],
                
                // [
                //     'text' => 'Coupons',
                //     'url'  => '#',
                // ],
                
                // [
                //     'text' => 'Storage',
                //     'url'  => '#',
                // ],
                // [
                //     'text' => 'Inventory',
                //     'url'  => '#',
                // ],
                /*
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
                [
                    'text'    => 'level_one',
                    'url'     => '#',
                    'submenu' => [
                        [
                            'text' => 'level_two',
                            'url'  => '#',
                        ],
                        [
                            'text'    => 'level_two',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'level_three',
                                    'url'  => '#',
                                ],
                                [
                                    'text' => 'level_three',
                                    'url'  => '#',
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
                */

                // [
                //     'text' => '會員 Members',
                //     'url'  => '/admin/member',
                //     'icon' => 'fas fa-fw fa-users',
                // ],
            ],
        ],
        // [
        //     'text'    => 'Manage Pages',
        //     // 'icon'    => 'fas fa-fw fa-paperclip',
        //     'submenu' => [
        //         // [
        //         //     'text' => 'FAQ',
        //         //     'url'  => '/admin/faq',
        //         //     'icon' => 'fas fa-fw fa-question',
        //         // ],
        //         // [
        //         //     'text' => 'Privacy',
        //         //     'url'  => '/admin/privacy',
        //         //     'icon' => 'fas fa-fw fa-user-shield',
        //         // ],
        //         // [
        //         //     'text' => '電子報修改 NewsLetter',
        //         //     'url'  => '/admin/newsletter',
        //         //     'icon' => 'fas fa-fw fa-mail-bulk',
        //         // ],



        //     ],
        // ],
        [
            'text'    => '會員中心',
            'icon'    => 'fas fa-fw fa-group',
            'submenu' => [
                [
                    'text' => '會員查詢管理', //  all members
                    'url'  => '/admin/members',
                    'icon' => 'fas fa-fw fa-user-friends',
                ],
                [
                    'text' => '會員帳務管理',
                    'url'  => '#',
                    // 'icon' => 'fas fa-fw fa-user-tie',
                ],
                [
                    'text' => '會員類型設置', // member types
                    'url'  => '/admin/members/member_types',
                    'icon' => 'fas fa-fw fa-user-edit',
                ],
                [
                    'text' => '會員地區設置',
                    'url'  => '#',
                    // 'icon' => 'fas fa-fw fa-user-tie',
                ],
                [
                    'text' => '付款方法設置',
                    'url'  => '#',
                    // 'icon' => 'fas fa-fw fa-user-tie',
                ],
                [
                    'text' => '模組參數設置',
                    'url'  => '#',
                    // 'icon' => 'fas fa-fw fa-user-tie',
                ],

            ],
        ],

        // [
        //     'text'    => 'multilevel',
        //     'icon'    => 'fas fa-fw fa-share',
        //     'submenu' => [
        //         [
        //             'text' => 'level_one',
        //             'url'  => '#',
        //         ],
        //         [
        //             'text'    => 'level_one',
        //             'url'     => '#',
        //             'submenu' => [
        //                 [
        //                     'text' => 'level_two',
        //                     'url'  => '#',
        //                 ],
        //                 [
        //                     'text'    => 'level_two',
        //                     'url'     => '#',
        //                     'submenu' => [
        //                         [
        //                             'text' => 'level_three',
        //                             'url'  => '#',
        //                         ],
        //                         [
        //                             'text' => 'level_three',
        //                             'url'  => '#',
        //                         ],
        //                     ],
        //                 ],
        //             ],
        //         ],
        //         [
        //             'text' => 'level_one',
        //             'url'  => '#',
        //         ],
        //     ],
        // ],
        // ['header' => 'labels'],
        // [
        //     'text'       => 'important',
        //     'icon_color' => 'red',
        //     'url'        => '#',
        // ],
        // [
        //     'text'       => 'warning',
        //     'icon_color' => 'yellow',
        //     'url'        => '#',
        // ],
        // [
        //     'text'       => 'information',
        //     'icon_color' => 'cyan',
        //     'url'        => '#',
        // ],
    ],




    //  ******************************** Github permissions roles examples ******************************** //
    //  https://github.com/jeroennoten/Laravel-AdminLTE/issues/795
    // 'menu' => [
    //                 [
    //                     'text' => 'search',
    //                     'search' => true,
    //                     'topnav' => true,
    //                 ],
    //                 [
    //                     'key' => 'admin_dashboard',
    //                     'text' => 'Dashboard',
    //                     'url' => 'admin',
    //                     'icon' => 'fas fa-fw fa-tachometer-alt nav-icon'
    //                 ],
    //                 [
    //                     'key' => 'admin_user_management',
    //                     'text'    => 'User management',
    //                     'icon'    => 'fa-fw nav-icon fas fa-users',
    //                     'submenu' => [
    //                         [
    //                             'text' => 'Permission',
    //                             'route'  => 'admin.permissions.index',
    //                         ],
    //                         [
    //                             'text' => 'Roles',
    //                             'route'  => 'admin.roles.index',
    //                         ],
    //                     ],
    //                 ],
    //         ]







    // [
    //     'key' => 'admin_user_management',
    //     'text'    => 'User management',
    //     'icon'    => 'fa-fw nav-icon fas fa-users',
    //     'submenu' => [
    //         [
    //             'text' => 'Permission',
    //             'route'  => 'admin.permissions.index',
    //             'active' => ['admin/permissions*'],
    //         ],
    //         [
    //             'text' => 'Roles',
    //             'route'  => 'admin.roles.index',
    //             'active' => ['admin/roles*'],
    //         ],
    //     ],
    // ],

    //  *********************************** more others on that github link ****************************** //

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js',
                ],
                // [
                //     'type' => 'js',
                //     'asset' => true,
                //     'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                // ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdn.datatables.net/v/dt/dt-1.11.3/sl-1.3.3/datatables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '//cdn.datatables.net/v/dt/dt-1.11.3/sl-1.3.3/datatables.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdn.datatables.net/plug-ins/a5734b29083/i18n/Chinese-traditional.json',
                ],
            ],
        ],
        'Moment' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '',
                ],
            ],
        ],
        'Datetimepicker' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css',
                ],
            ],
        ],
        'Daterangepicker' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/daterangepicker/daterangepicker.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/daterangepicker/daterangepicker.css',
                ],
            ],
        ],
        'Datepicker' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css',
                ],
            ],
        ],
        'PaceProgress' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/pace-progress/pace.min.js',
                ],
                // [
                //     'type' => 'css',
                //     'asset' => false,
                //     'location' => 'vendor/pace-progress/themes/blue/pace-theme-barber-shop.css',
                // ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/pace-progress/themes/blue/pace-theme-flat-top.css',
                ],
            ],
        ],
        'Particles' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'js/particles.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'js/backend/customjs_particles.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '',
                ],
            ],
        ],
        'CkEditor' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    //'location' => '//cdn.ckeditor.com/4.16.2/standard/ckeditor.js', // cdn missing lineheight feature
                    'location' => 'vendor/ckeditor/ckeditor.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'css/backend/custom_ckeditor.css',
                ],
            ],
        ],
        'Summernote' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'BootstrapSelect' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
        'Fontawesome' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '//cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '',
                ],
            ],
        ],
        'admin_main' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'css/backend/skins.css',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'css/backend/admin_custom.css',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => 'css/backend/modal.css',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'css/backend/admin_main.css',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'js/backend/ajax_DAO.js',
                ],
            ],
        ],
        'BootstrapSwitch' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/bootstrap-switch/css/bootstrap3/bootstrap-switch.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/bootstrap-switch/js/bootstrap-switch.min.js',
                ],
            ],
        ],
        'ProductPage' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'css/backend/bootstrap-tags.css',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'css/backend/bootstrap-tagsinput.css',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'css/backend/fileinput.css',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'js/backend/bootstrap-tags.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'js/backend/bootstrap-tagsinput.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'js/backend/fileinput.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '',
                ],
            ],
        ],
        'DropZone' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'css/backend/dropzone.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'js/backend/dropzone.min.js',
                ],
            ],
        ],
        'ColorPicker' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'css/backend/bootstrap-colorpicker.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'js/backend/bootstrap-colorpicker.min.js',
                ],
            ],
        ],
        'icheck' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/icheck-bootstrap/icheck-bootstrap.min.css',
                ],
            ],
        ],
    ],


    /*
    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    */

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => false,


    // TABLE ENGINES might need change
    // $sql = "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES
    //     WHERE TABLE_SCHEMA = 'your_database_name' 
    //     AND ENGINE = 'MyISAM'";

    // $rs = mysql_query($sql);

    // while($row = mysql_fetch_array($rs))
    // {
    //     $tbl = $row[0];
    //     $sql = "ALTER TABLE `$tbl` ENGINE=INNODB";
    //     mysql_query($sql);
    // }
];
