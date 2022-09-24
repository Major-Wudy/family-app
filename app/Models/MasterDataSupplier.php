<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @author wura798 (initial)
 */
class MasterDataSupplier extends Model
{
    protected $connection = "mysql_master";
    protected $table = "suppliers";

    protected $fillable = [
        'paramenter',
        'name',
        'street',
        'postcode',
        'city',
        'country',
        'email',
        'telephone',
        'additional',
        'telephone',
        'customer_number',
    ];
}
