<?php

namespace App\Observers;

use App\Models\Metro;

class MetroObserver
{
    /**
     * Handle the Metro "created" event.
     *
     * @param Metro $metro
     * @return void
     */
    public function created(Metro $metro)
    {
        //
    }

    /**
     * Handle the Metro "updated" event.
     *
     * @param Metro $metro
     * @return void
     */
    public function updated(Metro $metro)
    {
        //
    }

    /**
     * Handle the Metro "deleted" event.
     *
     * @param Metro $metro
     * @return void
     */
    public function deleted(Metro $metro)
    {
        //
    }

    /**
     * Handle the Metro "restored" event.
     *
     * @param Metro $metro
     * @return void
     */
    public function restored(Metro $metro)
    {
        //
    }

    /**
     * Handle the Metro "force deleted" event.
     *
     * @param Metro $metro
     * @return void
     */
    public function forceDeleted(Metro $metro)
    {
        //
    }
}
