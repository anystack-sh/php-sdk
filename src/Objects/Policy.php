<?php

namespace Anystack\Sdk\Objects;

use Saloon\Contracts\DataObjects\WithResponse;
use Saloon\Contracts\Response;
use Saloon\Traits\Responses\HasResponse;

class Policy implements WithResponse
{
    use HasResponse;

    public function __construct(
        public string $id,
        public string $name,
        public bool $requiresFingerprint,
        public string $createdAt,
        public string $updatedAt,
        public array $links,
        public ?int $duration = null,
        public ?int $maxUsage = null,
        public ?string $releaseConstraint = null,
        public ?string $expireConsequence = null,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            id: $data['id'],
            name: $data['name'],
            requiresFingerprint: $data['requires_fingerprint'],
            createdAt: $data['created_at'],
            updatedAt: $data['updated_at'],
            links: $data['links'],
            duration: $data['duration'],
            releaseConstraint: $data['release_constraint'],
            expireConsequence: $data['expire_consequence'],
        );
    }

    public static function fromResponse(Response $response): self
    {
        return static::fromArray($response->json('data'));
    }
}
