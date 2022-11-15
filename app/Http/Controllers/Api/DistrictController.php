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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param District $district
     * @return JsonResponse
     */
    public function show(District $district): JsonResponse
    {
        //
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
        //
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
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
