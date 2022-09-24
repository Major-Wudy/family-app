<?php

namespace App\Helpers\Miscellaneous;

use Carbon\Carbon;

class StringHelper
{

    /**
     * @param $date
     * @param $withTime
     * @param $system
     * @param $todayOrYesterday
     * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Translation\Translator|string|null
     * @author wero873
     */
    public static function convertDate($date, bool $withTime = false, bool $system = false, bool $todayOrYesterday = false): array|string|\Illuminate\Contracts\Translation\Translator|\Illuminate\Contracts\Foundation\Application|null
    {
        // $todayOrYesterday = true has no influence if $system = true
        if ($system == false) {
            if ($withTime == true) {
                $testDate = Carbon::parse($date);
                if ($todayOrYesterday == true) {
                    if ($testDate->isToday()) {
                        $return = __('general.today') . ", " . $testDate->format('H:i');
                    } elseif($testDate->isYesterday()) {
                        $return = __('general.yesterday') . ", " . $testDate->format('H:i');
                    } else {
                        $return = $testDate->format('d.m.Y, H:i');
                    }
                } else {
                    $return = $testDate->format('d.m.Y, H:i');
                }
            } else {
                if ($todayOrYesterday == true) {
                    $testDate = Carbon::parse($date);
                    if ($testDate->isToday()) {
                        $return = __('general.today');
                    } elseif($testDate->isYesterday()) {
                        $return = __('general.yesterday');
                    } else {
                        $return = Carbon::parse($date)->format('d.m.Y');
                    }
                } else {
                    $return = Carbon::parse($date)->format('d.m.Y');
                }
            }
        } else {
            if ($withTime == true) {
                $return = Carbon::parse($date)->format('Y-m-d H:i:m');
            } else {
                $return = Carbon::parse($date)->format('Y-m-d');
            }
        }

        return $return;

    }

    /**
     * @param $string
     * @param $start
     * @param $end
     * @return false|string
     * @author wero873
     */
    public static function getStringBetween($string, $start, $end) {
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) {
            return '';
        }
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }

    /**
     * @param $string
     * @param string $delimiter
     * @param bool $sort
     * @return bool|string[]
     * @author wero873
     */
    public static function stringToArray($string, $delimiter = '|', $sort = true) {
        // Return empty array if string is emtpy
        if ($string == "" || $string == null) {
            return [];
        } else {
            $stringArray = explode($delimiter, $string);

            if ($sort == true) {
                array_multisort($stringArray);
            }

            return $stringArray;
        }
    }

    /**
     * @param $array
     * @param string $seperator
     * @return string
     * @author wero873
     */
    public static function arrayToString($array, $seperator = '|') {
        $return = "";
        for ($i = 0; $i < count($array); $i++) {
            if ($i == 0) {
                $sep = '';
            } else {
                $sep = $seperator;
            }
            $return = $return . $sep . $array[$i];
        }
        return $return;
    }

    /**
     * @param $string
     * @param int $decimals
     * @return string
     * @author wero873
     */
    public static function convertFromNumericToMoney($numeric, $decimals = 2) {
        return number_format($numeric, $decimals, ',', '.');
    }
}
