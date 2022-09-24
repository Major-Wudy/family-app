<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @author wura798 (initial)
 */
class MasterDataCountryHis extends Model
{
    protected $connection = "mysql_master";
    protected $table = "country_code_his";
}
