<?php

/**
 * @author Roman Weinberger (roman.weinberger@th-rosenheim.de)
 */

if (config('features.new_design') &&  !isset($_COOKIE[env('APP_NAME') . '_design'])) {
    return [
        'en' => 'EN',
        'de' => 'DE',
    ];
} else {
    return [
        'en' => \App\Helpers\View\FlagHelper::get('gb'),
        'de' => \App\Helpers\View\FlagHelper::get('de'),
    ];
}
