<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\PromoCode;
use App\Http\Requests\StorePromoCodeRequest;
use App\Http\Requests\UpdatePromoCodeRequest;
use Illuminate\Http\JsonResponse;

class PromoCodeController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePromoCodeRequest $request
     * @return JsonResponse
     */
    public function store(StorePromoCodeRequest $request): JsonResponse
    {
        $data = PromoCode::create($request->validated());
        return $this
            ->appendBody('data', $data)
            ->respondSuccessMessage('Data successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param PromoCode $promoCode
     * @return JsonResponse
     */
    public function show(PromoCode $promoCode): JsonResponse
    {
        return $this
            ->appendBody('data', $promoCode)
            ->respondSuccessMessage('Data successfully returned');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePromoCodeRequest $request
     * @param PromoCode $promoCode
     * @return JsonResponse
     */
    public function update(UpdatePromoCodeRequest $request, PromoCode $promoCode): JsonResponse
    {
        $promoCode->update($request->validated());
        return $this
            ->appendBody('data', $promoCode)
            ->respondSuccessMessage('Data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param PromoCode $promoCode
     * @return JsonResponse
     */
    public function destroy(PromoCode $promoCode): JsonResponse
    {
        if($promoCode->delete()) {

            return $this->respondSuccessMessage('Data successfully deleted');
        }

        return $this->respondSuccessMessage('Unknown error');
    }
}
