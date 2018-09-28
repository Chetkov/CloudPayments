<?php

namespace Chetkov\CloudPayments\Request\Hydrator\Subscription;

use Chetkov\CloudPayments\Request\Subscription\Get as Request;

/**
 * Class Get
 * @package Chetkov\CloudPayments\Request\Hydrator\Subscription
 */
class Get
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
