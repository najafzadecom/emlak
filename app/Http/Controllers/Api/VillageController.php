<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\Village;
use App\Http\Requests\StoreVillageRequest;
use App\Http\Requests\UpdateVillageRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class VillageController extends ApiController
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
     * @param StoreVillageRequest $request
     * @return JsonResponse
     */
    public function store(StoreVillageRequest $request): JsonResponse
    {
        $data = Village::create($request->validated());
        return $this
            ->appendBody('data', $data)
            ->respondSuccessMessage('Data successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param Village $village
     * @return JsonResponse
     */
    public function show(Village $village): JsonResponse
    {
        return $this
            ->appendBody('data', $village)
            ->respondSuccessMessage('Data successfully returned');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateVillageRequest $request
     * @param Village $village
     * @return JsonResponse
     */
    public function update(UpdateVillageRequest $request, Village $village): JsonResponse
    {
        $village->update($request->validated());
        return $this
            ->appendBody('data', $village)
            ->respondSuccessMessage('Data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Village $village
     * @return JsonResponse
     */
    public function destroy(Village $village): JsonResponse
    {
        if($village->delete()) {

            return $this->respondSuccessMessage('Data successfully deleted');
        }

        return $this->respondSuccessMessage('Unknown error');
    }
}
