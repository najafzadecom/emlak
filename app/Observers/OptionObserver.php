<?php

namespace App\Observers;

use App\Models\Option;

class OptionObserver
{
    /**
     * Handle the Option "created" event.
     *
     * @param Option $option
     * @return void
     */
    public function created(Option $option)
    {
        //
    }

    /**
     * Handle the Option "updated" event.
     *
     * @param Option $option
     * @return void
     */
    public function updated(Option $option)
    {
        //
    }

    /**
     * Handle the Option "deleted" event.
     *
     * @param Option $option
     * @return void
     */
    public function deleted(Option $option)
    {
        //
    }

    /**
     * Handle the Option "restored" event.
     *
     * @param Option $option
     * @return void
     */
    public function restored(Option $option)
    {
        //
    }

    /**
     * Handle the Option "force deleted" event.
     *
     * @param Option $option
     * @return void
     */
    public function forceDeleted(Option $option)
    {
        //
    }
}
