<?php

namespace Anystack\Sdk\Requests\License;

use Anystack\Sdk\Objects\Activation;
use Anystack\Sdk\Objects\License;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Response;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class ActivateLicenseRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/products/'.$this->productId.'/licenses/activate-key';
    }

    public function __construct(protected string $productId, protected array $parameters = [])
    {
    }

    protected function defaultBody(): array
    {
        return $this->parameters;
    }

    public function createDtoFromResponse(Response $response): Activation
    {
        return Activation::fromResponse($response);
    }
}
