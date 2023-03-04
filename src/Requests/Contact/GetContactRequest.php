<?php

namespace Anystack\Sdk\Requests\Contact;

use Anystack\Sdk\Objects\Contact;
use Saloon\Contracts\Response;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetContactRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/contacts/'.$this->contactId;
    }

    public function __construct(protected string $contactId)
    {
    }

    public function createDtoFromResponse(Response $response): Contact
    {
        return Contact::fromResponse($response);
    }
}
