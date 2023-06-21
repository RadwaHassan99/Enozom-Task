<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use App\Models\Station;
use App\Models\Trip;
use App\Services\TripService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TripController extends Controller
{
    protected $tripService;

    public function __construct(){
        $this->tripService = new TripService();
    }

    public function getTrips($src_id, $dest_id)
    {
        return $this->tripService->getTrips($src_id, $dest_id);

    }

}
