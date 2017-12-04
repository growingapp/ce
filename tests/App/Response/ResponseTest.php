<?php

namespace Tests\Unit\Response;

use App\Domains\Artists\ArtistModel;
use App\Domains\Artists\Transformers\ArtistTransformer;
use App\Support\Response\Response;
use Illuminate\Http\Response as IlluminateHttpResponse;
use Tests\TestCase;

class ResponseTest extends TestCase
{
    public function test_passing_collection_to_Response_and_return_200_status_code()
    {
        $data = factory(ArtistModel::class, 10)->make();
        $response = (new Response(resolve(IlluminateHttpResponse::class)));
        $response = $response->collection($data, new ArtistTransformer());

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function test_passing_null_to_collection_and_return_200_status_code()
    {
        $data = null;
        $response = (new Response(resolve(IlluminateHttpResponse::class)));
        $response = $response->collection($data, new ArtistTransformer());

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function test_passing_null_to_item_and_return_404_status_code()
    {
        $data = null;
        $response = (new Response(resolve(IlluminateHttpResponse::class)));
        $response = $response->item($data, new ArtistTransformer());

        $this->assertEquals(404, $response->getStatusCode());
    }

    public function test_passing_model_to_item_and_return_200_status_code()
    {
        $data = factory(ArtistModel::class, 1)->make();

        $response = (new Response(resolve(IlluminateHttpResponse::class)));
        $response = $response->item($data[0], new ArtistTransformer());

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function test_response_errors()
    {
        $responseObj = (new Response(resolve(IlluminateHttpResponse::class)));
        $response = $responseObj->error(\Illuminate\Http\Response::HTTP_NOT_FOUND, "We can't find resource.");
        $this->assertEquals(404, $response->getStatusCode());

        $response = $responseObj->error(\Illuminate\Http\Response::HTTP_INTERNAL_SERVER_ERROR, "Internal server error");
        $this->assertEquals(500, $response->getStatusCode());

        $response = $responseObj->error(\Illuminate\Http\Response::HTTP_FORBIDDEN, "Forbidden");
        $this->assertEquals(403, $response->getStatusCode());

        $response = $responseObj->error(\Illuminate\Http\Response::HTTP_BAD_REQUEST, "Bad request");
        $this->assertEquals(400, $response->getStatusCode());
    }

    /**
     * @expectedException \App\Support\Response\ResponseException
     */
    public function test_pass_200_code_to_error_and_expect_a_exception()
    {
        $responseObj = (new Response(resolve(IlluminateHttpResponse::class)));
        $responseObj->error(\Illuminate\Http\Response::HTTP_OK, "");
    }
}
