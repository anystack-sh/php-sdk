<?php

namespace Anystack\Sdk\Requests\License;

use Anystack\Sdk\Objects\LicenseCollection;
use Saloon\Contracts\Response;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetLicensesRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/products/'.$this->productId.'/licenses';
    }

    public function __construct(protected string $productId, protected int $page = 1)
    {
    }

    protected function defaultQuery(): array
    {
        return [
            'page' => $this->page,
        ];
    }

    public function createDtoFromResponse(Response $response): LicenseCollection
    {
        return LicenseCollection::fromResponse($response);
    }
}
