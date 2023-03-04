<?php

namespace Anystack\Sdk\Requests\Product;

use Anystack\Sdk\Objects\Product;
use Saloon\Contracts\Response;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetProductRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/products/'.$this->id;
    }

    public function __construct(protected string $id)
    {
    }

    public function createDtoFromResponse(Response $response): Product
    {
        return Product::fromResponse($response);
    }
}
