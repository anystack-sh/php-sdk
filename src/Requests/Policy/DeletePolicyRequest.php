<?php

namespace Anystack\Sdk\Requests\Policy;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeletePolicyRequest extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return '/products/'.$this->productId.'/policies/'.$this->policyId;
    }

    public function __construct(protected string $productId, protected string $policyId)
    {
    }
}
