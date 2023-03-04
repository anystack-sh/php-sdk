<?php

namespace Anystack\Sdk\Requests\Release;

use Anystack\Sdk\Objects\Release;
use Saloon\Contracts\Response;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetReleaseRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/products/'.$this->productId.'/releases/'.$this->releaseId;
    }

    public function __construct(protected string $productId, protected string $releaseId)
    {
    }

    public function createDtoFromResponse(Response $response): Release
    {
        return Release::fromResponse($response);
    }
}
