<?php

namespace Anystack\Sdk\Requests\Activation;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class UpdateActivationRequest extends Request
{
    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return '/products/'.$this->productId.'/licenses/'.$this->licenseId.'/activations/'.$this->activationId;
    }

    public function __construct(protected string $productId, protected string $licenseId, protected string $activationId, protected array $parameters = [])
    {
    }

    protected function defaultBody(): array
    {
        return $this->parameters;
    }
}
