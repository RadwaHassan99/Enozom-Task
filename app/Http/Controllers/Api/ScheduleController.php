<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ScheduleResource;
use App\Models\Schedule;
use App\Models\Station;
use Illuminate\Http\Request;



class ScheduleController extends Controller
{
    private $stationController;

    public function __construct(StationController $stationController)
    {
        $this->stationController = $stationController;
    }

    public function getAvailableTrips(Request $request)
    {
        $sourceStationName = $request->input('from_station');
        $destinationStationName = $request->input('to_station');

        $sourceStation = $this->stationController->findStationByName($sourceStationName);
        $destinationStation = $this->stationController->findStationByName($destinationStationName);



        if (!$sourceStation || !$destinationStation) {
            return response()->json(['error' => 'Invalid station name'], 400);
        }

        $sourceSchedules = $this->getSchedulesByStation($sourceStation->id);
        $destinationSchedules = $this->getSchedulesByStation($destinationStation->id);
        $validTrips = $this->filterValidTrips($sourceSchedules, $destinationSchedules);


        return response(ScheduleResource::collection($validTrips ),200);
    }

    private function getSchedulesByStation($stationId)
    {
        return Schedule::where('station_id', $stationId)->get();
    }

    private function filterValidTrips($sourceSchedules, $destinationSchedules)
    {
        return $sourceSchedules->filter(function ($sourceSchedule) use ($destinationSchedules) {
            $sourceTime = strtotime($sourceSchedule->time);

            $matchingDestinationSchedules = $destinationSchedules->where('train_id', $sourceSchedule->train_id);

            foreach ($matchingDestinationSchedules as $destinationSchedule) {
                $destinationTime = strtotime($destinationSchedule->time);

                if ($sourceTime < $destinationTime) {
                    return true;
                }
            }

            return false;
        });
    }


}
