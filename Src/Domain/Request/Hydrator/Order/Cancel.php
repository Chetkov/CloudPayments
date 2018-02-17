<?php

namespace CloudPayments\Domain\Request\Hydrator\Order;

use CloudPayments\Domain\Request\Order\Cancel as Request;

/**
 * Class Cancel
 * @package CloudPayments\Domain\Request\Hydrator\Order
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
