<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Validators\ValidatorTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    use ValidatorTrait;

    /**
     * Client request
     *
     * @var Request
     */
    protected $request;

    /**
     * Response status code
     *
     * @var int
     */
    protected $statusCode;

    /**
     * Response body
     *
     * @var array
     */
    protected $body;

    /**
     * Model collection
     *
     * @var
     */
    protected $resourceCollection;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Response output
     *
     * @return JsonResponse
     */
    public function respond(): JsonResponse
    {
        return \response()->json(
            $this->body,
            $this->getStatusCode()
        );
    }

    /**
     * Returns response status code
     *
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode ?? Response::HTTP_OK;
    }

    /**
     * Set response status code
     *
     * @param int $statusCode
     *
     * @return self
     */
    public function setStatusCode(int $statusCode): self
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * Append data to response body
     *
     * @param string $key
     * @param        $data
     * @param bool $mainObject
     * @return ApiController
     */
    public function appendBody(string $key, $data, bool $mainObject): self
    {
        $data = is_null($this->resourceCollection) ? $data : $this->resourceCollection::make($data);

        if ($mainObject) {
            $this->body[$key] = $data;

            return $this;
        }

        $this->body['data'][$key] = $data;

        return $this;
    }

    /**
     *
     * Append error message to response body
     *
     * @param string $message
     * @param integer $errorCode
     *
     * @return ApiController
     */
    public function appendError(string $message, int $errorCode = Response::HTTP_UNPROCESSABLE_ENTITY): self
    {
        return $this
            ->appendBody('error', $message)
            ->setStatusCode($errorCode);
    }

    /**
     * Get validation error message
     *
     * @return self
     */
    public function appendValidationError(): self
    {
        $this
            ->appendBody('success', false)
            ->appendBody('message', $this->message->first())
            ->setStatusCode(\Symfony\Component\HttpFoundation\Response::HTTP_UNPROCESSABLE_ENTITY);

        return $this;
    }

    /**
     * Set validator
     *
     * @return self
     */
    public function setValidator($validator)
    {
        $this->validator = $validator;

        return $this;
    }

    /**
     * Set resource collection
     *
     * @return self
     */
    public function setResourceCollection($resourceCollection)
    {
        $this->resourceCollection = $resourceCollection;

        return $this;
    }

    /**
     * Response ready success message template
     *
     * @param $message
     * @param string $key
     * @return JsonResponse
     */
    public function respondSuccessMessage($message, $key = 'message'): JsonResponse
    {
        return $this
            ->appendBody('success', true)
            ->appendBody($key, $message)
            ->setStatusCode(Response::HTTP_OK)
            ->respond();
    }

    /**
     * Response ready error message template
     *
     * @param $message
     * @return JsonResponse
     */
    public function respondErrorMessage($message): JsonResponse
    {
        return $this
            ->appendBody('success', false)
            ->appendBody('message', $message)
            ->setStatusCode(Response::HTTP_UNPROCESSABLE_ENTITY)
            ->respond();
    }
}
