<?php

namespace App\Helpers\View;

class FlagHelper
{
    /**
     * @param $country
     * @param bool $squared
     * @return string
     * @author wero873
     */
    public static function get($country, $border = false, $squared = false)
    {
        /**
         * $country is the ISO 3166-1-alpha-2 code of a country
         */
        if ($border == true) { $borderClass = ' border'; } else { $borderClass = ''; }
        if ($squared == true) { $squaredClass = ' flag-icon-squared'; } else { $squaredClass = ''; }
        return '<span class="flag-icon flag-icon-' . $country . $borderClass . $squaredClass . '"></span>';
    }

}
