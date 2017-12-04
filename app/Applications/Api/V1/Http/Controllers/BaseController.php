<?php

namespace App\Applications\Api\V1\Http\Controllers;

use App\Core\Http\Controllers\Controller;
use App\Support\Response\Response;

class BaseController extends Controller
{
    /**
     * @var Response
     */
    protected $response;

    /**
     * BaseController constructor.
     *
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        $this->response = $response;
    }
}
