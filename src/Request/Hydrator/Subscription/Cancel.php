<?php

namespace Chetkov\CloudPayments\Request\Hydrator\Subscription;

use Chetkov\CloudPayments\Request\Subscription\Cancel as Request;

/**
 * Class Cancel
 * @package Chetkov\CloudPayments\Request\Hydrator\Subscription
 */
class Cancel
{
    /**
     * @param Request $request
     *
     * @return array
     */
    public static function extract(Request $request): array
    {
        return [
            'Id' => $request->getId(),
        ];
    }
}
