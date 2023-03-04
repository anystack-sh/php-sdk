<?php

namespace Anystack\Sdk\Requests\Activation;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetActivationsRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/products/'.$this->productId.'/licenses/'.$this->licenseId.'/activations';
    }

    public function __construct(protected string $productId, protected string $licenseId, protected int $page = 1)
    {
    }

    protected function defaultQuery(): array
    {
        return [
            'page' => $this->page,
        ];
    }
}
