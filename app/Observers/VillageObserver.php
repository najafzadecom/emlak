<?php

namespace App\Observers;

use App\Models\Village;

class VillageObserver
{
    /**
     * Handle the Village "created" event.
     *
     * @param Village $village
     * @return void
     */
    public function created(Village $village)
    {
        //
    }

    /**
     * Handle the Village "updated" event.
     *
     * @param Village $village
     * @return void
     */
    public function updated(Village $village)
    {
        //
    }

    /**
     * Handle the Village "deleted" event.
     *
     * @param Village $village
     * @return void
     */
    public function deleted(Village $village)
    {
        //
    }

    /**
     * Handle the Village "restored" event.
     *
     * @param Village $village
     * @return void
     */
    public function restored(Village $village)
    {
        //
    }

    /**
     * Handle the Village "force deleted" event.
     *
     * @param Village $village
     * @return void
     */
    public function forceDeleted(Village $village)
    {
        //
    }
}
