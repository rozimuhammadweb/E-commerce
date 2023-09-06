<?php
return [

    'frontend' => "http://e-commerce/",
    'backend' => 'http://admin.e-commerce/',

    'images_dir' => '/frontend/web/uploads/images/',
    'images_url' => '/uploads/images/',

    'uploads_dir' => '/frontend/web/uploads/',
    'uploads_url' => '/uploads/',

    'large_image' => [
        'width' => 1900,
        'height' => 1080
    ],
    'medium_image'  => [
        'width' => 300,
        'height' => 0
    ],
    'small_image'  => [
        'width' => 100,
        'height' => 100
    ],

    'slider_limit'   => 5,
    'services_limit' => 8,
    'services_category_limit' => 3,

    'pagination' => 10,

    'menu_types' => [
        1 => 'Asosiy',
        2 => 'Footerga',
    ],

    'month' => [
        'uz' => [ 1 => 'Yanvar', 2 => 'Fevral', 3 => 'Mart', 4 => 'Aprel', 5 => 'May', 6 => 'Iyun', 7 => 'Iyul', 8 => 'Avgust', 9 => 'Sentyabr', 10 => 'Oktyabr', 11 => 'Noyabr', 12 => 'Dekabr'],
        'ru' => [ 1 => 'Январь', 2 => 'Февраль', 3 => 'Март', 4 => 'Апрель', 5 => 'Май', 6 => 'Июнь', 7 => 'Июль', 8 => 'Август', 9 => 'Сентябрь', 10 => 'Октябрь', 11 => 'Ноябрь', 12 => 'Декабрь'],
        'en' => [ 1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April', 5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August', 9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'],
    ],
    'image_type' => [
        1 => 'news',
        2 => 'recourse',
        3 => 'page'
    ],

    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'senderEmail' => 'noreply@example.com',
    'senderName' => 'Example.com mailer',
    'user.passwordResetTokenExpire' => 3600,
    'user.passwordMinLength' => 8,
];
