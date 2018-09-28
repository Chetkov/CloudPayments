<?php

namespace Chetkov\CloudPayments\Request\Hydrator\Payment\Card;

use Chetkov\CloudPayments\Request\Payment\Card\TopUp as Request;

/**
 * Class TopUp
 * @package Chetkov\CloudPayments\Request\Hydrator\Payment\Card
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
