<?php

namespace Chetkov\CloudPayments\Request\Hydrator\Order;

use Chetkov\CloudPayments\Request\Order\Create as Request;

/**
 * Class Create
 * @package Chetkov\CloudPayments\Request\Hydrator\Order
 */
class Create
{
    /**
     * @param Request $request
     *
     * @return array
     */
    public static function extract(Request $request): array
    {
        $result = [
            'amount' => $request->getAmount(),
            'currency' => $request->getCurrency(),
            'description' => $request->getDescription(),
        ];

        if ($request->getAmount()) {
            $result['amount'] = $request->getAmount();
        }

        if ($request->getCurrency()) {
            $result['currency'] = $request->getCurrency();
        }

        if ($request->getDescription()) {
            $result['description'] = $request->getDescription();
        }

        if ($request->getEmail()) {
            $result['email'] = $request->getEmail();
        }

        if ($request->isRequireConfirmation()) {
            $result['requireConfirmation'] = $request->isRequireConfirmation();
        }

        if ($request->isSendEmail()) {
            $result['sendEmail'] = $request->isSendEmail();
        }

        if ($request->getInvoiceId()) {
            $result['invoiceId'] = $request->getInvoiceId();
        }

        if ($request->getAccountId()) {
            $result['accountId'] = $request->getAccountId();
        }

        if ($request->getPhone()) {
            $result['phone'] = $request->getPhone();
        }

        if ($request->isSendSms()) {
            $result['sendSms'] = $request->isSendSms();
        }

        if ($request->isSendViber()) {
            $result['sendViber'] = $request->isSendViber();
        }

        if ($request->getCultureInfo()) {
            $result['cultureInfo'] = $request->getCultureInfo();
        }

        if ($request->getSubscriptionBehavior()) {
            $result['subscriptionBehavior'] = $request->getSubscriptionBehavior();
        }

        if ($request->getJsonData()) {
            $result['jsonData'] = json_encode($request->getJsonData());
        }

        return $result;
    }
}
