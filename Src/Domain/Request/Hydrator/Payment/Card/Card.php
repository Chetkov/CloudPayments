<?php

namespace CloudPayments\Domain\Request\Hydrator\Payment\Card;

use CloudPayments\Domain\Request\Payment\Card\Card as Request;

/**
 * Class Card
 * @package CloudPayments\Domain\Request\Hydrator\Payment\Card
 */
class Card
{
    /**
     * @param Request $request
     *
     * @return array
     */
    public static function extract(Request $request): array
    {
        $result = [
            'Amount' => $request->getAmount(),
            'Currency' => $request->getCurrency(),
            'IpAddress' => $request->getIpAddress(),
            'Name' => $request->getName(),
            'CardCryptogramPacket' => $request->getCardCryptogramPacket(),
        ];

        if ($request->getInvoiceId()) {
            $result['InvoiceId'] = $request->getInvoiceId();
        }

        if ($request->getDescription()) {
            $result['Description'] = $request->getDescription();
        }

        if ($request->getAccountId()) {
            $result['AccountId'] = $request->getAccountId();
        }

        if ($request->getEmail()) {
            $result['Email'] = $request->getEmail();
        }

        if ($request->getJsonData()) {
            $result['JsonData'] = json_encode($request->getJsonData());
        }

        return $result;
    }
}