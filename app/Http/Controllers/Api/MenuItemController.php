<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\MenuItem;
use App\Http\Requests\StoreMenuItemRequest;
use App\Http\Requests\UpdateMenuItemRequest;
use Illuminate\Http\JsonResponse;

class MenuItemController extends ApiController
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
     * @param StoreMenuItemRequest $request
     * @return JsonResponse
     */
    public function store(StoreMenuItemRequest $request): JsonResponse
    {
        $data = MenuItem::create($request->validated());
        return $this
            ->appendBody('data', $data)
            ->respondSuccessMessage('Data successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param MenuItem $menuItem
     * @return JsonResponse
     */
    public function show(MenuItem $menuItem): JsonResponse
    {
        return $this
        ->appendBody('data', $menuItem)
        ->respondSuccessMessage('Data successfully returned');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateMenuItemRequest $request
     * @param MenuItem $menuItem
     * @return JsonResponse
     */
    public function update(UpdateMenuItemRequest $request, MenuItem $menuItem): JsonResponse
    {
        $menuItem->update($request->validated());
        return $this
            ->appendBody('data', $menuItem)
            ->respondSuccessMessage('Data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param MenuItem $menuItem
     * @return JsonResponse
     */
    public function destroy(MenuItem $menuItem): JsonResponse
    {
        if($menuItem->delete()) {

            return $this->respondSuccessMessage('Data successfully deleted');
        }

        return $this->respondSuccessMessage('Unknown error');
    }
}
