<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\Region;
use App\Http\Requests\StoreRegionRequest;
use App\Http\Requests\UpdateRegionRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class RegionController extends ApiController
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
     * @param StoreRegionRequest $request
     * @return JsonResponse
     */
    public function store(StoreRegionRequest $request): JsonResponse
    {
        $data = Region::create($request->validated());
        return $this
            ->appendBody('data', $data)
            ->respondSuccessMessage('Data successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param Region $region
     * @return JsonResponse
     */
    public function show(Region $region): JsonResponse
    {
        return $this
            ->appendBody('data', $region)
            ->respondSuccessMessage('Data successfully returned');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRegionRequest $request
     * @param Region $region
     * @return JsonResponse
     */
    public function update(UpdateRegionRequest $request, Region $region): JsonResponse
    {
        $region->update($request->validated());
        return $this
            ->appendBody('data', $region)
            ->respondSuccessMessage('Data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Region $region
     * @return JsonResponse
     */
    public function destroy(Region $region): JsonResponse
    {
        if($region->delete()) {

            return $this->respondSuccessMessage('Data successfully deleted');
        }

        return $this->respondSuccessMessage('Unknown error');
    }
}
