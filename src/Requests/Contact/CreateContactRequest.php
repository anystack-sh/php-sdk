<?php

namespace Anystack\Sdk\Requests\Contact;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateContactRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/contacts';
    }

    public function __construct(protected array $params)
    {
    }

    protected function defaultBody(): array
    {
        return $this->params;
    }
}
