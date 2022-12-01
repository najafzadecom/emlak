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
        $data = Banner::create($request->validated());
        return $this
            ->appendBody('data', $data)
            ->respondSuccessMessage('Data successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param Banner $banner
     * @return JsonResponse
     */
    public function show(Banner $banner): JsonResponse
    {
        return $this
            ->appendBody('data', $banner)
            ->respondSuccessMessage('Data successfully returned');
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
        $banner->update($request->validated());
        return $this
            ->appendBody('data', $banner)
            ->respondSuccessMessage('Data successfully updated');
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

            return $this->respondSuccessMessage('Data successfully deleted');
        }

        return $this->respondSuccessMessage('Unknown error');
    }
}
