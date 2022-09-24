<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @author wura798 (initial)
 */
class MasterDataDepartment extends Model
{
    protected $connection = "mysql_master";
    protected $table = "departments";
}
