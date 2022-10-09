<?php

namespace App\Http\Services;

use Illuminate\Contracts\Encryption\EncryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;

class EncryptionService 
{
    /**
     * @author Raphael Wudy (raphael.wudy94@web.de) alias Major-Wudy
     * 
     * encrypt a string
     * @param String $toEncrypt
     * 
     * @return String 
     */
    public function encrypt($toEncrypt) {
        try {
            return Crypt::encrypt($toEncrypt);
        } catch(EncryptException $e) {
            //TODO write into Log
            Log::error($e);
            return false;
        }
    }
}