<?php

namespace Anystack\Sdk\Requests\Asset;

use Anystack\Sdk\Objects\AssetCollection;
use Saloon\Contracts\Response;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetAssetsRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/products/'.$this->productId.'/releases/'.$this->releaseId.'/assets';
    }

    public function __construct(protected string $productId, protected string $releaseId, protected int $page = 1)
    {
    }

    protected function defaultQuery(): array
    {
        return [
            'page' => $this->page,
        ];
    }

    public function createDtoFromResponse(Response $response): AssetCollection
    {
        return AssetCollection::fromResponse($response);
    }
}
