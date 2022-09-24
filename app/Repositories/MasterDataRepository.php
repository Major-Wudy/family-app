<?php

namespace App\Repositories;

use App\MasterDataFacilityLocation;

class MasterDataRepository
{

    /**
     * @return MasterDataFacilityLocation[]|\Illuminate\Database\Eloquent\Collection
     * @author wura798
     */
    public function getFacilityLocations()
    {
        return MasterDataFacilityLocation::all();
    }

}
