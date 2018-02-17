<?php

namespace CloudPayments\Domain\Request\Hydrator\Payment;

use CloudPayments\Domain\Request\Payment\Confirm as Request;

/**
 * Class Confirm
 * @package CloudPayments\Domain\Request\Hydrator\Payment
 */
class Confirm
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
