<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\City;
use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;
use Illuminate\Http\JsonResponse;

class CityController extends ApiController
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
     * @param StoreCityRequest $request
     * @return JsonResponse
     */
    public function store(StoreCityRequest $request): JsonResponse
    {
        $data = City::create($request->validated());
        return $this
            ->appendBody('data', $data)
            ->respondSuccessMessage('Data successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param City $city
     * @return JsonResponse
     */
    public function show(City $city): JsonResponse
    {
        return $this
            ->appendBody('data', $city)
            ->respondSuccessMessage('Data successfully returned');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCityRequest $request
     * @param City $city
     * @return JsonResponse
     */
    public function update(UpdateCityRequest $request, City $city): JsonResponse
    {
        $city->update($request->validated());
        return $this
            ->appendBody('data', $city)
            ->respondSuccessMessage('Data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param City $city
     * @return JsonResponse
     */
    public function destroy(City $city): JsonResponse
    {
        if($city->delete()) {

            return $this->respondSuccessMessage('Data successfully deleted');
        }

        return $this->respondSuccessMessage('Unknown error');
    }
}
