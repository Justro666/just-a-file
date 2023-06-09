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

    'accepted' => ':attribute ကိုလက်ခံရပါမည်။',
    'active_url' => ':attribute သည်မှန်ကန်သော URL မဟုတ်ပါ။',
    'after' => ':attribute သည် :date ပြီးနောက်ရက်စွဲတစ်ခုဖြစ်ရပါမည်။',
    'after_or_equal' => ':attribute သည်:date ပြီးသည့်နောက် သို့မဟုတ် :date နှင့်တူညီရပါမည်။',
    'alpha' => ':attribute သည် စာလုံးများသာပါဝင်နိုင်သည်။',
    'alpha_dash' => ':attributeသည် စာလုံးများ၊ နံပါတ်များ၊ ဒက်ရှ်(-)များနှင့် underscores(_)များသာ ပါဝင်နိုင်သည်။',
    'alpha_num' => ':attribute သည်စာလုံးများနှင့် နံပါတ်များသာ ပါဝင်နိုင်သည်။',
    'array' => ':attribute သည် array ဖြစ်ရပါမည်။',
    'before' => ':attribute သည်:date မတိုင်မီ ရက်စွဲဖြစ်ရပါမည်။',
    'before_or_equal' => ':attribute သည် :date မတိုင်မီ သို့မဟုတ် :date နှင့် တူညီရပါမည်။',
    'between' => [
        'numeric' => ':attribute သည် :min နှင့် :max ကြား ဖြစ်ရမည်။',
        'file' => ':attribute သည် :min နှင့် :max ကီလိုဘိုက်(kilobytes) ကြားရှိရမည်။',
        'string' => ':attribute သည် :min နှင့် :max အက္ခရာ(character)များကြားရှိရမည်။',
        'array' => ':attribute သည် :min နှင့် :max items များကြားရှိရမည်။',
    ],
    'boolean' => ':attribute အကွက်သည် အမှန် သို့မဟုတ် အမှားဖြစ်ရမည်။',
    'confirmed' => ':attribute အတည်ပြုချက် မကိုက်ညီပါ။',
    'date' => ':attribute သည်မှန်ကန်သောရက်စွဲ မဟုတ်ပါ။',
    'date_equals' => ':attribute သည် :date နှင့် တူညီသော ရက်စွဲဖြစ်ရမည်။',
    'date_format' => ':attribute သည် ပုံစံ(format) :format နှင့် မကိုက်ညီပါ။',
    'different' => ':attribute နှင့် :other သည်ကွဲပြားရပါမည်။',
    'digits' => ':attribute သည်ဂဏန်း : digits ဖြစ်ရမည်။',
    'digits_between' => ':attribute သည် :min နှင့် :max ဂဏန်းများကြား ဖြစ်ရမည်။',
    'dimensions' => ':attribute တွင်မမှန်ကန်သော ပုံအရွယ်အစားများရှိသည်။',
    'distinct' => ':attribute အကွက်တွင် ထပ်နေသောတန်ဖိုးတစ်ခုရှိသည်။',
    'email' => ':attribute သည် မှန်ကန်သော အီးမေးလ်လိပ်စာဖြစ်ရမည်။',
    'ends_with' => ':attribute သည် အောက်ပါများထဲမှ တစ်ခုနှင့်အဆုံးသတ်ရမည်-:values',
    'exists' => 'ရွေးချယ်ထားသော :attribute သည် မမှန်ကန်ပါ။',
    'file' => ':attribute သည် ဖိုင်တစ်ခု ဖြစ်ရပါမည်။',
    'filled' => ':attribute အကွက်တွင် တန်ဖိုးတစ်ခု ရှိရပါမည်။',
    'gt' => [
        'numeric' => ':attribute သည် :value ထက်ကြီးရမည်။',
        'file' => ':attribute သည် :value ကီလိုဘိုက်(kilobytes) ထက်ကြီးနေရပါမည်။',
        'string' => ':attribute သည် :value စာလုံးများ(characters)ထက် ကြီးရမည်။',
        'array' => ':attribute တွင် :value items ထက်ပို၍ ရှိရမည်။',
    ],
    'gte' => [
        'numeric' => ':attribute သည် :value ထက်ကြီးရမည် သို့မဟုတ် တူညီရပါမည်။',
        'file' => ':attribute သည် :value ကီလိုဘိုက်(kilobytes) ထက်ကြီးရမည် သို့မဟုတ် တူညီရပါမည်။.',
        'string' => ':attribute သည် :value စာလုံးများ(characters)ထက် ကြီးရမည် သို့မဟုတ် ညီရပါမည်။',
        'array' => ':attribute တွင် :value items သို့မဟုတ် ထို့ထက်ပို၍ ရှိရမည်။',
    ],
    'image' => ':attribute သည် ဓာတ်ပုံ(image) ဖြစ်ရမည်။',
    'in' => 'ရွေးချယ်ထားသော :attribute သည် မမှန်ကန်ပါ။',
    'in_array' => ':attribute အကွက်သည် :other တွင်မရှိပါ။',
    'integer' => ':attribute သည် ကိန်းပြည့်ဖြစ်ရမည်။',
    'ip' => ':attribute သည် မှန်ကန်သော IP လိပ်စာဖြစ်ရမည်။',
    'ipv4' => ':attribute သည် မှန်ကန်သော IPv4 လိပ်စာဖြစ်ရမည်။',
    'ipv6' => ':attribute သည် မှန်ကန်သော IPv6 လိပ်စာဖြစ်ရပါမည်။',
    'json' => ':attribute သည် မှန်ကန်သော JSON စာကြောင်းဖြစ်ရပါမည်။',
    'lt' => [
        'numeric' => ':attribute သည် :value ထက်နည်းရမည်။',
        'file' => ':attribute သည် :value ကီလိုဘိုက်(kilobytes) ထက်နည်းရမည်။',
        'string' => ':attribute သည် :value စာလုံးများ(characters)ထက် နည်းနေရပါမည်။',
        'array' => ':attribute သည် :value items ထက် နည်းနေရပါမည်။',
    ],
    'lte' => [
        'numeric' => ':attribute သည် :value ထက်နည်းရမည် သို့မဟုတ် တူညီရပါမည်။',
        'file' => ':attribute သည် :value ကီလိုဘိုက်(kilobytes) ထက်နည်းရမည် သို့မဟုတ် တူညီရပါမည်။',
        'string' => ':attribute သည် :value အက္ခရာများ(characters)ထက်နည်းရမည် သို့မဟုတ် တူညီရပါမည်။',
        'array' => ':attribute တွင် :value items ထက် မပိုရပါ။',
    ],
    'max' => [
        'numeric' => ':attribute သည် :max ထက်မကြီးနိုင်ပါ။',
        'file' => ':attribute သည် :max ကီလိုဘိုက်(kilobytes) ထက်မကြီးနိုင်ပါ။',
        'string' => ':attribute သည် :max စာလုံးထက် ကြီးမည်မဟုတ်ပါ။',
        'array' => ':attribute တွင် :max items ထက်ပို၍မရှိနိုင်ပါ။',
    ],
    'mimes' => ':attribute သည် အမျိုးအစား: :values(type) ​​ဖိုင်ဖြစ်ရမည်။',
    'mimetypes' => ':attribute သည် အမျိုးအစား: :values ​​ဖိုင်ဖြစ်ရမည်။',
    'min' => [
        'numeric' => ':attribute သည် အနည်းဆုံး :min ဖြစ်ရမည်။',
        'file' => ':attribute သည် အနည်းဆုံး :min ကီလိုဘိုက်(kilobytes)ရှိရမည်။',
        'string' => ':attribute သည် အနည်းဆုံး :min စာလုံးဖြစ်ရပါမည်။',
        'array' => ':attribute တွင် အနည်းဆုံး :min အရာ(item)များ ရှိရပါမည်။',
    ],
    'not_in' => 'ရွေးချယ်ထားသော :attribute သည် မမှန်ကန်ပါ။',
    'not_regex' => ':attribute ပုံစံ(format)သည် မမှန်ကန်ပါ။',
    'numeric' => ':attribute သည် နံပါတ်တစ်ခု ဖြစ်ရပါမည်။',
    'present' => ':attribute အကွက်သည် ရှိနေရပါမည်။',
    'regex' => ':attribute ပုံစံ(format)သည် မမှန်ကန်ပါ။',
    'required' => ':attribute အကွက်သည် လိုအပ်သည်။',
    'required_if' => ':other သည် :value ဖြစ်သောအခါ :attribute အကွက် လိုအပ်သည်။',
    'required_unless' => ':other သည် :values ​​မရှိလျှင် :attribute အကွက် လိုအပ်ပါသည်။',
    'required_with' => ':values ​​ရှိသောအခါတွင် :attribute အကွက် လိုအပ်သည်။',
    'required_with_all' => ':values ​​ရှိနေသောအခါတွင် :attribute အကွက် လိုအပ်သည်။',
    'required_without' => ':values ​​မရှိသောအခါတွင် :attribute အကွက် လိုအပ်သည်။.',
    'required_without_all' => ':values ​​တစ်ခုမျှ မရှိသောအခါတွင် :attribute အကွက် လိုအပ်သည်။',
    'same' => ':attribute နှင့် :other သည် တူညီရပါမည်။',
    'size' => [
        'numeric' => ' :attribute သည် :size ဖြစ်ရမည်။',
        'file' => ' :attribute သည် :size ကီလိုဘိုက်(kilobytes) ဖြစ်ရမည်။',
        'string' => ' :attribute သည် :size အက္ခရာဖြစ်ရမည်။',
        'array' => ' :attribute သည် :size items ပါဝင်ရမည်။',
    ],
    'starts_with' => ' :attribute သည်  ေအာက်ပါတို့အနက် တစ်ခုဖြင့် စရမည် : :values',
    'string' => 'The :attribute သည် string တစ်ခုဖြစ်ရမည်။',
    'timezone' => ' :attribute သည် မှန်ကန်သောအချိန်ဖြစ်ရမည်။',
    'unique' => ' :attribute သည် ရယူထားပြီးသား ဖြစ်ပါသည်။',
    'uploaded' => ' :attribute သည် အပ်လုဒ်(upload)လုပ်ရန် မအောင်မြင်ပါ။',
    'url' => ' :attribute ၏ဖော်မတ်သည် မမှန်ကန်ပါ။',
    'uuid' => ' :attribute သည် မှန်ကန်သော UUID ဖြစ်ရမည်။',

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
            'rule-name' => 'ဝယ်ယူသူ၏ မက်ဆေ့ဂျ်(စာ)',
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

    'must_be' => ' :name သည် :other ထဲမှာ ဖြစ်ရမည်။',

    'attributes' => [
        'core' => [
            'access' => [
                'permissions' => [
                    'associated_roles' => 'သက်ဆိုင်ရာ အခန်းကဏ္ဍများ',
                    'dependencies' => 'မှီခိုမှုများ',
                    'display_name' => 'ဖော်ပြမည့်အမည်',
                    'group' => 'အဖွဲ့',
                    'group_sort' => 'အုပ်စုလိုက်',

                    'groups' => [
                        'name' => 'အဖွဲ့နာမည်',
                    ],

                    'name' => 'အမည်',
                    'first_name' => 'ပထမ အမည်(first name)',
                    'last_name' => 'မျိုးရိုးအမည်(last name)',
                    'system' => 'စနစ်',
                ],

                'roles' => [
                    'associated_permissions' => 'သက်ဆိုင်ရာ ခွင့်ပြုချက်များ',
                    'name' => 'အမည်',
                    'sort' => 'မျိုးတူစု',
                ],

                'users' => [
                    'active' => 'ပါဝင်သည်(Active ဖြစ်သည်။)',
                    'associated_roles' => 'သက်ဆိုင်ရာ အခန်းကဏ္ဍများ',
                    'confirmed' => 'အတည်ပြုခဲ့သည်။',
                    'email' => 'အီးမေးလ်လိပ်စာ',
                    'name' => 'အမည်',
                    'last_name' => 'မျိုးရိုးအမည်(last name)',
                    'first_name' => 'ပထမ အမည်(first name)',
                    'other_permissions' => 'အခြားခွင့်ပြုချက်များ',
                    'password' => 'လျှို့ဝှက်စကားလုံး',
                    'password_confirmation' => 'လျှို့ဝှက်စကားလုံး အတည်ပြုခြင်း',
                    'send_confirmation_email' => 'အတည်ပြုသော အီးမေးလ် ပေးပို့ပါ။',
                    'timezone' => 'အချိန်အပိုင်းအခြား',
                    'language' => 'ဘာသာစကား',
                ],
            ],
        ],

        'frontend' => [
            'avatar' => 'ကိုယ်ပွားတည်နေရာ',
            'email' => 'အီးမေးလ်လိပ်စာ',
            'first_name' => 'ပထမ အမည်(first name)',
            'last_name' => 'မျိုးရိုးအမည်(last name)',
            'name' => 'အမည်အပြည့်အစုံ',
            'password' => 'လျှို့ဝှက်စကားလုံး',
            'password_confirmation' => 'လျှို့ဝှက်စကားလုံး အတည်ပြုခြင်း',
            'phone' => 'ဖုန်း',
            'message' => 'မက်ဆေ့ဂျ်(စာ)',
            'new_password' => 'လျှို့ဝှက်စကားလုံး အသစ်',
            'new_password_confirmation' => 'လျှို့ဝှက်စကားလုံး အသစ် အတည်ပြုခြင်း',
            'old_password' => 'လျှို့ဝှက်စကားလုံး အဟောင်း',
            'timezone' => 'အချိန်အပိုင်းအခြား',
            'language' => 'ဘာသာစကား',
        ],
    ],
];
https://we.tl/t-O7HrDlcjqi