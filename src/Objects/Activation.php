<?php

namespace Anystack\Sdk\Objects;

use Saloon\Contracts\DataObjects\WithResponse;
use Saloon\Contracts\Response;
use Saloon\Traits\Responses\HasResponse;

class Activation implements WithResponse
{
    use HasResponse;

    public function __construct(
        public string $id,
        public string $licenseId,
        public string $fingerprint,
        public string $createdAt,
        public string $updatedAt,
        public array $links,
        public ?string $name = null,
        public ?string $hostname = null,
        public ?string $ip = null,
        public ?string $platform = null,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            id: $data['id'],
            licenseId: $data['license_id'],
            fingerprint: $data['fingerprint'],
            createdAt: $data['created_at'],
            updatedAt: $data['updated_at'],
            links: $data['links'],
            name: $data['name'] ?? null,
            hostname: $data['hostname'] ?? null,
            ip: $data['ip'] ?? null,
            platform: $data['platform'] ?? null,
        );
    }

    public static function fromResponse(Response $response): self
    {
        return static::fromArray($response->json('data'));
    }
}
