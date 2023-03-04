<?php

namespace Anystack\Sdk\Objects;

use Saloon\Contracts\Response;

class ReleaseCollection
{
    public function __construct(public array $items = [])
    {
    }

    public static function fromResponse(Response $response): self
    {
        return new static(
            array_map(function ($release) {
                return Release::fromArray($release);
            }, $response->json('data'))
        );
    }
}
