<?php


namespace App\Repositories;


use App\Models\Station;


class TrainRepository
{

    public function getTrainByName($train)
        {
            return Station::where('train_name', $train)->first();
        }

}
