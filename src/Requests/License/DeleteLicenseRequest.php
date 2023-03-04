<?php

namespace Anystack\Sdk\Requests\License;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteLicenseRequest extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return '/products/'.$this->productId.'/licenses/'.$this->licenseId;
    }

    public function __construct(protected string $productId, protected string $licenseId)
    {
    }
}
