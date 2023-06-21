<?php


namespace App\Repositories;


use App\Models\Schedule;
use App\Models\Station;
use App\Repositories\StationRepository;
use App\Repositories\TrainRepository;

class ScheduleRepository
{

    protected $stationRepository;
    protected $trainRepository;

    public function __construct(StationRepository $stationRepository, TrainRepository $trainRepository)
    {
        $this->stationRepository = $stationRepository;
        $this->trainRepository = $trainRepository;
    }

    public function getAvailableTrips($fromStation, $toStation)
    {
        $fromStationModel = $this->stationRepository->getStationByName($fromStation);
        $toStationModel = $this->stationRepository->getStationByName($toStation);

        if (!$fromStationModel || !$toStationModel) {
            return [];
        }

        $trips = Schedule::query()
            ->where('station_id', $fromStationModel->id)
            ->orWhere('station_id', $toStationModel->id)
            ->groupBy('trip_num','train_id')
            ->havingRaw('MIN(CASE WHEN station_id = ? THEN time END) < MAX(CASE WHEN station_id = ? THEN time END)', [$fromStationModel->id, $toStationModel->id])
            ->get();

        return $trips;
    }


}
