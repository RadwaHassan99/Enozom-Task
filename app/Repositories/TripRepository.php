<?php


namespace App\Repositories;


use App\Models\Station;
use App\Models\Trip;


class TripRepository
{
    public function getTrips($src_id, $dest_id)
    {
        return Trip::select('trips.id as trip_number', 'trains.train_name')
            ->join('schedules as source_schedule', 'trips.id', '=', 'source_schedule.trip_id')
            ->join('stations as source_station', 'source_schedule.station_id', '=', 'source_station.id')
            ->join('schedules as destination_schedule', 'trips.id', '=', 'destination_schedule.trip_id')
            ->join('stations as destination_station', 'destination_schedule.station_id', '=', 'destination_station.id')
            ->join('trains', 'trips.train_id', '=', 'trains.id')
            ->where('source_station.id', $src_id)
            ->where('destination_station.id', $dest_id)
            ->whereRaw("STR_TO_DATE(source_schedule.time, '%H:%i') < STR_TO_DATE(destination_schedule.time, '%H:%i')")
            ->groupBy('trips.id', 'trains.train_name')
            ->get();
    }

}
