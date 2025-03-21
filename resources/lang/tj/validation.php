<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Сатрҳои Забон барои Санҷиши Маълумот
    |--------------------------------------------------------------------------
    |
    | Сатрҳои забони зерин паёмҳои хатоии стандартиро, ки аз тарафи синфи
    | санҷиш истифода мешаванд, дар бар мегиранд. Баъзе аз ин қоидаҳо
    | дорои нусхаҳои гуногунанд, ба монанди қоидаҳои андоза. Шумо озодед
    | ҳар яке аз ин паёмҳоро тағйир диҳед.
    |
    */

    'accepted'             => ':attribute бояд қабул карда шавад.',
    'active_url'           => ':attribute URL-и дуруст нест.',
    'after'                => ':attribute бояд санае баъд аз :date бошад.',
    'after_or_equal'       => ':attribute бояд санае баъд аз ё баробар ба :date бошад.',
    'alpha'                => ':attribute танҳо бояд ҳарфҳо дошта бошад.',
    'alpha_dash'           => ':attribute танҳо бояд ҳарфҳо, рақамҳо ва хатҳои пайвасткунанда дошта бошад.',
    'alpha_num'            => ':attribute танҳо бояд ҳарфҳо ва рақамҳо дошта бошад.',
    'array'                => ':attribute бояд маҷмӯа бошад.',
    'before'               => ':attribute бояд санае пеш аз :date бошад.',
    'before_or_equal'      => ':attribute бояд санае пеш аз ё баробар ба :date бошад.',
    'between'              => [
        'numeric' => ':attribute бояд байни :min ва :max бошад.',
        'file'    => ':attribute бояд байни :min ва :max килобайт бошад.',
        'string'  => ':attribute бояд байни :min ва :max аломат дошта бошад.',
        'array'   => ':attribute бояд байни :min ва :max унсур дошта бошад.',
    ],
    'boolean'              => 'Майдони :attribute бояд дуруст ё нодуруст бошад.',
    'confirmed'            => 'Тасдиқи :attribute мувофиқат намекунад.',
    'date'                 => ':attribute санаи дуруст нест.',
    'date_equals'          => ':attribute бояд санае баробар ба :date бошад.',
    'date_format'          => ':attribute бо формати :format мувофиқат намекунад.',
    'different'            => ':attribute ва :other бояд фарқ кунанд.',
    'digits'               => ':attribute бояд :digits рақам дошта бошад.',
    'digits_between'       => ':attribute бояд байни :min ва :max рақам дошта бошад.',
    'dimensions'           => 'Андозаҳои тасвири :attribute нодурустанд.',
    'distinct'             => 'Майдони :attribute дорои арзиши такрорӣ аст.',
    'email'                => ':attribute бояд почтаи электронии дуруст бошад.',
    'exists'               => ':attribute нодуруст аст.',
    'file'                 => ':attribute бояд файл бошад.',
    'filled'               => 'Майдони :attribute ҳатмӣ аст.',
    'gt'                   => [
        'numeric' => ':attribute бояд бештар аз :value бошад.',
        'file'    => ':attribute бояд бештар аз :value килобайт бошад.',
        'string'  => ':attribute бояд бештар аз :value аломат дошта бошад.',
        'array'   => ':attribute бояд бештар аз :value унсур дошта бошад.',
    ],
    'gte'                  => [
        'numeric' => ':attribute бояд баробар ё бештар аз :value бошад.',
        'file'    => ':attribute бояд баробар ё бештар аз :value килобайт бошад.',
        'string'  => ':attribute бояд баробар ё бештар аз :value аломат дошта бошад.',
        'array'   => ':attribute бояд баробар ё бештар аз :value унсур дошта бошад.',
    ],
    'image'                => ':attribute бояд тасвир бошад.',
    'in'                   => ':attribute нодуруст аст.',
    'in_array'             => 'Майдони :attribute дар :other мавҷуд нест.',
    'integer'              => ':attribute бояд рақами бутун бошад.',
    'ip'                   => ':attribute бояд суроғаи IP-и дуруст бошад.',
    'ipv4'                 => ':attribute бояд суроғаи дурусти IPv4 бошад.',
    'ipv6'                 => ':attribute бояд суроғаи дурусти IPv6 бошад.',
    'json'                 => ':attribute бояд сатр бо формати дурусти JSON бошад.',
    'lt'                   => [
        'numeric' => ':attribute бояд камтар аз :value бошад.',
        'file'    => ':attribute бояд камтар аз :value килобайт бошад.',
        'string'  => ':attribute бояд камтар аз :value аломат дошта бошад.',
        'array'   => ':attribute бояд камтар аз :value унсур дошта бошад.',
    ],
    'lte'                  => [
        'numeric' => ':attribute бояд баробар ё камтар аз :value бошад.',
        'file'    => ':attribute бояд баробар ё камтар аз :value килобайт бошад.',
        'string'  => ':attribute бояд баробар ё камтар аз :value аломат дошта бошад.',
        'array'   => ':attribute набояд аз :value зиёдтар унсур дошта бошад.',
    ],
    'max'                  => [
        'numeric' => ':attribute набояд аз :max зиёд бошад.',
        'file'    => ':attribute набояд аз :max килобайт зиёд бошад.',
        'string'  => ':attribute набояд аз :max аломат зиёд бошад.',
        'array'   => ':attribute набояд аз :max унсур зиёд бошад.',
    ],
    'mimes'                => ':attribute бояд файл бо формати: :values бошад.',
    'mimetypes'            => ':attribute бояд файл бо формати: :values бошад.',
    'min'                  => [
        'numeric' => ':attribute бояд на камтар аз :min бошад.',
        'file'    => ':attribute бояд на камтар аз :min килобайт бошад.',
        'string'  => ':attribute бояд на камтар аз :min аломат дошта бошад.',
        'array'   => ':attribute бояд на камтар аз :min унсур дошта бошад.',
    ],
    'not_in'               => ':attribute нодуруст аст.',
    'not_regex'            => 'Формати :attribute нодуруст аст.',
    'numeric'              => ':attribute бояд рақамӣ бошад.',
    'present'              => 'Майдони :attribute бояд мавҷуд бошад.',
    'regex'                => 'Формати :attribute нодуруст аст.',
    'required'             => 'Майдони :attribute ҳатмӣ аст.',
    'required_if'          => 'Майдони :attribute вақте ҳатмӣ аст, ки :other :value бошад.',
    'required_unless'      => 'Майдони :attribute ҳатмӣ аст, агар :other дар :values набошад.',
    'required_with'        => 'Майдони :attribute вақте ҳатмӣ аст, ки :values мавҷуд бошад.',
    'required_with_all'    => 'Майдони :attribute вақте ҳатмӣ аст, ки :values мавҷуд бошад.',
    'required_without'     => 'Майдони :attribute вақте ҳатмӣ аст, ки :values мавҷуд набошад.',
    'required_without_all' => 'Майдони :attribute вақте ҳатмӣ аст, ки ҳеҷ кадоме аз :values мавҷуд набошанд.',
    'same'                 => ':attribute ва :other бояд мувофиқат кунанд.',
    'size'                 => [
        'numeric' => ':attribute бояд :size бошад.',
        'file'    => ':attribute бояд :size килобайт бошад.',
        'string'  => ':attribute бояд :size аломат дошта бошад.',
        'array'   => ':attribute бояд :size унсур дошта бошад.',
    ],
    'starts_with'          => ':attribute бояд бо яке аз арзишҳои зерин оғоз шавад: :values.',
    'string'               => ':attribute бояд сатр бошад.',
    'timezone'             => ':attribute бояд минтақаи дуруст бошад.',
    'unique'               => ':attribute аллакай мавҷуд аст.',
    'uploaded'             => 'Боркунии :attribute ноком шуд.',
    'url'                  => 'Формати :attribute нодуруст аст.',
    'uuid'                 => ':attribute бояд UUID-и дуруст бошад.',

    /*
    |--------------------------------------------------------------------------
    | Сатрҳои Фармоишии Санҷиш
    |--------------------------------------------------------------------------
    |
    | Дар ин ҷо шумо метавонед паёмҳои фармоишии санҷиширо барои атрибутҳо
    | бо истифода аз усули "attribute.rule" муайян кунед.
    |
    */

    'custom' => [
        'password' => [
            'min' => ':attribute бояд ҳадди аққал :min аломат дошта бошад.',
        ],
        'email'    => [
            'unique' => ':attribute аллакай сабт шудааст.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Атрибутҳои Фармоишӣ барои Санҷиш
    |--------------------------------------------------------------------------
    |
    | Сатрҳои забони зерин барои иваз кардани номҳои плейсхолдерҳо истифода мешаванд
    | бо чизе, ки хонданаш осонтар аст, ба монанди "Нишонаи Почтаи Электронӣ"
    | ба ҷои "email". Ин танҳо барои тозатар кардани паёмҳо кӯмак мекунад.
    |
    */

    'attributes' => [
        'name'                  => 'ном',
        'username'              => 'корбарӣ',
        'email'                 => 'почтаи электронӣ',
        'first_name'            => 'ном',
        'last_name'             => 'насаб',
        'password'              => 'рамз',
        'password_confirmation' => 'тасдиқи рамз',
        'city'                  => 'шаҳр',
        'country'               => 'кишвар',
        'address'               => 'нишонӣ',
        'phone'                 => 'телефон',
        'mobile'                => 'мобил',
        'age'                   => 'син',
        'sex'                   => 'ҷинс',
        'gender'                => 'гендер',
        'year'                  => 'сол',
        'month'                 => 'моҳ',
        'day'                   => 'рӯз',
        'hour'                  => 'соат',
        'minute'                => 'дақиқа',
        'second'                => 'сония',
        'title'                 => 'сарлавҳа',
        'content'               => 'мӯҳтаво',
        'body'                  => 'мӯҳтаво',
        'description'           => 'тафсилот',
        'excerpt'               => 'қисмат',
        'date'                  => 'сана',
        'time'                  => 'вақт',
        'subject'               => 'мавзӯъ',
        'message'               => 'паём',
    ],
];