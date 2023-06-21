<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\TripService;

use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *     title="Your API",
 *     version="1.0.0",
 *     description="API documentation for Trip Application"
 * )
 */
class TripController extends Controller
{
    protected $tripService;

    public function __construct()
    {
        $this->tripService = new TripService();
    }

    /**
     * @OA\Get(
     *     path="/api/trips/available/{src_id}/{dest_id}",
     *     tags={"Trips"},
     *     summary="Get trips",
     *     description="Retrieve a list of available trips.",
     *     @OA\Parameter(
     *         name="src_id",
     *         in="path",
     *         description="Source ID",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Parameter(
     *         name="dest_id",
     *         in="path",
     *         description="Destination ID",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 property="trips",
     *                 type="array",
     *                 @OA\Items(
     *                     @OA\Property(property="trip_number", type="integer"),
     *                     @OA\Property(property="train_name", type="string"),
     *                 )
     *             ),
     *         ),
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Not found",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string"),
     *         ),
     *     ),
     * )
     */
    public function getTrips($src_id, $dest_id)
    {
        return $this->tripService->getTrips($src_id, $dest_id);
    }
}
