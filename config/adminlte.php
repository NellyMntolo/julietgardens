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

    'title' => 'Nelly',
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

    'use_ico_only' => true,
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
    'logo' => '<b>Mntolo </b>PLATFORMS',
    // 'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img' => 'images/default_person.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    // 'logo_img_alt' => 'AdminLTE',
    'logo_img_alt' => 'Nelly Platforms',

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
    // 'preloader.enabled' => false,
    'preloader' => 'disabled',

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

    'use_route_url' => true,
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



    /* ***** livenrich back end menu *****

        Dashboard,
        Manage pages -> news
                     -> about
                     -> cart modules ... in ecommerce section
                     -> FAQ,
        Manage page Modules -> automated menu per module,
        Ecommerce -> Products
                  -> Customers
                  -> Groups
                  -> Orders
                  -> Coupons
                  -> Currencies
                  -> Storage 
                  -> Inventory
                  -> Product Categories
                  -> Available Payments
        Profile,
        Menu,
        Footer,
        Social Media/SEO
        top-nav -> Dashboard
                -> Notifications
                -> Chat
                -> Meetings
                -> Languages

    */

    'menu' => [
        [
            'text' => 'Home',
            'url'  => 'home',
            'id' => 'top-nav-home-btn',
            'icon' => 'fas fa-fw fa-tachometer-alt',
            'topnav' => true,
        ],
        [
            'text' => 'General Settings',
            'url'  => 'admin/settings',
            'id' => '',
            'icon' => 'fas fa-fw fa-cog',
            'topnav' => true,
        ],
        [
            'type'         => 'fullscreen-widget',
            'id'           => '',
            'topnav_right' => true,
        ],
        [
            'text' => 'Index',
            'icon' => 'fas fa-fw fa-chalkboard-teacher',
            'submenu' => [
                [
                    'text' => 'Index Home Page',
                    'url'  => '/admin/index',
                    'icon' => 'fas fa-fw fa-pencil-square-o',
                ],
                [
                    'text' => 'Index Slides', 
                    'url'  => '/admin/index/sliders',
                    'icon' => 'fas fa-fw fa-clone',
                ],  
                [
                    'text' => 'Index News', 
                    'url'  => '/admin/index/news',
                    'icon' => 'fas fa-fw fa-newspaper',
                ],  
            ],
        ],
        [
            'text' => 'About Us',
            'icon' => 'fas fa-fw fa-chalkboard-teacher',
            'submenu' => [
                [
                    'text' => 'About Us Page',
                    'url'  => '/admin/about_us',
                    'icon' => 'fas fa-fw fa-pencil-square-o',
                ],
                [
                    'text' => 'About Us Team ', 
                    'url'  => '/admin/about_us_team',
                    'icon' => 'fas fa-fw fa-group',
                ],  
            ],
        ],
        [
            'text' => 'Services',
            'icon' => 'fas fa-fw fa-chalkboard-teacher',
            'submenu' => [
                [
                    'text' => 'Basic Services Settings', // Services
                    'url'  => '/admin/services',
                    'icon' => 'fas fa-fw fa-pencil-square-o',
                ],
                [
                    'text' => 'Services Featured ', // Featured
                    'url'  => '/admin/services_featured',
                    'icon' => 'fas fa-fw fa-thumbtack',
                ],
                [
                    'text' => 'Services We Do', // We Do
                    'url'  => '/admin/services_we_do',
                    'icon' => 'fas fa-fw fa-calculator',
                ],
                [
                    'text' => 'Services Testimonials', // Testimonials
                    'url'  => '/admin/services_testimonials',
                    'icon' => 'fas fa-fw fa-highlighter',
                ],   
            ],
        ],
        [
            'text' => 'Gallery',
            'icon' => 'fas fa-fw fa-chalkboard-teacher',
            'submenu' => [
                [
                    'text' => 'Basic Gallery Settings',
                    'url'  => '/admin/gallery',
                    'icon' => 'fas fa-fw fa-pencil-square-o',
                ],
                [
                    'text' => 'All Galleries ',
                    'url'  => '/admin/galleries',
                    'icon' => 'fas fa-fw fa-fill-drip',
                ],  
            ],
        ],
        [
            'text' => 'Contact Us',
            'url'  => '/admin/contact_us',
            'icon' => 'fas fa-fw fa-envelope',
        ],
        [
            'text' => 'Privacy & Terms',
            'url'  => '/admin/privacy',
            'icon' => 'fas fa-fw fa-book',
        ],
        [
            'text' => 'Newsletters',
            'url'  => '#',
            'icon' => 'fas fa-fw fa-book',
        ],
            ],

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
            'active' => true,
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
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/ckeditor/plugins/slideshow/3rdParty/ad-gallery/jquery.ad-gallery.css',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/ckeditor/plugins/slideshow/3rdParty/ad-gallery/jquery.ad-gallery.min.js',
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
        'Flotjs' => [
            'active' => true,
            'files' => [
                // [
                //     'type' => 'js',
                //     'asset' => true,
                //     'location' => '//cdnjs.cloudflare.com/ajax/libs/flot/4.2.2/jquery.flot.js',
                // ],
                // [
                //     'type' => 'js',
                //     'asset' => true,
                //     'location' => '//cdnjs.cloudflare.com/ajax/libs/flot/4.2.2/jquery.flot.resize.min.js',
                // ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'js/backend/flot.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'js/backend/flot.resize.min.js',
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
                // [
                //     'type' => 'css',
                //     'asset' => false,
                //     'location' => '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css',
                // ],
                // [
                //     'type' => 'css',
                //     'asset' => false,
                //     'location' => '//cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css',
                // ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/fontawesome-free/css/all.min.css',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '',
                ],
            ],
        ],
        'extra_css' => [
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
                    'asset' => true,
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
        'BootstrapTour' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'css/backend/bootstrap-tour.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'js/backend/bootstrap-tour.min.js',
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
        'chart' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/chart.js/Chart.min.js',
                ],
            ],
        ],
        'faceapi' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    // 'location' => 'js/backend/face-api.min.js',
                    'location' => 'js/backend/face-api.js',
                ],
            ],
        ],
        'sortable' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//code.jquery.com/ui/1.13.1/jquery-ui.js',
                ],
            ],
        ],
        'toastr' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/toastr/toastr.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/toastr/toastr.min.js',
                ],
            ],
        ],
        'mainjs' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'js/backend/main.js',
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
