<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted'             => ':attribute должен быть принят.',
    'active_url'           => ':attribute не является корректным URL.',
    'after'                => ':attribute должен быть датой после :date.',
    'after_or_equal'       => ':attribute должен быть датой после или равной :date.',
    'alpha'                => ':attribute может содержать только буквы.',
    'alpha_dash'           => ':attribute может содержать только буквы, цифры и дефисы.',
    'alpha_num'            => ':attribute может содержать только буквы и цифры.',
    'array'                => ':attribute должен быть массивом.',
    'before'               => ':attribute должен быть датой до :date.',
    'before_or_equal'      => ':attribute должен быть датой до или равной :date.',
    'between'              => [
        'numeric' => ':attribute должен быть между :min - :max.',
        'file'    => ':attribute должен быть от :min до :max килобайтов.',
        'string'  => ':attribute должен содержать от :min до :max символов.',
        'array'   => ':attribute должен содержать от :min до :max элементов.',
    ],
    'boolean'              => 'Поле :attribute должно быть истинным или ложным.',
    'confirmed'            => 'Подтверждение :attribute не совпадает.',
    'date'                 => ':attribute не является корректной датой.',
    'date_equals'          => ':attribute должно быть датой, равной :date.',
    'date_format'          => ':attribute не соответствует формату :format.',
    'different'            => ':attribute и :other должны быть разными.',
    'digits'               => ':attribute должен содержать :digits цифр.',
    'digits_between'       => ':attribute должен содержать от :min до :max цифр.',
    'dimensions'           => 'Размеры изображения :attribute недействительны.',
    'distinct'             => 'Поле :attribute содержит дублирующее значение.',
    'email'                => ':attribute не является корректным электронным адресом.',
    'exists'               => ':attribute недействительно.',
    'file'                 => 'Поле :attribute должно быть файлом.',
    'filled'               => 'Поле :attribute обязательно для заполнения.',
    'gt'                   => [
        'numeric' => 'Поле :attribute должно быть больше чем :value.',
        'file'    => 'Поле :attribute должно быть больше чем :value килобайтов.',
        'string'  => 'Поле :attribute должно содержать больше чем :value символов.',
        'array'   => 'Поле :attribute должно содержать больше чем :value элементов.',
    ],
    'gte'                  => [
        'numeric' => 'Поле :attribute должно быть как минимум :value.',
        'file'    => 'Поле :attribute должно быть как минимум :value килобайтов.',
        'string'  => 'Поле :attribute должно содержать как минимум :value символов.',
        'array'   => 'Поле :attribute должно содержать как минимум :value элементов.',
    ],
    'image'                => ':attribute должно быть изображением.',
    'in'                   => ':attribute недействительно.',
    'in_array'             => 'Поле :attribute не существует в :other.',
    'integer'              => ':attribute должно быть целым числом.',
    'ip'                   => ':attribute должно быть корректным IP-адресом.',
    'ipv4'                 => ':attribute должно быть корректным IPv4-адресом.',
    'ipv6'                 => ':attribute должно быть корректным IPv6-адресом.',
    'json'                 => 'Поле :attribute должно содержать корректную JSON-строку.',
    'lt'                   => [
        'numeric' => 'Поле :attribute должно быть меньше чем :value.',
        'file'    => 'Поле :attribute должно быть меньше чем :value килобайтов.',
        'string'  => 'Поле :attribute должно содержать меньше чем :value символов.',
        'array'   => 'Поле :attribute должно содержать меньше чем :value элементов.',
    ],
    'lte'                  => [
        'numeric' => 'Поле :attribute должно быть не больше чем :value.',
        'file'    => 'Поле :attribute должно быть не больше чем :value килобайтов.',
        'string'  => 'Поле :attribute должно содержать не больше чем :value символов.',
        'array'   => 'Поле :attribute должно содержать не больше чем :value элементов.',
    ],
    'max'                  => [
        'numeric' => ':attribute не должно быть больше чем :max.',
        'file'    => ':attribute не должно быть больше чем :max килобайтов.',
        'string'  => ':attribute не должно содержать больше чем :max символов.',
        'array'   => ':attribute не должно содержать более чем :max элементов.',
    ],
    'mimes'                => ':attribute должно быть файлом формата: :values.',
    'mimetypes'            => ':attribute должно быть файлом формата: :values.',
    'min'                  => [
        'numeric' => 'Размер :attribute должен быть не менее :min.',
        'file'    => 'Размер :attribute должен быть не менее :min килобайтов.',
        'string'  => ':attribute должно содержать не менее :min символов.',
        'array'   => ':attribute должно содержать не менее :min элементов.',
    ],
    'not_in'               => ':attribute недействительно.',
    'not_regex'            => 'Формат поля :attribute недействителен.',
    'numeric'              => ':attribute должно быть числом.',
    'present'              => 'Поле :attribute должно присутствовать.',
    'regex'                => 'Формат :attribute недействителен.',
    'required'             => 'Поле :attribute обязательно для заполнения.',
    'required_if'          => 'Поле :attribute обязательно для заполнения, когда :other равно :value.',
    'required_unless'      => 'Поле :attribute обязательно для заполнения, если :other не находится в :values.',
    'required_with'        => 'Поле :attribute обязательно для заполнения, когда :values присутствует.',
    'required_with_all'    => 'Поле :attribute обязательно для заполнения, когда :values присутствует.',
    'required_without'     => 'Поле :attribute обязательно для заполнения, когда :values отсутствует.',
    'required_without_all' => 'Поле :attribute обязательно для заполнения, когда ни одно из :values не присутствует.',
    'same'                 => ':attribute и :other должны совпадать.',
    'size'                 => [
        'numeric' => 'Размер :attribute должен быть :size.',
        'file'    => 'Размер :attribute должен быть :size килобайтов.',
        'string'  => ':attribute должно содержать :size символов.',
        'array'   => ':attribute должно содержать :size элементов.',
    ],
    'starts_with'          => 'Поле :attribute должно начинаться с одного из следующих значений: :values',
    'string'               => 'Поле :attribute должно быть строкой.',
    'timezone'             => ':attribute должно быть корректным часовым поясом.',
    'unique'               => 'Поле :attribute уже было зарегистрировано.',
    'uploaded'             => 'Загрузка :attribute не удалась.',
    'url'                  => 'Формат :attribute недействителен.',
    'uuid'                 => 'Поле :attribute должно быть корректным UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'password' => [
            'min' => ':attribute должно содержать больше чем :min символов.',
        ],
        'email'    => [
            'unique' => ':attribute уже было зарегистрировано.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name'                  => 'имя',
        'username'              => 'пользователь',
        'email'                 => 'электронная почта',
        'first_name'            => 'имя',
        'last_name'             => 'фамилия',
        'password'              => 'пароль',
        'password_confirmation' => 'подтверждение пароля',
        'city'                  => 'город',
        'country'               => 'страна',
        'address'               => 'адрес',
        'phone'                 => 'телефон',
        'mobile'                => 'мобильный',
        'age'                   => 'возраст',
        'sex'                   => 'пол',
        'gender'                => 'гендер',
        'year'                  => 'год',
        'month'                 => 'месяц',
        'day'                   => 'день',
        'hour'                  => 'час',
        'minute'                => 'минута',
        'second'                => 'секунда',
        'title'                 => 'название',
        'content'               => 'содержимое',
        'body'                  => 'содержимое',
        'description'           => 'описание',
        'excerpt'               => 'извлечение',
        'date'                  => 'дата',
        'time'                  => 'время',
        'subject'               => 'тема',
        'message'               => 'сообщение',
    ],
];
