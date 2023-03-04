<?php

namespace Anystack\Sdk\Resources;

use Anystack\Sdk\Requests\Policy\DeletePolicyRequest;
use Anystack\Sdk\Requests\Policy\GetPolicyRequest;
use Anystack\Sdk\Requests\Policy\UpdatePolicyRequest;
use Saloon\Contracts\Response;

class PolicyResource extends Resource
{
    public function get(): Response
    {
        return $this->connector->send(new GetPolicyRequest($this->productId, $this->policyId));
    }

    public function update(array $parameters): Response
    {
        return $this->connector->send(new UpdatePolicyRequest($this->productId, $this->policyId, $parameters));
    }

    public function delete(): Response
    {
        return $this->connector->send(new DeletePolicyRequest($this->productId, $this->policyId));
    }
}
