<?php

namespace Anystack\Sdk\Resources;

use Anystack\Sdk\Requests\Contact\CreateContactRequest;
use Anystack\Sdk\Requests\Contact\DeleteContactRequest;
use Anystack\Sdk\Requests\Contact\GetContactRequest;
use Anystack\Sdk\Requests\Contact\GetContactsRequest;
use Anystack\Sdk\Requests\Contact\UpdateContactRequest;
use Saloon\Contracts\Response;

class ContactsResource extends Resource
{
    public function all(int $page = 1): Response
    {
        return $this->connector->send(new GetContactsRequest($page));
    }

    public function get(string $productId): Response
    {
        return $this->connector->send(new GetContactRequest($productId));
    }

    public function create(array $parameters): Response
    {
        return $this->connector->send(new CreateContactRequest($parameters));
    }

    public function update(string $contactId, array $parameters): Response
    {
        return $this->connector->send(new UpdateContactRequest($contactId, $parameters));
    }

    public function delete(string $contactId): Response
    {
        return $this->connector->send(new DeleteContactRequest($contactId));
    }
}
