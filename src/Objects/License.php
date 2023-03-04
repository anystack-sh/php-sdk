<?php

namespace Anystack\Sdk\Objects;

use Saloon\Contracts\DataObjects\WithResponse;
use Saloon\Contracts\Response;
use Saloon\Traits\Responses\HasResponse;

class License implements WithResponse
{
    use HasResponse;

    public function __construct(
        public string $id,
        public string $policyId,
        public string $key,
        public bool $suspended,
        public string $createdAt,
        public string $updatedAt,
        public array $links,
        public array $meta = [],
        public ?string $name = null,
        public ?int $activations = null,
        public ?int $maxActivations = null,
        public ?string $contactId = null,
        public ?string $expiresAt = null,
    ) {
    }

    public static function fromArray(array $data, array $meta = []): self
    {
        return new static(
            id: $data['id'],
            policyId: $data['policy_id'],
            key: $data['key'],
            suspended: $data['suspended'],
            createdAt: $data['created_at'],
            updatedAt: $data['updated_at'],
            links: $data['links'],
            meta: $meta,
            name: $data['name'],
            activations: $data['activations'],
            maxActivations: $data['max_activations'],
            contactId: $data['contact_id'],
            expiresAt: $data['expires_at'],
        );
    }

    public static function fromResponse(Response $response): self
    {
        return static::fromArray($response->json('data'), $response->json('meta'));
    }
}
