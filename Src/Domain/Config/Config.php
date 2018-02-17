<?php

namespace CloudPayments\Domain\Config;

/**
 * Class Config
 * @package CloudPayments\Domain\Config
 */
class Config
{
    /**
     * @var string
     */
    protected $userName;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var string
     */
    protected $apiUrl;

    /**
     * Config constructor.
     * @param string $userName
     * @param string $password
     * @param string $apiUrl
     */
    public function __construct(
        string $userName,
        string $password,
        string $apiUrl = 'https://api.cloudpayments.ru'
    )
    {
        $this->userName = $userName;
        $this->password = $password;
        $this->apiUrl = $apiUrl;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getApiUrl(): string
    {
        return $this->apiUrl;
    }
}
