<?php

namespace App\Helpers\View;

class HtmlHelper
{
    /**
     * @param $kind
     * @param $text
     * @param $withIcon
     * @return string
     * @author wero873
     */
    public static function alert($kind = null, $text = null, $withIcon = true)
    {
        // $kind must replace the asterisk in the class name: alert-* (e.g. alert-info if $kind = 'info')
        if ($kind == null || $kind == "") {
            return '';
        } else {
            switch ($kind) {
                case 'danger':
                    $icon = '<x-icon type="warning"/> ';
                    break;
            }

            if (!$withIcon) {
               $icon = "";
            }

            return '
                <div class="alert alert-' . $kind . '" role="alert">
                    ' . $icon . $text . '
                </div>
            ';

        }
    }

    /**
     * @param $message
     * @return string
     * @author wero873
     */
    public static function errorMessage($message) {
        return '<div style="display: block;" class="invalid-feedback"><x-icon type="warning"/> ' . $message . '</div>';
    }
}
