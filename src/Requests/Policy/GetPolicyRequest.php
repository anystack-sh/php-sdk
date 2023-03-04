<?php

namespace Anystack\Sdk\Requests\Policy;

use Anystack\Sdk\Objects\Policy;
use Saloon\Contracts\Response;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetPolicyRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/products/'.$this->productId.'/policies/'.$this->policyId;
    }

    public function __construct(protected string $productId, protected string $policyId)
    {
    }

    public function createDtoFromResponse(Response $response): Policy
    {
        return Policy::fromResponse($response);
    }
}
