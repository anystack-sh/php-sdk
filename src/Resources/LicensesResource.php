<?php

namespace Anystack\Sdk\Resources;

use Anystack\Sdk\Requests\License\ActivateLicenseRequest;
use Anystack\Sdk\Requests\License\DeleteLicenseRequest;
use Anystack\Sdk\Requests\License\GetLicenseRequest;
use Anystack\Sdk\Requests\License\GetLicensesRequest;
use Anystack\Sdk\Requests\License\UpdateLicenseRequest;
use Anystack\Sdk\Requests\License\ValidateLicenseRequest;
use Anystack\Sdk\Requests\Release\DeleteReleaseRequest;
use Anystack\Sdk\Requests\Release\GetReleaseRequest;
use Anystack\Sdk\Requests\Release\GetReleasesRequest;
use Anystack\Sdk\Requests\Release\UpdateReleaseRequest;
use Saloon\Contracts\Response;

class LicensesResource extends Resource
{
    public function all(int $page = 1): Response
    {
        return $this->connector->send(new GetLicensesRequest($this->productId, $page));
    }

    public function get(string $licenseId): Response
    {
        return $this->connector->send(new GetLicenseRequest($this->productId, $licenseId));
    }

    public function update(string $licenseId, array $parameters): Response
    {
        return $this->connector->send(new UpdateLicenseRequest($this->productId, $licenseId, $parameters));
    }

    public function delete(string $licenseId): Response
    {
        return $this->connector->send(new DeleteLicenseRequest($this->productId, $licenseId));
    }

    public function activate(array $parameters): Response
    {
        return $this->connector->send(new ActivateLicenseRequest($this->productId, $parameters));
    }

    public function validate(array $parameters): Response
    {
        return $this->connector->send(new ValidateLicenseRequest($this->productId, $parameters));
    }
}
