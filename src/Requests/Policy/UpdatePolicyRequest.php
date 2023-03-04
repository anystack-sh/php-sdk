<?php

namespace Anystack\Sdk\Requests\Policy;

use Anystack\Sdk\Objects\Policy;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Response;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class UpdatePolicyRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return '/products/'.$this->productId.'/policies/'.$this->policyId;
    }

    public function __construct(protected string $productId, protected string $policyId, protected array $parameters = [])
    {
    }

    protected function defaultBody(): array
    {
        return $this->parameters;
    }

    public function createDtoFromResponse(Response $response): Policy
    {
        return Policy::fromResponse($response);
    }
}
