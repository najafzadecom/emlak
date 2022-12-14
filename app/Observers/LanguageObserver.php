<?php

namespace App\Observers;

use App\Models\Language;

class LanguageObserver
{
    /**
     * Handle the Language "created" event.
     *
     * @param Language $language
     * @return void
     */
    public function created(Language $language)
    {
        //
    }

    /**
     * Handle the Language "updated" event.
     *
     * @param Language $language
     * @return void
     */
    public function updated(Language $language)
    {
        //
    }

    /**
     * Handle the Language "deleted" event.
     *
     * @param Language $language
     * @return void
     */
    public function deleted(Language $language)
    {
        //
    }

    /**
     * Handle the Language "restored" event.
     *
     * @param Language $language
     * @return void
     */
    public function restored(Language $language)
    {
        //
    }

    /**
     * Handle the Language "force deleted" event.
     *
     * @param Language $language
     * @return void
     */
    public function forceDeleted(Language $language)
    {
        //
    }
}
