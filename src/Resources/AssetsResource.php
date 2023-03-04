<?php

namespace Anystack\Sdk\Resources;

use Anystack\Sdk\Requests\Asset\DeleteAssetRequest;
use Anystack\Sdk\Requests\Asset\GetAssetRequest;
use Anystack\Sdk\Requests\Asset\GetAssetsRequest;
use Saloon\Contracts\Response;

class AssetsResource extends Resource
{
    public function all(int $page = 1): Response
    {
        return $this->connector->send(new GetAssetsRequest($this->productId, $this->releaseId, $page));
    }

    public function get(string $assetId): Response
    {
        return $this->connector->send(new GetAssetRequest($this->productId, $this->releaseId, $assetId));
    }

    public function delete(string $assetId): Response
    {
        return $this->connector->send(new DeleteAssetRequest($this->productId, $this->releaseId, $assetId));
    }
}
