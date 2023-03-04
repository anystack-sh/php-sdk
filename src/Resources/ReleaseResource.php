<?php

namespace Anystack\Sdk\Resources;

use Anystack\Sdk\Requests\Release\DeleteReleaseRequest;
use Anystack\Sdk\Requests\Release\GetReleaseRequest;
use Anystack\Sdk\Requests\Release\UpdateReleaseRequest;
use Saloon\Contracts\Response;

class ReleaseResource extends Resource
{
    public function get(): Response
    {
        return $this->connector->send(new GetReleaseRequest($this->productId, $this->releaseId));
    }

    public function update(array $parameters): Response
    {
        return $this->connector->send(new UpdateReleaseRequest($this->productId, $this->releaseId, $parameters));
    }

    public function delete(): Response
    {
        return $this->connector->send(new DeleteReleaseRequest($this->productId, $this->releaseId));
    }

    public function asset($assetId): AssetResource
    {
        return new AssetResource(
            connector: $this->connector,
            productId: $this->productId,
            releaseId: $this->releaseId,
            assetId: $assetId,
        );
    }

    public function assets(): AssetsResource
    {
        return new AssetsResource(
            connector: $this->connector,
            productId: $this->productId,
            releaseId: $this->releaseId
        );
    }
}
