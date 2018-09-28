<?php

namespace Chetkov\CloudPayments\Request\Hydrator\Subscription;

use Chetkov\CloudPayments\Request\Subscription\Find as Request;

/**
 * Class Find
 * @package Chetkov\CloudPayments\Request\Hydrator\Subscription
 */
class Find
{
    /**
     * @param Request $request
     *
     * @return array
     */
    public static function extract(Request $request): array
    {
        return [
            'AccountId' => $request->getAccountId(),
        ];
    }
}
