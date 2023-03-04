<?php

namespace Anystack\Sdk\Requests\Product;

use Anystack\Sdk\Objects\Product;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Response;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateProductRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/products';
    }

    public function __construct(protected array $params)
    {
    }

    protected function defaultBody(): array
    {
        return $this->params;
    }

    public function createDtoFromResponse(Response $response): Product
    {
        return Product::fromResponse($response);
    }
}
