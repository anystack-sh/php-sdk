<?php

namespace Anystack\Sdk\Resources;

use Anystack\Sdk\Requests\Asset\DeleteAssetRequest;
use Anystack\Sdk\Requests\Asset\GetAssetRequest;
use Saloon\Contracts\Response;

class AssetResource extends Resource
{
    public function get(): Response
    {
        return $this->connector->send(new GetAssetRequest($this->productId, $this->releaseId, $this->assetId));
    }

    public function delete(): Response
    {
        return $this->connector->send(new DeleteAssetRequest($this->productId, $this->releaseId, $this->assetId));
    }
}
