<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\Compare;
use App\Http\Requests\StoreCompareRequest;
use App\Http\Requests\UpdateCompareRequest;
use Illuminate\Http\JsonResponse;

class CompareController extends ApiController
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
     * @param StoreCompareRequest $request
     * @return JsonResponse
     */
    public function store(StoreCompareRequest $request): JsonResponse
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Compare $compare
     * @return JsonResponse
     */
    public function show(Compare $compare): JsonResponse
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCompareRequest $request
     * @param Compare $compare
     * @return JsonResponse
     */
    public function update(UpdateCompareRequest $request, Compare $compare): JsonResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Compare $compare
     * @return JsonResponse
     */
    public function destroy(Compare $compare): JsonResponse
    {
        if($compare->delete()) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
