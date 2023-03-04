<?php

namespace Anystack\Sdk\Requests\Product;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteProductRequest extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return '/products/'.$this->id;
    }

    public function __construct(protected string $id)
    {
    }
}
