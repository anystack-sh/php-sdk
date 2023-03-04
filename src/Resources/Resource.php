<?php

namespace Anystack\Sdk\Resources;

use Saloon\Contracts\Connector;

class Resource
{
    public function __construct(
        protected Connector $connector,
        protected ?string $productId = null,
        protected ?string $contactId = null,
        protected ?string $releaseId = null,
        protected ?string $assetId = null,
        protected ?string $policyId = null,
        protected ?string $licenseId = null,
    ) {
        //
    }
}
