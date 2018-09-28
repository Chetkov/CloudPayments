<?php

namespace Chetkov\CloudPayments;

use Chetkov\CloudPayments\CloudPayments;
use Chetkov\CloudPayments\Config;

/**
 * Class CloudPaymentsFactory
 * @package Chetkov\CloudPayments
 */
class CloudPaymentsFactory
{
    /**
     * @param \Chetkov\CloudPayments\Config $config
     * @return CloudPayments
     */
    public static function create(\Chetkov\CloudPayments\Config $config): CloudPayments
    {
        return new CloudPayments($config);
    }
}
