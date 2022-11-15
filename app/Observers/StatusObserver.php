<?php

namespace App\Observers;

use App\Models\Status;

class StatusObserver
{
    /**
     * Handle the Status "created" event.
     *
     * @param Status $status
     * @return void
     */
    public function created(Status $status)
    {
        //
    }

    /**
     * Handle the Status "updated" event.
     *
     * @param Status $status
     * @return void
     */
    public function updated(Status $status)
    {
        //
    }

    /**
     * Handle the Status "deleted" event.
     *
     * @param Status $status
     * @return void
     */
    public function deleted(Status $status)
    {
        //
    }

    /**
     * Handle the Status "restored" event.
     *
     * @param Status $status
     * @return void
     */
    public function restored(Status $status)
    {
        //
    }

    /**
     * Handle the Status "force deleted" event.
     *
     * @param Status $status
     * @return void
     */
    public function forceDeleted(Status $status)
    {
        //
    }
}
