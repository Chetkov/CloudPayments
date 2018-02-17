<?php

namespace CloudPayments\Domain\Request\ApplePay;

/**
 * Class StartSession
 * @package CloudPayments\Domain\Card\ApplePay
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
