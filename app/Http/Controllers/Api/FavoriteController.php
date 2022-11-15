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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Favorite $favorite
     * @return JsonResponse
     */
    public function show(Favorite $favorite): JsonResponse
    {
        //
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
        //
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
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
