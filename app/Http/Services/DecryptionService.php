<?php

namespace App\Http\Services;

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;

class DecryptionService 
{
    /**
     * @author Raphael Wudy (raphael.wudy94@web.de) alias Major-Wudy
     * 
     * decrypt a string
     * @param String $toDecrypt
     * 
     * @return String 
     */
    public function decrypt($toDecrypt) {
        try {
            return Crypt::decrypt($toDecrypt);
        } catch(DecryptException $e) {
            //TODO write into Log
            Log::error($e);
            return false;
        }
    }
}