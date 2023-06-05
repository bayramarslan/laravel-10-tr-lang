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

    'accepted' => ':attribute alanı kabul edilmelidir.',
    'accepted_if' => ':attribute alanı, :other değeri :value olduğunda kabul edilmelidir.',
    'active_url' => ':attribute alanı geçerli bir URL olmalıdır.',
    'after' => ':attribute alanı, :date tarihinden sonra bir tarih olmalıdır.',
    'after_or_equal' => ':attribute alanı, :date tarihinden sonra veya ona eşit bir tarih olmalıdır.',
    'alpha' => ':attribute alanı sadece harf içermelidir.',
    'alpha_dash' => ':attribute alanı sadece harf, rakam, tire ve alt çizgi içermelidir.',
    'alpha_num' => ':attribute alanı sadece harf ve rakam içermelidir.',
    'array' => ':attribute alanı bir dizi olmalıdır.',
    'ascii' => ':attribute alanı yalnızca tek baytlık alfasayısal karakterler ve semboller içermelidir.',
    'before' => ':attribute alanı, :date tarihinden önce bir tarih olmalıdır.',
    'before_or_equal' => ':attribute alanı, :date tarihinden önce veya ona eşit bir tarih olmalıdır.',
    'between' => [
        'array' => ':attribute alanı, :min ile :max arasında öğe içermelidir.',
        'file' => ':attribute alanı, :min ile :max kilobayt arasında olmalıdır.',
        'numeric' => ':attribute alanı, :min ile :max arasında olmalıdır.',
        'string' => ':attribute alanı, :min ile :max karakter arasında olmalıdır.',
    ],
    'boolean' => ':attribute alanı doğru veya yanlış olmalıdır.',
    'confirmed' => ':attribute alanı onayı uyuşmuyor.',
    'current_password' => 'Şifre yanlış.',
    'date' => ':attribute alanı geçerli bir tarih olmalıdır.',
    'date_equals' => ':attribute alanı, :date tarihine eşit bir tarih olmalıdır.',
    'date_format' => ':attribute alanı, :format formatıyla eşleşmelidir.',
    'decimal' => ':attribute alanı, :decimal ondalık basamağa sahip olmalıdır.',
    'declined' => ':attribute alanı reddedilmelidir.',
    'declined_if' => ':attribute alanı, :other değeri :value olduğunda reddedilmelidir.',
    'different' => ':attribute alanı ve :other alanı farklı olmalıdır.',
    'digits' => ':attribute alanı :digits basamağa sahip olmalıdır.',
    'digits_between' => ':attribute alanı en az :min en fazla :max basamağa sahip olmalıdır.',
    'dimensions' => ':attribute alanı geçersiz resim boyutlarına sahip.',
    'distinct' => ':attribute alanı tekrarlayan bir değere sahip.',
    'doesnt_end_with' => ':attribute alanı aşağıdakilerden biriyle bitmemeli: :values.',
    'doesnt_start_with' => ':attribute alanı aşağıdakilerden biriyle başlamamalı: :values.',
    'email' => ':attribute alanı geçerli bir e-posta adresi olmalıdır.',
    'ends_with' => ':attribute alanı aşağıdakilerden biriyle bitmelidir: :values.',
    'enum' => 'Seçili :attribute geçersiz.',
    'exists' => 'Seçilen :attribute geçersiz.',
    'file' => ':attribute alanı bir dosya olmalıdır.',
    'filled' => ':attribute alanı bir değer içermelidir.',
    'gt' => [
        'array' => ':attribute alanı :value öğeden daha fazla olmalıdır.',
        'file' => ':attribute alanı :value kilobayttan daha büyük olmalıdır.',
        'numeric' => ':attribute alanı :value değerinden daha büyük olmalıdır.',
        'string' => ':attribute alanı :value karakterden daha büyük olmalıdır.',
    ],
    'gte' => [
        'array' => ':attribute alanı en az :value öğe içermelidir.',
        'file' => ':attribute alanı :value kilobayt veya daha büyük olmalıdır.',
        'numeric' => ':attribute alanı :value değerine eşit veya daha büyük olmalıdır.',
        'string' => ':attribute alanı :value karakterine eşit veya daha büyük olmalıdır.',
    ],
    'image' => ':attribute alanı bir resim olmalıdır.',
    'in' => 'Seçilen :attribute geçersiz.',
    'in_array' => ':attribute alanı, :other içinde bulunmalıdır.',
    'integer' => ':attribute alanı bir tamsayı olmalıdır.',
    'ip' => ':attribute alanı geçerli bir IP adresi olmalıdır.',
    'ipv4' => ':attribute alanı geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => ':attribute alanı geçerli bir IPv6 adresi olmalıdır.',
    'json' => ':attribute alanı geçerli bir JSON dizesi olmalıdır.',
    'lowercase' => ':attribute alanı küçük harflerden oluşmalıdır.',
    'lt' => [
        'array' => ':attribute alanı :value öğeden daha az olmalıdır.',
        'file' => ':attribute alanı :value kilobayttan daha küçük olmalıdır.',
        'numeric' => ':attribute alanı :value değerinden daha küçük olmalıdır.',
        'string' => ':attribute alanı :value karakterden daha küçük olmalıdır.',
    ],
    'lte' => [
        'array' => ':attribute alanı en fazla :value öğe içermelidir.',
        'file' => ':attribute alanı :value kilobayt veya daha küçük olmalıdır.',
        'numeric' => ':attribute alanı :value değerine eşit veya daha küçük olmalıdır.',
        'string' => ':attribute alanı :value karakterine eşit veya daha küçük olmalıdır.',
    ],
    'mac_address' => ':attribute alanı geçerli bir MAC adresi olmalıdır.',
    'max' => [
        'array' => ':attribute alanı en fazla :max öğe içermelidir.',
        'file' => ':attribute alanı en fazla :max kilobayt olmalıdır.',
        'numeric' => ':attribute alanı en fazla :max değerine sahip olmalıdır.',
        'string' => ':attribute alanı en fazla :max karakter içermelidir.',
    ],
    'max_digits' => ':attribute alanı en fazla :max basamağa sahip olmalıdır.',
    'mimes' => ':attribute alanı aşağıdaki dosya türlerinden biri olmalıdır: :values.',
    'mimetypes' => ':attribute alanı aşağıdaki dosya türlerinden biri olmalıdır: :values.',
    'min' => [
        'array' => ':attribute alanı en az :min öğe içermelidir.',
        'file' => ':attribute alanı en az :min kilobayt olmalıdır.',
        'numeric' => ':attribute alanı en az :min değerine sahip olmalıdır.',
        'string' => ':attribute alanı en az :min karakter içermelidir.',
    ],
    'min_digits' => ':attribute alanı en az :min basamağa sahip olmalıdır.',
    'missing' => ':attribute alanı eksik olmalıdır.',
    'missing_if' => ':attribute alanı :other :value olduğunda eksik olmalıdır.',
    'missing_unless' => ':attribute alanı :other :value olmadığında eksik olmalıdır.',
    'missing_with' => ':values varken :attribute alanı eksik olmalıdır.',
    'missing_with_all' => ':values mevcutken :attribute alanı eksik olmalıdır.',
    'multiple_of' => ':attribute alanı :value sayısının katı olmalıdır.',
    'not_in' => 'Seçilen :attribute geçersiz.',
    'not_regex' => ':attribute alanı geçersiz biçimdedir.',
    'numeric' => ':attribute alanı bir sayı olmalıdır.',
    'password' => [
        'letters' => ':attribute alanı en az bir harf içermelidir.',
        'mixed' => ':attribute alanı en az bir büyük harf ve bir küçük harf içermelidir.',
        'numbers' => ':attribute alanı en az bir sayı içermelidir.',
        'symbols' => ':attribute alanı en az bir sembol içermelidir.',
        'uncompromised' => 'Verilen :attribute bir şifre ile ilişkilendirilmiş bilinen bir ihlalde bulunduğu için kabul edilemez.',
    ],
    'present' => ':attribute alanı mevcut olmalıdır.',
    'prohibited' => ':attribute alanı yasaklanmıştır.',
    'prohibited_if' => ':attribute alanı :other değeri :value olduğunda yasaklanmıştır.',
    'prohibited_unless' => ':attribute alanı :other değeri :values içinde olmadıkça yasaklanmıştır.',
    'prohibits' => ':attribute alanı :other alanının mevcut olmasını engeller.',
    'regex' => ':attribute alanı geçersiz biçimdedir.',
    'required' => ':attribute alanı gereklidir.',
    'required_array_keys' => ':attribute alanı :values için girişler içermelidir.',
    'required_if' => ':attribute alanı, :other değeri :value olduğunda gereklidir.',
    'required_if_accepted' => ':other kabul edildiğinde :attribute alanı gereklidir.',
    'required_unless' => ':attribute alanı, :other değeri :values içinde olmadıkça gereklidir.',
    'required_with' => ':values varken :attribute alanı gereklidir.',
    'required_with_all' => ':values mevcutken :attribute alanı gereklidir.',
    'required_without' => ':values yokken :attribute alanı gereklidir.',
    'required_without_all' => ':values yokken :attribute alanı gereklidir.',
    'same' => ':attribute alanı ve :other alanı aynı olmalıdır.',
    'size' => [
        'array' => ':attribute alanı :size öğe içermelidir.',
        'file' => ':attribute alanı :size kilobayt olmalıdır.',
        'numeric' => ':attribute alanı :size değerine eşit olmalıdır.',
        'string' => ':attribute alanı :size karaktere sahip olmalıdır.',
    ],
    'starts_with' => ':attribute alanı aşağıdakilerden biriyle başlamalıdır: :values.',
    'string' => ':attribute alanı bir dize olmalıdır.',
    'timezone' => ':attribute alanı geçerli bir saat dilimi olmalıdır.',
    'unique' => ':attribute zaten alınmış.',
    'uploaded' => ':attribute yüklenemedi.',
    'uppercase' => ':attribute alanı büyük harf içermelidir.',
    'url' => ':attribute alanı geçerli bir URL olmalıdır.',
    'ulid' => ':attribute alanı geçerli bir ULID olmalıdır.',
    'uuid' => ':attribute alanı geçerli bir UUID olmalıdır.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
