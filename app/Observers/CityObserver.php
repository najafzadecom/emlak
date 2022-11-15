<?php

namespace App\Observers;

use App\Models\City;

class CityObserver
{
    /**
     * Handle the City "created" event.
     *
     * @param City $city
     * @return void
     */
    public function created(City $city)
    {
        //
    }

    /**
     * Handle the City "updated" event.
     *
     * @param City $city
     * @return void
     */
    public function updated(City $city)
    {
        //
    }

    /**
     * Handle the City "deleted" event.
     *
     * @param City $city
     * @return void
     */
    public function deleted(City $city)
    {
        //
    }

    /**
     * Handle the City "restored" event.
     *
     * @param City $city
     * @return void
     */
    public function restored(City $city)
    {
        //
    }

    /**
     * Handle the City "force deleted" event.
     *
     * @param City $city
     * @return void
     */
    public function forceDeleted(City $city)
    {
        //
    }
}
