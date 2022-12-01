<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\Favorite;
use App\Http\Requests\StoreFavoriteRequest;
use App\Http\Requests\UpdateFavoriteRequest;
use Illuminate\Http\JsonResponse;

class FavoriteController extends ApiController
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
     * @param StoreFavoriteRequest $request
     * @return JsonResponse
     */
    public function store(StoreFavoriteRequest $request): JsonResponse
    {
        $data = Favorite::create($request->validated());
        return $this
            ->appendBody('data', $data)
            ->respondSuccessMessage('Data successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param Favorite $favorite
     * @return JsonResponse
     */
    public function show(Favorite $favorite): JsonResponse
    {
        return $this
            ->appendBody('data', $favorite)
            ->respondSuccessMessage('Data successfully returned');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateFavoriteRequest $request
     * @param Favorite $favorite
     * @return JsonResponse
     */
    public function update(UpdateFavoriteRequest $request, Favorite $favorite): JsonResponse
    {
        $favorite->update($request->validated());
        return $this
            ->appendBody('data', $favorite)
            ->respondSuccessMessage('Data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Favorite $favorite
     * @return JsonResponse
     */
    public function destroy(Favorite $favorite): JsonResponse
    {
        if($favorite->delete()) {

            return $this->respondSuccessMessage('Data successfully deleted');
        }

        return $this->respondSuccessMessage('Unknown error');
    }
}
