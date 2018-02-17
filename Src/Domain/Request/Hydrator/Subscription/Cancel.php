<?php

namespace CloudPayments\Domain\Request\Hydrator\Subscription;

use CloudPayments\Domain\Request\Subscription\Cancel as Request;

/**
 * Class Cancel
 * @package CloudPayments\Domain\Request\Hydrator\Subscription
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
