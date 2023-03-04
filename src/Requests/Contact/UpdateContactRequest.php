<?php

namespace Anystack\Sdk\Requests\Contact;

use Anystack\Sdk\Objects\Contact;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Response;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class UpdateContactRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return '/contacts/'.$this->contactId;
    }

    public function __construct(protected string $contactId, protected array $parameters = [])
    {
    }

    protected function defaultBody(): array
    {
        return $this->parameters;
    }

    public function createDtoFromResponse(Response $response): Contact
    {
        return Contact::fromResponse($response);
    }
}
