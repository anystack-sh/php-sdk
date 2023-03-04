<?php

namespace Anystack\Sdk\Requests\Contact;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteContactRequest extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return '/contacts/'.$this->contactId;
    }

    public function __construct(protected string $contactId)
    {
    }
}
