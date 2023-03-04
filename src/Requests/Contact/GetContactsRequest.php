<?php

namespace Anystack\Sdk\Requests\Contact;

use Anystack\Sdk\Objects\ContactCollection;
use Saloon\Contracts\Response;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetContactsRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/contacts';
    }

    public function __construct(protected int $page = 1)
    {
    }

    protected function defaultQuery(): array
    {
        return [
            'page' => $this->page,
        ];
    }

    public function createDtoFromResponse(Response $response): ContactCollection
    {
        return ContactCollection::fromResponse($response);
    }
}
