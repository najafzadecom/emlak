<?php

namespace App\Observers;

use App\Models\PromoCode;

class PromoCodeObserver
{
    /**
     * Handle the PromoCode "created" event.
     *
     * @param PromoCode $promoCode
     * @return void
     */
    public function created(PromoCode $promoCode)
    {
        //
    }

    /**
     * Handle the PromoCode "updated" event.
     *
     * @param PromoCode $promoCode
     * @return void
     */
    public function updated(PromoCode $promoCode)
    {
        //
    }

    /**
     * Handle the PromoCode "deleted" event.
     *
     * @param PromoCode $promoCode
     * @return void
     */
    public function deleted(PromoCode $promoCode)
    {
        //
    }

    /**
     * Handle the PromoCode "restored" event.
     *
     * @param PromoCode $promoCode
     * @return void
     */
    public function restored(PromoCode $promoCode)
    {
        //
    }

    /**
     * Handle the PromoCode "force deleted" event.
     *
     * @param PromoCode $promoCode
     * @return void
     */
    public function forceDeleted(PromoCode $promoCode)
    {
        //
    }
}
