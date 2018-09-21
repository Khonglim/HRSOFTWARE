<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    'accepted'             => 'ข้อมูลต้องผ่านการยอมรับก่อน',
    'active_url'           => 'ข้อมูลต้องเป็น URL เท่านั้น',
    'after'                => 'ข้อมูลต้องเป็นวันที่หลังจาก :date',
    'after_or_equal'       => 'ข้อมูลต้องเป็นวันที่หลังหรือเท่ากันกับ :date.',
    'alpha'                => 'ข้อมูลต้องเป็นตัวอักษรภาษาอังกฤษเท่านั้นห้ามเว้นวรรค',
    'alpha_dash'           => 'ข้อมูลต้องเป็นตัวอักษรภาษาอังกฤษ ตัวเลข และ _ เท่านั้น',
    'alpha_num'            => 'ข้อมูลต้องเป็นตัวอักษรภาษาอังกฤษ ตัวเลข เท่านั้น',
    'array'                => 'ข้อมูลต้องเป็นอาเรย์เท่านั้น',
    'before'               => 'ข้อมูลต้องเป็นวันที่ก่อน :date',
    'before_or_equal'      => 'ข้อมูลต้องเป็นวันที่ก่อนหรือเท่ากันกับวันที่ :date.',
    'between'              => [
        'numeric' => 'ข้อมูล  ต้องอยู่ในช่วงระหว่าง :min - :max',
        'file'    => 'ข้อมูล  ต้องอยู่ในช่วงระหว่าง :min - :max กิโลไบต์',
        'string'  => 'ข้อมูล  ต้องอยู่ในช่วงระหว่าง :min - :max ตัวอักษร',
        'array'   => 'ข้อมูล  ต้องอยู่ในช่วงระหว่าง :min - :max ค่า',
    ],
    'boolean'              => 'ข้อมูลต้องเป็นจริง หรือเท็จ เท่านั้น',
    'confirmed'            => 'ข้อมูลไม่ตรงกัน',
    'date'                 => 'ข้อมูลต้องเป็นวันที่',
    'date_format'          => 'ข้อมูลไม่ตรงกับข้อมูลกำหนด :format',
    'different'            => 'ข้อมูลและ :other ต้องไม่เท่ากัน',
    'digits'               => 'ข้อมูลต้องเป็น :digits',
    'digits_between'       => 'ข้อมูลต้องอยู่ในช่วงระหว่าง :min ถึง :max',
    'dimensions'           => 'รูปภาพมีขนาดไม่ถูกต้อง',
    'distinct'             => 'ข้อมูลมีค่าที่ซ้ำกัน',
    'email'                => 'ข้อมูลต้องเป็นอีเมล์',
    'exists'               => 'ข้อมูลที่ถูกเลือกจาก  ไม่ถูกต้อง',
    'file'                 => 'ข้อมูลต้องเป็นไฟล์',
    'filled'               => 'ข้อมูลจำเป็นต้องกรอก',
    'gt'                   => [
        'numeric' => 'The  must be greater than :value.',
        'file'    => 'The  must be greater than :value kilobytes.',
        'string'  => 'The  must be greater than :value characters.',
        'array'   => 'The  must have more than :value items.',
    ],
    'gte'                  => [
        'numeric' => 'The  must be greater than or equal :value.',
        'file'    => 'The  must be greater than or equal :value kilobytes.',
        'string'  => 'The  must be greater than or equal :value characters.',
        'array'   => 'The  must have :value items or more.',
    ],
    'image'                => 'ข้อมูล  ต้องเป็นรูปภาพ',
    'in'                   => 'ข้อมูล ที่ถูกเลือกใน  ไม่ถูกต้อง',
    'in_array'             => 'ข้อมูล  ไม่มีอยู่ภายในค่าของ :other',
    'integer'              => 'ข้อมูล  ต้องเป็นตัวเลข',
    'ip'                   => 'ข้อมูล  ต้องเป็น IP',
    'ipv4'                 => 'The  must be a valid IPv4 address.',
    'ipv6'                 => 'The  must be a valid IPv6 address.',
    'json'                 => 'ข้อมูล  ต้องเป็นอักขระ JSON ที่สมบูรณ์',
    'lt'                   => [
        'numeric' => 'The  must be less than :value.',
        'file'    => 'The  must be less than :value kilobytes.',
        'string'  => 'The  must be less than :value characters.',
        'array'   => 'The  must have less than :value items.',
    ],
    'lte'                  => [
        'numeric' => 'The  must be less than or equal :value.',
        'file'    => 'The  must be less than or equal :value kilobytes.',
        'string'  => 'The  must be less than or equal :value characters.',
        'array'   => 'The  must not have more than :value items.',
    ],
    'max'                  => [
        'numeric' => 'ข้อมูล  ต้องมีจำนวนไม่เกิน :max',
        'file'    => 'ข้อมูล  ต้องมีจำนวนไม่เกิน :max กิโลไบต์',
        'string'  => 'ข้อมูล  ต้องมีจำนวนไม่เกิน :max ตัวอักษร',
        'array'   => 'ข้อมูล  ต้องมีจำนวนไม่เกิน :max ค่า',
    ],
    'mimes'                => 'ข้อมูล  ต้องเป็นชนิดไฟล์: :values',
    'min'                  => [
        'numeric' => 'ข้อมูล  ต้องมีจำนวนอย่างน้อย :min',
        'file'    => 'ข้อมูล  ต้องมีจำนวนอย่างน้อย :min กิโลไบต์',
        'string'  => 'ข้อมูล  ต้องมีจำนวนอย่างน้อย :min ตัวอักษร',
        'array'   => 'ข้อมูล  ต้องมีจำนวนอย่างน้อย :min ค่า',
    ],
    'not_in'               => 'ข้อมูลที่เลือกไม่ถูกต้อง',
    'not_regex'            => 'The format is invalid.',
    'numeric'              => 'ข้อมูลต้องเป็นตัวเลข',
    'present'              => 'ข้อมูลต้องเป็นปัจจุบัน',
    'regex'                => 'ข้อมูลมีรูปแบบไม่ถูกต้อง',
    'required'             => 'ข้อมูลจำเป็นต้องกรอก',
    'required_if'          => 'ข้อมูลจำเป็นต้องกรอกเมื่อ :other เป็น :value',
    'required_unless'      => 'ข้อมูลจำเป็นต้องกรอกเว้นแต่ :other เป็น :values',
    'required_with'        => 'ข้อมูลจำเป็นต้องกรอกเมื่อ :values มีค่า',
    'required_with_all'    => 'ข้อมูลจำเป็นต้องกรอกเมื่อ :values มีค่าทั้งหมด',
    'required_without'     => 'ข้อมูลจำเป็นต้องกรอกเมื่อ :values ไม่มีค่า',
    'required_without_all' => 'ข้อมูลจำเป็นต้องกรอกเมื่อ :values ไม่มีค่าทั้งหมด',
    'same'                 => 'ข้อมูลและ :other ต้องถูกต้อง',
    'size'                 => [
        'numeric' => 'ข้อมูล  ต้องเท่ากับ :size',
        'file'    => 'ข้อมูล  ต้องเท่ากับ :size กิโลไบต์',
        'string'  => 'ข้อมูล  ต้องเท่ากับ :size ตัวอักษร',
        'array'   => 'ข้อมูล  ต้องเท่ากับ :size ค่า',
    ],
    'string'               => 'ข้อมูล  ต้องเป็นอักขระ',
    'timezone'             => 'ข้อมูล  ต้องเป็นข้อมูลเขตเวลาที่ถูกต้อง',
    'unique'               => 'ข้อมูล :attribute ไม่สามารถใช้ได้',
    'url'                  => 'ข้อมูล  ไม่ถูกต้อง',
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
        'attribute-name' => [
            'rule-name' => 'custom-message',
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
        'backend' => [
            'access' => [
                'permissions' => [
                    'associated_roles' => 'บทบาทที่เกี่ยวข้อง',
                    'dependencies'     => 'สิ่งที่จำเป็นต้องมี',
                    'display_name'     => 'ชื่อที่แสดง',
                    'group'            => 'กลุ่ม',
                    'group_sort'       => 'เรียงตามกลุ่ม',
                    'groups' => [
                        'name' => 'ชื่อกลุ่ม',
                    ],
                    'name'   => 'ชื่อ',
                    'system' => 'ระบบ?',
                ],
                'roles' => [
                    'associated_permissions' => 'สิทธิ์ที่เกี่ยวข้อง',
                    'name'                   => 'ชื่อ',
                    'sort'                   => 'เรียง',
                ],
                'users' => [
                    'active'                  => 'เปิดใช้งาน',
                    'associated_roles'        => 'บทบาทที่เกี่ยวข้อง',
                    'confirmed'               => 'ยืนยันตัวตน',
                    'email'                   => 'ที่อยู่อีเมล',
                    'name'                    => 'ชื่อ',
                    'other_permissions'       => 'สิทธิ์อื่นๆ',
                    'password'                => 'รหัสผ่าน',
                    'password_confirmation'   => 'ยืนยันรหัสผ่าน',
                    'send_confirmation_email' => 'ส่งอีเมลยืนยันตัวตน',
                ],
            ],
        ],
        'frontend' => [
            'email'                     => 'ที่อยู่อีเมล',
            'name'                      => 'ชื่อ',
            'password'                  => 'รหัสผ่าน',
            'password_confirmation'     => 'ยืนยันรหัสผ่าน',
            'phone' => 'Phone',
            'message' => 'Message',
            'old_password'              => 'รหัสผ่านเดิม',
            'new_password'              => 'รหัสผ่านใหม่',
            'new_password_confirmation' => 'ยืนยันรหัสผ่านใหม่',
        ],
    ],
];