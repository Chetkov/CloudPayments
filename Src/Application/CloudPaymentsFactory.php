<?php

namespace CloudPayments\Application;

use CloudPayments\Domain\Config\Config;

/**
 * Class CloudPaymentsFactory
 * @package CloudPayments\Application
 */
class CloudPaymentsFactory
{
    /**
     * @param Config $config
     * @return CloudPayments
     */
    public static function create(Config $config): CloudPayments
    {
        return new CloudPayments($config);
    }
}
