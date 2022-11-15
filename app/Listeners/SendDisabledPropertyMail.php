<?php

namespace App\Listeners;

use App\Events\PropertyDisabled;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendDisabledPropertyMail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\PropertyDisabled  $event
     * @return void
     */
    public function handle(PropertyDisabled $event)
    {
        //
    }
}
