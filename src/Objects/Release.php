<?php

namespace Anystack\Sdk\Objects;

use Saloon\Contracts\DataObjects\WithResponse;
use Saloon\Contracts\Response;
use Saloon\Traits\Responses\HasResponse;

class Release implements WithResponse
{
    use HasResponse;

    public function __construct(
        public string $id,
        public string $tag,
        public bool $draft,
        public string $description,
        public bool $prerelease,
        public string $createdAt,
        public string $updatedAt,
        public array $links,
        public ?string $publishedAt = null,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            id: $data['id'],
            tag: $data['tag'],
            draft: $data['draft'],
            description: $data['description'],
            prerelease: $data['prerelease'],
            createdAt: $data['created_at'],
            updatedAt: $data['updated_at'],
            links: $data['links'],
            publishedAt: $data['published_at'],
        );
    }

    public static function fromResponse(Response $response): self
    {
        return static::fromArray($response->json('data'));
    }
}
