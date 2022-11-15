<?php

namespace App\Observers;

use App\Models\Target;

class TargetObserver
{
    /**
     * Handle the Target "created" event.
     *
     * @param Target $target
     * @return void
     */
    public function created(Target $target)
    {
        //
    }

    /**
     * Handle the Target "updated" event.
     *
     * @param Target $target
     * @return void
     */
    public function updated(Target $target)
    {
        //
    }

    /**
     * Handle the Target "deleted" event.
     *
     * @param Target $target
     * @return void
     */
    public function deleted(Target $target)
    {
        //
    }

    /**
     * Handle the Target "restored" event.
     *
     * @param Target $target
     * @return void
     */
    public function restored(Target $target)
    {
        //
    }

    /**
     * Handle the Target "force deleted" event.
     *
     * @param Target $target
     * @return void
     */
    public function forceDeleted(Target $target)
    {
        //
    }
}
