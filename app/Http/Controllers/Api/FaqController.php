<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\Faq;
use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use Illuminate\Http\JsonResponse;

class FaqController extends ApiController
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
     * @param StoreFaqRequest $request
     * @return JsonResponse
     */
    public function store(StoreFaqRequest $request): JsonResponse
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Faq $faq
     * @return JsonResponse
     */
    public function show(Faq $faq): JsonResponse
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateFaqRequest $request
     * @param Faq $faq
     * @return JsonResponse
     */
    public function update(UpdateFaqRequest $request, Faq $faq): JsonResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Faq $faq
     * @return JsonResponse
     */
    public function destroy(Faq $faq): JsonResponse
    {
        if($faq->delete()) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
