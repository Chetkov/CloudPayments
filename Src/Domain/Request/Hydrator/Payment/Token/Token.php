<?php

namespace CloudPayments\Domain\Request\Hydrator\Payment\Token;

use CloudPayments\Domain\Request\Payment\Token\Token as Request;

/**
 * Class Token
 * @package CloudPayments\Domain\Request\Hydrator\Payment\Token
 */
class Token
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
            'AccountId' => $request->getAccountId(),
            'Token' => $request->getToken(),
        ];

        if ($request->getInvoiceId()) {
            $result['InvoiceId'] = $request->getInvoiceId();
        }

        if ($request->getDescription()) {
            $result['Description'] = $request->getDescription();
        }

        if ($request->getIpAddress()) {
            $result['IpAddress'] = $request->getIpAddress();
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
