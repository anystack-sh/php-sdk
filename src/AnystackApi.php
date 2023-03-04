<?php

namespace Anystack\Sdk;

use Anystack\Sdk\Exceptions\ValidationException;
use Anystack\Sdk\Resources\ContactResource;
use Anystack\Sdk\Resources\ContactsResource;
use Anystack\Sdk\Resources\ProductResource;
use Anystack\Sdk\Resources\ProductsResource;
use Saloon\Contracts\Response;
use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AlwaysThrowOnErrors;

class AnystackApi extends Connector
{
    use AlwaysThrowOnErrors;

    public function resolveBaseUrl(): string
    {
        return 'https://api.anystack.sh/v1';
    }

    public function __construct(protected string $apiToken)
    {
        $this->withTokenAuth($this->apiToken);
    }

    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
    }

    public function getRequestException(Response $response, ?\Throwable $senderException): ?\Throwable
    {
        return (new ValidationException($response->json('message')))->setErrors($response->json('errors'));
    }

    public function contacts(): ContactsResource
    {
        return new ContactsResource($this);
    }

    public function contact(string $id): ContactResource
    {
        return new ContactResource($this);
    }

    public function products(): ProductsResource
    {
        return new ProductsResource($this);
    }

    public function product(string $id): ProductResource
    {
        return new ProductResource(connector: $this, productId: $id);
    }
}
