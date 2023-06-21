<?php


namespace App\Repositories;


use App\Models\Station;


class StationRepository
{
    public function getStationByName($station)
        {
            return Station::where('station_name', $station)->first();
        }
}
