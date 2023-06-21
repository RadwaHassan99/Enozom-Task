<?php


namespace App\Services;


use App\Http\Resources\ScheduleResource;
use App\Repositories\TripRepository;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
class TripService
{

    protected $tripRepository;

    public function __construct(){
        $this->tripRepository = new TripRepository();
    }

    public function getTrips($src_id, $dest_id){
        $trips = $this->tripRepository->getTrips($src_id, $dest_id);
        return count($trips) > 0
        ? response()->json(['trips' => $trips], 200)
        : response()->json(['message' => 'Not found'], 404);
    }

}
