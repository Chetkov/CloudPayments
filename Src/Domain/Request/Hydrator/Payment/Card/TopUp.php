<?php

namespace CloudPayments\Domain\Request\Hydrator\Payment\Card;

use CloudPayments\Domain\Request\Payment\Card\TopUp as Request;

/**
 * Class TopUp
 * @package CloudPayments\Domain\Request\Hydrator\Payment\Card
 */
class TopUp
{
    /**
     * @param Request $request
     *
     * @return array
     */
    public static function extract(Request $request): array
    {
        return [
            'Token' => $request->getToken(),
            'Amount' => $request->getAmount(),
            'AccountId' => $request->getAccountId(),
            'Currency' => $request->getCurrency(),
        ];
    }
}
