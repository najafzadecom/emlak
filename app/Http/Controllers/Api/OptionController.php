<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\Option;
use App\Http\Requests\StoreOptionRequest;
use App\Http\Requests\UpdateOptionRequest;
use Illuminate\Http\JsonResponse;

class OptionController extends ApiController
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
     * @param StoreOptionRequest $request
     * @return JsonResponse
     */
    public function store(StoreOptionRequest $request): JsonResponse
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Option $option
     * @return JsonResponse
     */
    public function show(Option $option): JsonResponse
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateOptionRequest $request
     * @param Option $option
     * @return JsonResponse
     */
    public function update(UpdateOptionRequest $request, Option $option): JsonResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Option $option
     * @return JsonResponse
     */
    public function destroy(Option $option): JsonResponse
    {
        if($option->delete()) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
