<?php

namespace Anystack\Sdk\Objects;

use Saloon\Contracts\DataObjects\WithResponse;
use Saloon\Contracts\Response;
use Saloon\Traits\Responses\HasResponse;

class Asset implements WithResponse
{
    use HasResponse;

    public function __construct(
        public string $id,
        public int $size,
        public string $contentType,
        public string $filename,
        public string $url,
        public string $checksum,
        public string $createdAt,
        public string $updatedAt,
        public array $links,
        public ?string $platform = null,
        public ?string $platformArch = null,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            id: $data['id'],
            size: $data['size'],
            contentType: $data['content_type'],
            filename: $data['filename'],
            url: $data['url'],
            checksum: $data['checksum'],
            createdAt: $data['created_at'],
            updatedAt: $data['updated_at'],
            links: $data['links'],
            platform: $data['platform'],
            platformArch: $data['platform_arch'],
        );
    }

    public static function fromResponse(Response $response): self
    {
        return static::fromArray($response->json('data'));
    }
}
