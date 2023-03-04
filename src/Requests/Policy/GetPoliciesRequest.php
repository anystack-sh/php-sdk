<?php

namespace Anystack\Sdk\Requests\Policy;

use Anystack\Sdk\Objects\PolicyCollection;
use Saloon\Contracts\Response;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetPoliciesRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/products/'.$this->productId.'/policies';
    }

    public function __construct(protected string $productId, protected int $page = 1)
    {
    }

    protected function defaultQuery(): array
    {
        return [
            'page' => $this->page,
        ];
    }

    public function createDtoFromResponse(Response $response): PolicyCollection
    {
        return PolicyCollection::fromResponse($response);
    }
}
