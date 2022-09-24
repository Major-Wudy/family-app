<?php
/*
 * Please adjust $prodServerURL and comment out the required variables and if-statements in the else-path below.
 */
$prodServerHost = 'formulare.fh-rosenheim.de';

$testServerHost = 'formularetest.fh-rosenheim.de';
$logoutPartialURL = '/Shibboleth.sso/Logout';
$httpProtocol = 'https://';

/*
 * Adjust the URL for the development environment in the if statement below.
 */
if (@$_SERVER['HTTP_HOST'] === 'laravel-templates.priv/') {

    return [
        'shibboleth' => [
            'matno'         => '11',
            'forename'      => 'Max',
            'surname'       => 'Mustermann',
            'uid'           => 'muma22',
            'initials'      => 'MuMa',
            'email'         => 'Max.Mustermann@th-rosenheim.de',
            'ou'            => 'RZ',
            'course-short'  => 'INN',
            'course-long'   => 'Management in der Gesundheitswissenschaft / Bachelor',
            'faculty-short' => 'ING',
            'faculty-long'  => 'Angewandte Gesundheits- und Sozialwissenschaften',
            'final-degree'  => '84',
            'uniquecode'    => 'urn:mace:terena.org:schac:personalUniqueCode:de:fh-rosenheim.de:Personalnummer:1234567',
            'affiliation'   => 'member;staff',
            'logout-url'    => $httpProtocol . $testServerHost . $logoutPartialURL,
        ],
    ];

} else {

    if (@$_SERVER['HTTP_HOST'] === $prodServerHost) {
        $logoutURL = $httpProtocol . $prodServerHost . $logoutPartialURL;
    } else {
        $logoutURL = $httpProtocol . $testServerHost . $logoutPartialURL;
    }

    /*
     * Customise here:
     * Decomment required variables and if-statements
     */
    if (isset($_SERVER['givenName']) //&&
        //isset($_SERVER['sn']) &&
        //isset($_SERVER['uid']) &&
        //isset($_SERVER['initials']) &&
        //isset($_SERVER['sn']) &&
        //isset($_SERVER['mail']) &&
        //isset($_SERVER['ou']) &&
        //isset($_SERVER['eduPersonAffiliation'])
        ) {

        /*if (isset($_SERVER['schacPersonalUniqueCode'])) {
            $shibMatricNo = $_SERVER['schacPersonalUniqueCode'];
        } else {
            $shibMatricNo = '';
        }*/

        /*if (isset($_SERVER['hsroEduPersonStudiengangKurz'])) {
            $shibCourseShort = $_SERVER['hsroEduPersonStudiengangKurz'];
        } else {
            $shibCourseShort = '';
        }*/

        /*if (isset($_SERVER['hsroEduPersonStudiengangLang'])) {
            $shibCourseLong = $_SERVER['hsroEduPersonStudiengangLang'];
        } else {
            $shibCourseLong = '';
        }*/

        /*if (isset($_SERVER['dfnEduPersonFinalDegree'])) {
            $shibFinalDegree = $_SERVER['dfnEduPersonFinalDegree'];
        } else {
            $shibFinalDegree = '';
        }*/

        /*if (isset($_SERVER['hsroEduPersonFakultaetKurz'])) {
            $shibFacultyShort = $_SERVER['hsroEduPersonFakultaetKurz'];
        } else {
            $shibFacultyShort = '';
        }*/

        /*if (isset($_SERVER['hsroEduPersonFakultaetLang'])) {
            $shibFacultyLong = $_SERVER['hsroEduPersonFakultaetLang'];
        } else {
            $shibFacultyLong = '';
        }*/

        /*if (isset($_SERVER['schacPersonalUniqueCode'])) {
            $schacPersonalUniqueCode = $_SERVER['schacPersonalUniqueCode'];
        } else {
            $schacPersonalUniqueCode = "";
        }*/

        return [
            'shibboleth' => [
                //'matric-no'     => $shibMatricNo,
                //'forename'      => $_SERVER['givenName'],
                //'surname'       => $_SERVER['sn'],
                //'uid'           => $_SERVER['uid'],
                //'initials'      => $_SERVER['uid'],
                //'email'         => $_SERVER['mail'],
                //'course-short'  => $shibCourseShort,
                //'course-long'   => $shibCourseLong,
                //'faculty-short' => $shibFacultyShort,
                //'faculty-long'  => $shibFacultyLong,
                //'final-degree'  => $shibFinalDegree,
                //'uniquecode'    => $schacPersonalUniqueCode,
                //'affiliation'   => $_SERVER['eduPersonAffiliation'],
                'logout-url'    => $logoutURL,
            ],
        ];

    } else {
        return [
            'shibboleth' => [
                'matric-no'     => '',
                'forename'      => '',
                'surname'       => '',
                'uid'           => '',
                'initials'      => '',
                'email'         => '',
                'ou'            => '',
                'course-short'  => '',
                'course-long'   => '',
                'faculty-short' => '',
                'faculty-long'  => '',
                'final-degree'  => '',
                'uniquecode'    => '',
                'affiliation'   => '',
                'logout-url'    => $logoutURL,
            ],
        ];
    }

}

