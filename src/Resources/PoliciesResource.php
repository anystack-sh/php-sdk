<?php

namespace Anystack\Sdk\Resources;

use Anystack\Sdk\Requests\Policy\GetPoliciesRequest;
use Anystack\Sdk\Requests\Policy\GetPolicyRequest;
use Saloon\Contracts\Response;

class PoliciesResource extends Resource
{
    public function all(int $page = 1): Response
    {
        return $this->connector->send(new GetPoliciesRequest($this->productId, $page));
    }

    public function get(string $policyId): Response
    {
        return $this->connector->send(new GetPolicyRequest($this->productId, $policyId));
    }
}
