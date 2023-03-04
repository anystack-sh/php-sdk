<?php

namespace Anystack\Sdk\Requests\Activation;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteActivationRequest extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return '/products/'.$this->productId.'/licenses/'.$this->licenseId.'/activations/'.$this->activationId;
    }

    public function __construct(protected string $productId, protected string $licenseId, protected string $activationId)
    {
    }
}
