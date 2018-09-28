<?php

namespace Chetkov\CloudPayments\Request\Hydrator\Payment;

use Chetkov\CloudPayments\Request\Payment\PaymentList as Request;

/**
 * Class PaymentList
 * @package Chetkov\CloudPayments\Request\Hydrator\Payment
 */
class PaymentList
{
    /**
     * @param Request $request
     *
     * @return array
     */
    public static function extract(Request $request): array
    {
        $result = [
            'Date' => $request->getDate()->format('Y-m-d'),
        ];

        if ($request->getTimeZone()) {
            $request['TimeZone'] = $request->getTimeZone();
        }

        return $result;
    }
}
