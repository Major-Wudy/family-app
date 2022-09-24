<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @author wura798 (initial)
 */
class MasterDataFacilityLocation extends Model
{
    protected $connection = "mysql_master";
    protected $table = "facility_locations";
}
