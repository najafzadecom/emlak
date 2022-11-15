<?php

namespace App\Observers;

use App\Models\Announcement;

class AnnouncementObserver
{
    /**
     * Handle the Announcement "created" event.
     *
     * @param Announcement $announcement
     * @return void
     */
    public function created(Announcement $announcement)
    {
        //
    }

    /**
     * Handle the Announcement "updated" event.
     *
     * @param Announcement $announcement
     * @return void
     */
    public function updated(Announcement $announcement)
    {
        //
    }

    /**
     * Handle the Announcement "deleted" event.
     *
     * @param Announcement $announcement
     * @return void
     */
    public function deleted(Announcement $announcement)
    {
        //
    }

    /**
     * Handle the Announcement "restored" event.
     *
     * @param Announcement $announcement
     * @return void
     */
    public function restored(Announcement $announcement)
    {
        //
    }

    /**
     * Handle the Announcement "force deleted" event.
     *
     * @param Announcement $announcement
     * @return void
     */
    public function forceDeleted(Announcement $announcement)
    {
        //
    }
}
