<?php

namespace Anystack\Sdk\Requests\Asset;

use Anystack\Sdk\Objects\Asset;
use Saloon\Contracts\Response;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetAssetRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/products/'.$this->productId.'/releases/'.$this->releaseId.'/assets/'.$this->assetId;
    }

    public function __construct(protected string $productId, protected string $releaseId, protected string $assetId, protected int $page = 1)
    {
    }

    public function createDtoFromResponse(Response $response): Asset
    {
        return Asset::fromResponse($response);
    }
}
