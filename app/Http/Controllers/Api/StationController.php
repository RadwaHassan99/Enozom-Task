<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Station;
use Illuminate\Http\Request;

class StationController extends Controller
{
    public function findStationByName($stationName)
    {
        return Station::where('station_name', $stationName)->first();
    }
}
