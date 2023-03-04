<?php

namespace Anystack\Sdk\Requests\Product;

use Anystack\Sdk\Objects\ProductCollection;
use Saloon\Contracts\Response;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetProductsRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/products';
    }

    public function __construct(protected int $page = 1)
    {
    }

    protected function defaultQuery(): array
    {
        return [
            'page' => $this->page,
        ];
    }

    public function createDtoFromResponse(Response $response): ProductCollection
    {
        return ProductCollection::fromResponse($response);
    }
}
