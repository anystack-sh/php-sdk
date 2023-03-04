<?php

namespace Anystack\Sdk\Objects;

use Saloon\Contracts\Response;

class ContactCollection
{
    public function __construct(public array $items = [])
    {
    }

    public static function fromResponse(Response $response): self
    {
        return new static(
            array_map(function ($product) {
                return Contact::fromArray($product);
            }, $response->json('data'))
        );
    }
}
