<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\Package;
use App\Http\Requests\StorePackageRequest;
use App\Http\Requests\UpdatePackageRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class PackageController extends ApiController
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
     * @param StorePackageRequest $request
     * @return JsonResponse
     */
    public function store(StorePackageRequest $request): JsonResponse
    {
        $data = Package::create($request->validated());
        return $this
            ->appendBody('data', $data)
            ->respondSuccessMessage('Data successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param Package $package
     * @return JsonResponse
     */
    public function show(Package $package): JsonResponse
    {
        return $this
            ->appendBody('data', $package)
            ->respondSuccessMessage('Data successfully returned');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePackageRequest $request
     * @param Package $package
     * @return JsonResponse
     */
    public function update(UpdatePackageRequest $request, Package $package): JsonResponse
    {
        $package->update($request->validated());
        return $this
            ->appendBody('data', $package)
            ->respondSuccessMessage('Data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Package $package
     * @return JsonResponse
     */
    public function destroy(Package $package): JsonResponse
    {
        if($package->delete()) {

            return $this->respondSuccessMessage('Data successfully deleted');
        }

        return $this->respondSuccessMessage('Unknown error');
    }
}
