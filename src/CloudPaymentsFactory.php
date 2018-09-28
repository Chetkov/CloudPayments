<?php

namespace Chetkov\CloudPayments;

/**
 * Class CloudPaymentsFactory
 * @package Chetkov\CloudPayments
 */
class CloudPaymentsFactory
{
    /**
     * @var CLoudPayments[]
     */
    private static $instances = [];

    /**
     * @param Config $config
     * @param bool $useSingleton
     * @return CloudPayments
     */
    public static function create(Config $config, bool $useSingleton = true): CloudPayments
    {
        if (!$useSingleton) {
            return new CloudPayments($config);
        }

        $uniqueConfigKey = sha1($config->getApiUrl() . $config->getUserName() . $config->getPassword());
        if (!isset(self::$instances[$uniqueConfigKey])) {
            self::$instances[$uniqueConfigKey] = new CloudPayments($config);
        }
        return self::$instances[$uniqueConfigKey];
    }
}
