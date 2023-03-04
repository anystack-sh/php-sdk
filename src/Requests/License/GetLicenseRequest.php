<?php

namespace Anystack\Sdk\Requests\License;

use Anystack\Sdk\Objects\License;
use Saloon\Contracts\Response;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetLicenseRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/products/'.$this->productId.'/licenses/'.$this->licenseId;
    }

    public function __construct(protected string $productId, protected string $licenseId)
    {
    }

    public function createDtoFromResponse(Response $response): License
    {
        return License::fromResponse($response);
    }
}
