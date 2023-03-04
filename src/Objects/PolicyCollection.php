<?php

namespace Anystack\Sdk\Objects;

use Saloon\Contracts\Response;

class PolicyCollection
{
    public function __construct(public array $items = [])
    {
    }

    public static function fromResponse(Response $response): self
    {
        return new static(
            array_map(function ($release) {
                return Policy::fromArray($release);
            }, $response->json('data'))
        );
    }
}
