<?php

namespace Anystack\Sdk\Requests\Asset;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteAssetRequest extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return '/products/'.$this->productId.'/releases/'.$this->releaseId.'/assets/'.$this->assetId;
    }

    public function __construct(protected string $productId, protected string $releaseId, protected string $assetId)
    {
    }
}
