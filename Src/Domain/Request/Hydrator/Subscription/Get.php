<?php

namespace CloudPayments\Domain\Request\Hydrator\Subscription;

use CloudPayments\Domain\Request\Subscription\Get as Request;

/**
 * Class Get
 * @package CloudPayments\Domain\Request\Hydrator\Subscription
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
