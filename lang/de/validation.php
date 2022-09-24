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

    'accepted' => ':attribute muss akzeptiert werden.',
    'accepted_if' => ':attribute muss akzeptiert werden, wenn :other :value entspricht.',
    'active_url' => ':attribute ist keine gültige URL.',
    'after' => ':attribute muss ein Datum nach dem :date sein.',
    'after_or_equal' => ':attribute muss der :date oder später sein.',
    'alpha' => ':attribute darf nur Buchstaben enthalten.',
    'alpha_dash' => ':attribute darf nur Buchstaben, Zahlen, Binde- und/oder Unterstriche enthalten.',
    'alpha_num' => ':attribute darf nur Buchstaben und Zahlen enthalten.',
    'array' => ':attribute muss ein Array sein.',
    'before' => ':attribute muss ein Datum vor dem :date sein.',
    'before_or_equal' => ':attribute muss der :date oder früher sein.',
    'between' => [
        'numeric' => ':attribute darf nur zwischen :min und :max lang sein.',
        'file' => ':attribute darf nur zwischen :min und :max Kilobyte groß sein.',
        'string' => ':attribute darf nur zwischen :min und :max Zeichen enthalten.',
        'array' => ':attribute darf nur zwischen :min und :max Elemente enthalten.',
    ],
    'boolean' => ':attribute muss true (zutreffend) oder false (nicht zutreffend) sein.',
    'confirmed' => 'Die Bestätigung zu :attribute stimmt nicht überein.',
    'current_password' => 'Das Passwort ist nicht korrekt.',
    'date' => ':attribute ist kein gültiges Datum.',
    'date_equals' => ':attribute muss ein Datum sein, dass dem :date entspricht.',
    'date_format' => ':attribute stimmt nicht mit dem Format :format überein.',
    'declined' => ':attribute muss abgelehnt werden.',
    'declined_if' => ':attribute muss abgelehnt werden, wenn :other gleich :value.',
    'different' => ':attribute und :other müssen unterschiedlich sein.',
    'digits' => ':attribute muss :digits Ziffern lang sein.',
    'digits_between' => ':attribute muss zwischen :min und :max Ziffern lang sein.',
    'dimensions' => ':attribute hat ungültige Bildabmessungen.',
    'distinct' => 'Das Feld :attribute enthält einen doppelten Wert.',
    'email' => 'Das Feld :attribute muss eine gültige E-Mail-Adresse enthalten.',
    'ends_with' => ':attribute muss mit einem der folgenden Werte enden: :values.',
    'enum' => ':attribute ist eine ungültige Auswahl.',
    'exists' => ':attribute existiert bereits (unzulässige Auswahl).',
    'file' => ':attribute muss eine Datei sein.',
    'filled' => 'Das Feld :attribute muss ausgefüllt sein.',
    'gt' => [
        'numeric' => ':attribute muss größer sein als :value.',
        'file' => ':attribute muss größer sein als :value Kilobyte.',
        'string' => ':attribute muss größer sein als :value Zeichen.',
        'array' => ':attribute muss mehr als :value Elemente enthalten.',
    ],
    'gte' => [
        'numeric' => ':attribute muss größer oder gleich :value sein.',
        'file' => ':attribute muss größer oder gleich :value Kilobyte sein.',
        'string' => ':attribute muss größer oder gleich :value Zeichen sein.',
        'array' => ':attribute muss mindestens :value Elemente enthalten.',
    ],
    'image' => ':attribute muss eine Bilddatei sein.',
    'in' => ':attribute ist eine ungültige Auswahl.',
    'in_array' => ':attribute ist nicht enthalten in :other.',
    'integer' => ':attribute muss ein Zahlenwert sein (ganze Zahlen).',
    'ip' => ':attribute muss eine gültige IP-Adresse sein.',
    'ipv4' => ':attribute muss eine gültige IPv4-Adresse sein.',
    'ipv6' => ':attribute muss eine gültige IPv6-Adresse sein.',
    'mac_address' => ':attribute muss eine gültige MAC-Adresse sein.',
    'json' => ':attribute muss ein zulässiger JSON-String sein.',
    'lt' => [
        'numeric' => ':attribute muss größer sein als :value.',
        'file' => ':attribute muss größer sein als :value Kilobyte.',
        'string' => ':attribute muss größer sein als :value Zeichen.',
        'array' => ':attribute muss mehr als :value Elemente enthalten.',
    ],
    'lte' => [
        'numeric' => ':attribute muss kleiner oder gleich :value sein.',
        'file' => ':attribute muss kleiner oder gleich :value Kilobyte sein.',
        'string' => ':attribute muss kleiner oder gleich to :value Zeichen sein.',
        'array' => ':attribute darf nicht mehr als :value Elemente enthalten.',
    ],
    'max' => [
        'numeric' => ':attribute darf nicht größer als :max sein.',
        'file' => ':attribute darf nicht größer als :max Kilobyte sein.',
        'string' => ':attribute darf nicht größer als :max Zeichen sein.',
        'array' => ':attribute darf nicht mehr als :max Elemente enthalten.',
    ],
    'mimes' => ':attribute muss einem der folgenden Dateitypen entsprechen: :values.',
    'mimetypes' => ':attribute muss einem der folgenden Dateitypen entsprechen: :values.',
    'min' => [
        'numeric' => ':attribute muss min. :min groß sein.',
        'file' => ':attribute muss min. :min Kilobyte groß sein.',
        'string' => ':attribute muss min. :min Zeichen lang sein.',
        'array' => ':attribute muss min. :min Elemente enthalten.',
    ],
    'multiple_of' => ':attribute muss ein Vielfaches von :value sein.',
    'not_in' => ':attribute ist eine nicht zulässige auswahl.',
    'not_regex' => ':attribute hat kein zulässiges Format.',
    'numeric' => ':attribute muss eine Nummer sein.',
    'password' => 'Das verwendete Passwort ist falschs.',
    'present' => ':attribute muss ausgefüllt sein.',
    'prohibited' => 'Das Feld für :attribute ist nicht zulässig.',
    'prohibited_if' => 'Das Feld für :attribute ist nicht zulässig, wenn :other gleich :value ist.',
    'prohibited_unless' => 'Das Feld für :attribute ist nicht zulässig, solange :other ist gleich :values.',
    'prohibits' => 'Das Feld für :attribute verbietet das Vorhandensein von :other.',
    'regex' => 'Das Format von :attribute ist unzulässig.',
    'required' => ':attribute ist ein Pflichtfeld.',
    'required_if' => ':attribute ist ein Pflichtfeld, wenn :other ist gleich :value.',
    'required_unless' => ':attribute ist ein Pflichtfeld solange :other einem der folgenden Werte entspricht: :values.',
    'required_with' => ':attribute ist ein Pflichtfeld, wenn :values vorhanden ist.',
    'required_with_all' => ':attribute ist ein Pflichtfeld, wenn :values vorhanden sind.',
    'required_without' => ':attribute ist ein Pflichtfeld, wenn :values nicht vorhanden ist.',
    'required_without_all' => ':attribute ist ein Pflichtfeld, wenn :values nicht vorhanden sind.',
    'same' => ':attribute und :other müssen gleich sein.',
    'size' => [
        'numeric' => ':attribute muss :size groß sein.',
        'file' => ':attribute muss :size Kilobyte groß sein.',
        'string' => ':attribute muss :size Zeichen lang sein.',
        'array' => ':attribute muss :size Elemente enthalten.',
    ],
    'starts_with' => ':attribute muss mit einem der folgenden Werte beginnen: :values.',
    'string' => ':attribute muss ein String (Zeichenkette) sein.',
    'timezone' => ':attribute muss eine gültige Zeitzone sein.',
    'unique' => ':attribute darf nicht bereits ausgewählt/angegeben sein.',
    'uploaded' => 'attribute konnte nicht hochgeladen werden.',
    'url' => ':attribute muss eine gültige URL sein.',
    'uuid' => ':attribute muss eine gültige UUID sein.',

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
