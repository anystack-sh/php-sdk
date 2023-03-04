<?php

namespace Anystack\Sdk\Requests\Release;

use Anystack\Sdk\Objects\ReleaseCollection;
use Saloon\Contracts\Response;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetReleasesRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/products/'.$this->productId.'/releases';
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

    public function createDtoFromResponse(Response $response): ReleaseCollection
    {
        return ReleaseCollection::fromResponse($response);
    }
}
