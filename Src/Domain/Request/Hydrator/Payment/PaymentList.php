<?php

namespace CloudPayments\Domain\Request\Hydrator\Payment;

use CloudPayments\Domain\Request\Payment\PaymentList as Request;

/**
 * Class PaymentList
 * @package CloudPayments\Domain\Request\Hydrator\Payment
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
