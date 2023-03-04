<?php

namespace Anystack\Sdk\Resources;

use Anystack\Sdk\Requests\Contact\DeleteContactRequest;
use Anystack\Sdk\Requests\Contact\GetContactRequest;
use Anystack\Sdk\Requests\Contact\UpdateContactRequest;
use Saloon\Contracts\Response;

class ContactResource extends Resource
{
    public function get(): Response
    {
        return $this->connector->send(new GetContactRequest($this->contactId));
    }

    public function update(array $parameters): Response
    {
        return $this->connector->send(new UpdateContactRequest($this->contactId, $parameters));
    }

    public function delete(): Response
    {
        return $this->connector->send(new DeleteContactRequest($this->contactId));
    }
}
