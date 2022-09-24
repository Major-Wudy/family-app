<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @author wura798 (initial)
 */
class MasterDataUniversityMember extends Model
{
    protected $connection = "mysql_master";
    protected $table = "university_members";
}
