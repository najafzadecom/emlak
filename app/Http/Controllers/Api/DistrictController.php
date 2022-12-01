<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\District;
use App\Http\Requests\StoreDistrictRequest;
use App\Http\Requests\UpdateDistrictRequest;
use Illuminate\Http\JsonResponse;

class DistrictController extends ApiController
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
     * @param StoreDistrictRequest $request
     * @return JsonResponse
     */
    public function store(StoreDistrictRequest $request): JsonResponse
    {
        $data = District::create($request->validated());
        return $this
            ->appendBody('data', $data)
            ->respondSuccessMessage('Data successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param District $district
     * @return JsonResponse
     */
    public function show(District $district): JsonResponse
    {
        return $this
            ->appendBody('data', $district)
            ->respondSuccessMessage('Data successfully returned');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDistrictRequest $request
     * @param District $district
     * @return JsonResponse
     */
    public function update(UpdateDistrictRequest $request, District $district): JsonResponse
    {
        $district->update($request->validated());
        return $this
            ->appendBody('data', $district)
            ->respondSuccessMessage('Data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param District $district
     * @return JsonResponse
     */
    public function destroy(District $district): JsonResponse
    {
        if($district->delete()) {

            return $this->respondSuccessMessage('Data successfully deleted');
        }

        return $this->respondSuccessMessage('Unknown error');
    }
}
