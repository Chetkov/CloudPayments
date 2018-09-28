<?php

namespace Chetkov\CloudPayments\Request\Hydrator\Payment\Card;

use Chetkov\CloudPayments\Request\Payment\Card\Post3Ds as Request;

/**
 * Class Post3Ds
 * @package Chetkov\CloudPayments\Request\Hydrator\Payment\Card
 */
class Post3Ds
{
    /**
     * @param Request $request
     *
     * @return array
     */
    public static function extract(Request $request): array
    {
        return [
            'TransactionId' => $request->getTransactionId(),
            'PaRes' => $request->getPaRes(),
        ];
    }
}
