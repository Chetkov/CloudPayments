<?php

namespace CloudPayments\Domain\Request\Hydrator\Subscription;

use CloudPayments\Domain\Request\Subscription\Find as Request;

/**
 * Class Find
 * @package CloudPayments\Domain\Request\Hydrator\Subscription
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
