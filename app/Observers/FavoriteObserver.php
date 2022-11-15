<?php

namespace App\Observers;

use App\Models\Favorite;

class FavoriteObserver
{
    /**
     * Handle the Favorite "created" event.
     *
     * @param Favorite $favorite
     * @return void
     */
    public function created(Favorite $favorite)
    {
        //
    }

    /**
     * Handle the Favorite "updated" event.
     *
     * @param Favorite $favorite
     * @return void
     */
    public function updated(Favorite $favorite)
    {
        //
    }

    /**
     * Handle the Favorite "deleted" event.
     *
     * @param Favorite $favorite
     * @return void
     */
    public function deleted(Favorite $favorite)
    {
        //
    }

    /**
     * Handle the Favorite "restored" event.
     *
     * @param Favorite $favorite
     * @return void
     */
    public function restored(Favorite $favorite)
    {
        //
    }

    /**
     * Handle the Favorite "force deleted" event.
     *
     * @param Favorite $favorite
     * @return void
     */
    public function forceDeleted(Favorite $favorite)
    {
        //
    }
}
