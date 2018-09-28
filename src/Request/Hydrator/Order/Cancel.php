<?php

namespace Chetkov\CloudPayments\Request\Hydrator\Order;

use Chetkov\CloudPayments\Request\Order\Cancel as Request;

/**
 * Class Cancel
 * @package Chetkov\CloudPayments\Request\Hydrator\Order
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
