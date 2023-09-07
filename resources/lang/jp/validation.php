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

    'accepted' => ':attribute は受け入れる必要があります。',
    'accepted_if' => ':other が :value の場合、:attribute は受け入れる必要があります。',
    'active_url' => ':attribute は有効なURLではありません。',
    'after' => ':attribute は :date より後の日付である必要があります。',
    'after_or_equal' => ':attribute は :date 以降の日付である必要があります。',
    'date' => ':attribute には日付を入力してください。',
    'alpha' => ':attribute は文字のみを含む必要があります。',
    'alpha_dash' => ':attribute は文字、数字、ダッシュ、アンダースコアのみを含む必要があります。',
    'alpha_num' => ':attribute は文字と数字のみを含む必要があります。',
    'array' => ':attribute は配列である必要があります。',
    'before' => ':attribute は :date より前の日付である必要があります。',
    'before_or_equal' => ':attribute は :date 以前の日付である必要があります。',
    'between' => [
        'numeric' => ':attribute は :min から :max までの値である必要があります。',
        'file' => ':attribute は :min から :max キロバイトのサイズである必要があります。',
        'string' => ':attribute は :min から :max 文字である必要があります。',
        'array' => ':attribute は :min から :max 個のアイテムを持つ必要があります。',
    ],
    'boolean' => ':attribute フィールドは true または false である必要があります。',
    'confirmed' => ':attribute の確認が一致しません。',
    'current_password' => '現在のパスワードが正しくありません。',
    'date' => ':attribute は有効な日付ではありません。',
    'date_equals' => ':attribute は :date と同じ日付である必要があります。',
    'date_format' => ':attribute は :format フォーマットと一致しません。',
    'declined' => ':attribute は拒否する必要があります。',
    'declined_if' => ':other が :value の場合、:attribute は拒否する必要があります。',
    'different' => ':attribute と :other は異なる必要があります。',
    'digits' => ':attribute は :digits 桁である必要があります。',
    'digits_between' => ':attribute は :min から :max 桁である必要があります。',
    'dimensions' => ':attribute は無効な画像サイズです。',
    'distinct' => ':attribute フィールドに重複した値があります。',
    'email' => ':attribute は有効なメールアドレスである必要があります。',
    'ends_with' => ':attribute は次のいずれかで終了する必要があります：:values。',
    'enum' => '選択された :attribute は無効です。',
    'exists' => '選択された :attribute は無効です。',
    'file' => ':attribute はファイルである必要があります。',
    'filled' => ':attribute フィールドに値が必要です。',
    'gt' => [
        'numeric' => ':attribute は :value より大きい必要があります。',
        'file' => ':attribute は :value キロバイトより大きい必要があります。',
        'string' => ':attribute は :value 文字より大きい必要があります。',
        'array' => ':attribute は :value 個以上のアイテムを持つ必要があります。',
    ],
    'gte' => [
        'numeric' => ':attribute は :value 以上である必要があります。',
        'file' => ':attribute は :value キロバイト以上である必要があります。',
        'string' => ':attribute は :value 文字以上である必要があります。',
        'array' => ':attribute は :value 個以上のアイテムを持つ必要があります。',
    ],
    'image' => ':attribute は画像である必要があります。',
    'in' => '選択された :attribute は無効です。',
    'in_array' => ':attribute フィールドは :other に存在しません。',
    'integer' => ':attribute は整数である必要があります。',
    'ip' => ':attribute は有効なIPアドレスである必要があります。',
    'ipv4' => ':attribute は有効なIPv4アドレスである必要があります。',
    'ipv6' => ':attribute は有効なIPv6アドレスである必要があります。',
    'json' => ':attribute は有効なJSON文字列である必要があります。',
    'lt' => [
        'numeric' => ':attribute は :value より小さい必要があります。',
        'file' => ':attribute は :value キロバイトより小さい必要があります。',
        'string' => ':attribute は :value 文字より小さい必要があります。',
        'array' => ':attribute は :value 個未満のアイテムを持つ必要があります。',
    ],
    'lte' => [
        'numeric' => ':attribute は :value 以下である必要があります。',
        'file' => ':attribute は :value キロバイト以下である必要があります。',
        'string' => ':attribute は :value 文字以下である必要があります。',
        'array' => ':attribute は :value 個以下のアイテムを持つ必要があります。',
    ],
    'mac_address' => ':attribute は有効なMACアドレスである必要があります。',
    'max' => [
        'numeric' => ':attribute は :max を超えてはいけません。',
        'file' => ':attribute は :max キロバイトを超えてはいけません。',
        'string' => ':attribute は :max 文字以内で入力してください。',
        'array' => ':attribute は :max 個を超えてはいけません。',
    ],
    'mimes' => ':attribute は次のタイプのファイルである必要があります：:values。',
    'mimetypes' => ':attribute は次のタイプのファイルである必要があります：:values。',
    'min' => [
        'numeric' => ':attribute は少なくとも :min である必要があります。',
        'file' => ':attribute は少なくとも :min キロバイトである必要があります。',
        'string' => ':attribute は少なくとも :min 文字である必要があります。',
        'array' => ':attribute は少なくとも :min 個のアイテムを持つ必要があります。',
    ],
    'multiple_of' => ':attribute は :value の倍数である必要があります。',
    'not_in' => '選択された :attribute は無効です。',
    'not_regex' => ':attribute の形式が無効です。',
    'numeric' => ':attribute は数値である必要があります。',
    'password' => 'パスワードが正しくありません。',
    'present' => ':attribute フィールドは存在する必要があります。',
    'prohibited' => ':attribute フィールドは禁止されています。',
    'prohibited_if' => ':other が :value の場合、:attribute フィールドは禁止されています。',
    'prohibited_unless' => ':other が :values に含まれていない限り、:attribute フィールドは禁止されています。',
    'prohibits' => ':attribute フィールドは :other が存在する場合、許可されていません。',
    'regex' => ':attribute の形式が無効です。',
    'required' => ':attribute は必須入力です。',
    'required_array_keys' => ':values に対する :attribute フィールドが必要です。',
    'required_if' => ':other が :value の場合、:attribute フィールドは必須です。',
    'required_unless' => ':other が :values に含まれていない限り、:attribute フィールドは必須です。',
    'required_with' => ':values が存在する場合、:attribute フィールドは必須です。',
    'required_with_all' => ':values が存在する場合、:attribute フィールドは必須です。',
    'required_without' => ':values が存在しない場合、:attribute フィールドは必須です。',
    'required_without_all' => ':values がすべて存在しない場合、:attribute フィールドは必須です。',
    'same' => ':attribute と :other は一致する必要があります。',
    'size' => [
        'numeric' => ':attribute は :size である必要があります。',
        'file' => ':attribute は :size キロバイトである必要があります。',
        'string' => ':attribute は :size 文字である必要があります。',
        'array' => ':attribute は :size 個のアイテムを持つ必要があります。',
    ],
    'starts_with' => ':attribute は次のいずれかで始まる必要があります：:values。',
    'string' => ':attribute は文字列である必要があります。',
    'timezone' => ':attribute は有効なタイムゾーンである必要があります。',
    'unique' => ':attribute は既に使用されています。',
    'uploaded' => ':attribute のアップロードに失敗しました。',
    'url' => ':attribute は有効なURLである必要があります。',
    'uuid' => ':attribute は有効なUUIDである必要があります。',

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

    'attributes' => [
        'email' => 'メールアドレス',
        'password' => 'パスワード',
        'token' => 'トークン',
    ],

];
