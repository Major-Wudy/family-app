<?php

namespace App\Helpers\Miscellaneous;

use Illuminate\Support\Facades\Config;

class ShibbolethHelper
{
    /**
     * @author Roman Weinberberger <roman.weinberger@th-rosenheim.de>
     *
     * @return mixed
     */
    public static function logoutURL()
    {
        return Config::get('constants.shibboleth.logout-url');
    }

    /**
     * @author Roman Weinberberger <roman.weinberger@th-rosenheim.de>
     *
     * @return array|string|string[]
     */
    public static function getMatricNo()
    {
        $matNo = Config::get('constants.shibboleth.matno');

        // Ectract the marticulation number or the personal number from string with string replace function
        $shibMatricNo = str_replace("urn:mace:terena.org:schac:personalUniqueCode:de:fh-rosenheim.de:Matrikelnummer:", "", $matNo);
        return str_replace("urn:mace:terena.org:schac:personalUniqueCode:de:fh-rosenheim.de:Personalnummer:", "", $shibMatricNo);
    }

    /**
     * @author Roman Weinberberger <roman.weinberger@th-rosenheim.de>
     *
     * @return mixed
     */
    public static function getForename()
    {
        return Config::get('constants.shibboleth.forename');
    }

    /**
     * @author Roman Weinberberger <roman.weinberger@th-rosenheim.de>
     *
     * @return mixed
     */
    public static function getSurname()
    {
        return Config::get('constants.shibboleth.surname');
    }

    /**
     * @author Roman Weinberberger <roman.weinberger@th-rosenheim.de>
     *
     * @return mixed
     */
    public static function getUserId() {
        return Config::get('constants.shibboleth.uid');
    }

    /**
     * @author Roman Weinberberger <roman.weinberger@th-rosenheim.de>
     *
     * @return mixed
     */
    public static function getInitials() {
        return Config::get('constants.shibboleth.initials');
    }

    /**
     * @author Roman Weinberberger <roman.weinberger@th-rosenheim.de>
     *
     * @return mixed
     */
    public static function getEmail()
    {
        return Config::get('constants.shibboleth.email');
    }

    /**
     * @author Roman Weinberberger <roman.weinberger@th-rosenheim.de>
     *
     * @return mixed
     */
    public static function getOu() {
        return Config::get('constants.shibboleth.ou');
    }

    /**
     * @author Roman Weinberberger <roman.weinberger@th-rosenheim.de>
     *
     * @return mixed
     */
    public static function getCourseShort()
    {
        return Config::get('constants.shibboleth.course-short');
    }

    /**
     * @author Roman Weinberberger <roman.weinberger@th-rosenheim.de>
     *
     * @return string
     */
    public static function getCourseLong()
    {
        $courseLong = Config::get('constants.shibboleth.course-long');
        $courseLongArray = explode('/', $courseLong);

        return trim($courseLongArray[0]);
    }

    /**
     * @author Roman Weinberberger <roman.weinberger@th-rosenheim.de>
     *
     * @return mixed
     */
    public static function getFacultyShort()
    {
        return Config::get('constants.shibboleth.faculty-short');
    }

    /**
     * @author Roman Weinberberger <roman.weinberger@th-rosenheim.de>
     *
     * @return mixed
     */
    public static function getFacultyLong()
    {
        return Config::get('constants.shibboleth.faculty-long');
    }

    /**
     * @author Roman Weinberberger <roman.weinberger@th-rosenheim.de>
     *
     * @param $asString
     * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Translation\Translator|mixed|string|void|null
     */
    public static function getFinalDegree($asString = false)
    {
        $finalDegree = Config::get('constants.shibboleth.final-degree');
        if ($asString) {
            switch ($finalDegree) {
                case '51':
                    return __('general.diploma-thesis');
                case '84':
                    return __('general.bachelor-thesis');
                case '90':
                    return __('general.master-thesis');
            }
        } else {
            return $finalDegree;
        }
    }

    /**
     * @author Roman Weinberberger <roman.weinberger@th-rosenheim.de>
     *
     * @return string
     */
    public static function getKindOfUser() {
        /**
         * Affiliation like:
         * student;member
         */
        $affiliation = self::getAffiliation();
        if ($affiliation != "") {
            // Split string in fragments
            $splitString = explode(';', $affiliation);
            // Search in fragment-array for needle
            if (in_array("student", $splitString)) {
                return "Student";
            } elseif (in_array("staff", $splitString) || in_array("faculty", $splitString)) {
                return "Staff";
            } else {
                return "Guest";
            }
        } else {
            return "Guest";
        }
    }

    /**
     * @author Roman Weinberberger <roman.weinberger@th-rosenheim.de>
     *
     * @return mixed
     */
    private static function getUniquecode() {
        return Config::get('constants.shibboleth.uniquecode');
    }

    /**
     * @author Roman Weinberberger <roman.weinberger@th-rosenheim.de>
     *
     * @return mixed
     */
    private static function getAffiliation() {
        return Config::get('constants.shibboleth.affiliation');
    }

}
