<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\Banner;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use Illuminate\Http\JsonResponse;

class BannerController extends ApiController
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
     * @param StoreBannerRequest $request
     * @return JsonResponse
     */
    public function store(StoreBannerRequest $request): JsonResponse
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Banner $banner
     * @return JsonResponse
     */
    public function show(Banner $banner): JsonResponse
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBannerRequest $request
     * @param Banner $banner
     * @return JsonResponse
     */
    public function update(UpdateBannerRequest $request, Banner $banner): JsonResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Banner $banner
     * @return JsonResponse
     */
    public function destroy(Banner $banner): JsonResponse
    {
        if($banner->delete()) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
