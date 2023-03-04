<?php

namespace Anystack\Sdk\Requests\Release;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteReleaseRequest extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return '/products/'.$this->productId.'/releases/'.$this->releaseId;
    }

    public function __construct(protected string $productId, protected string $releaseId)
    {
    }
}
