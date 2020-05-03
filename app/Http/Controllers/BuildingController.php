<?php

namespace App\Http\Controllers;

use App\Building;

class BuildingController extends Controller
{

    public function __construct(){
    }

    public function getListBuildingsByStreetId( int $id ){
        return Building::query()
            ->where('street_id', '=', $id )
            ->take(10)
            ->get();
    }
}
