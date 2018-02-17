<?php

namespace CloudPayments\Domain\Request\Hydrator\Payment;

use CloudPayments\Domain\Request\Payment\Refund as Request;

/**
 * Class Refund
 * @package CloudPayments\Domain\Request\Hydrator\Payment
 */
class Refund
{
    /**
     * @param Request $request
     *
     * @return array
     */
    public static function extract(Request $request): array
    {
        $result = [
            'TransactionId' => $request->getTransactionId(),
            'Amount' => $request->getAmount(),
        ];

        if ($request->getJsonData()) {
            $result['JsonData'] = json_encode($request->getJsonData());
        }

        return $result;
    }
}
