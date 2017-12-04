<?php

namespace App\Support\Response;

use App\Support\Transformers\TransformableContract;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Response as HttpResponse;

class Response
{
    /**
     * @var HttpResponse
     */
    private $response;

    /**
     * Response constructor.
     *
     * @param HttpResponse $response
     */
    public function __construct(HttpResponse $response)
    {
        $this->response = $response;
    }

    /**
     * Return a collection of objects.
     *
     * @param $collection
     * @param $transformableObject
     * @return HttpResponse
     */
    public function collection($collection, $transformableObject)
    {
        if (is_null($collection)) {
            return $this->success([]);
        }

        // Transform LengthAwarePaginator...
        if ($collection instanceof LengthAwarePaginator) {
            return $this->success(
                $this->mapCollection(collect($collection->items()), $transformableObject),
                $collection->total(),
                $collection->currentPage(),
                $collection->url($collection->currentPage()),
                $collection->nextPageUrl(),
                $collection->previousPageUrl(),
                $collection->lastPage(),
                $collection->perPage()
            );
        }

        $collection = $this->mapCollection($collection, $transformableObject);

        return $this->success($collection, count($collection));
    }

    /**
     * Transform collection.
     *
     * @param $collection
     * @param $transformableObject
     * @return mixed
     */
    private function mapCollection($collection, $transformableObject)
    {
        return $collection->map(function (Model $model) use ($transformableObject) {
            return $this->transform($model, $transformableObject);
        });
    }

    /**
     * Return a collection item.
     *
     * @param $collection
     * @param $transformableObject
     * @return HttpResponse
     */
    public function item($collection, $transformableObject)
    {
        if (is_null($collection)) {
           return $this->withError(404, 'ModelNotFound');
        }

        return $this->success($this->transform($collection, $transformableObject));
    }

    /**
     * @param $collection
     * @param TransformableContract $transformableObject
     * @return array
     */
    public function transform($collection, TransformableContract $transformableObject)
    {
        return $transformableObject->transform($collection);
    }

    /**
     * Response with success.
     *
     * @param $data
     * @param int $total
     * @param int $current_page
     * @param null $path
     * @param null $next_url
     * @param null $prev_url
     * @param int $last_page
     * @param int $per_page
     * @return HttpResponse
     */
    public function success(
        $data,
        $total = 0,
        $current_page = 1,
        $path = null,
        $next_url = null,
        $prev_url = null,
        $last_page = 1,
        $per_page = 15
    )
    {
        return $this
            ->response
            ->setStatusCode(HttpResponse::HTTP_OK, 'ok')
            ->header('content-type', 'application/json')
            ->setContent(json_encode([
                'total' => $total,
                'current_page' => $current_page,
                'current_url' => $path,
                'next_url' => $next_url,
                'prev_url' => $prev_url,
                'last_page' => $last_page,
                'per_page' => $per_page,
                'data' => $data
            ]));
    }

    /**
     * @param int $statusCode
     * @param $data
     * @return HttpResponse
     */
    public function error($statusCode = HttpResponse::HTTP_INTERNAL_SERVER_ERROR, $data)
    {
        return $this->withError($statusCode, $data);
    }

    /**
     * Response with error.
     *
     * @param int $statusCode
     * @param $responseData
     * @return HttpResponse
     * @throws ResponseException
     */
    private function withError($statusCode = HttpResponse::HTTP_INTERNAL_SERVER_ERROR, $responseData)
    {
        if ($statusCode < 400 || $statusCode > 511) {
            throw new ResponseException("Status code {$statusCode} not represents a error status code.");
        }

        $content = json_encode([
            'code' => $statusCode,
            'reason' => is_array($responseData) ? json_encode($responseData) : $responseData
        ]);

        $this
            ->response
            ->setStatusCode($statusCode, HttpResponse::$statusTexts[$statusCode])
            ->header('content-type', 'application/json');

        return $this->response->setContent($content);
    }
}
