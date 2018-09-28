<?php

namespace Chetkov\CloudPayments\Request\ApplePay;

/**
 * Class StartSession
 * @package Chetkov\CloudPayments\Request\ApplePay
 */
class StartSession
{
    /**
     * @var string
     */
    protected $validationUrl;

    /**
     * StartSession constructor.
     *
     * @param string $validationUrl
     */
    public function __construct(string $validationUrl)
    {
        $this->validationUrl = $validationUrl;
    }

    /**
     * @return string
     */
    public function getValidationUrl(): string
    {
        return $this->validationUrl;
    }
}
