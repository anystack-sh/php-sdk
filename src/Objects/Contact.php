<?php

namespace Anystack\Sdk\Objects;

use Saloon\Contracts\DataObjects\WithResponse;
use Saloon\Contracts\Response;
use Saloon\Traits\Responses\HasResponse;

class Contact implements WithResponse
{
    use HasResponse;

    public function __construct(
        public string $id,
        public string $email,
        public string $createdAt,
        public string $updatedAt,
        public array $links,
        public ?string $lastName = null,
        public ?string $firstName = null,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            id: $data['id'],
            email: $data['email'],
            createdAt: $data['created_at'],
            updatedAt: $data['updated_at'],
            links: $data['links'],
            lastName: $data['last_name'],
            firstName: $data['first_name'],
        );
    }

    public static function fromResponse(Response $response): self
    {
        return static::fromArray($response->json('data'));
    }
}
