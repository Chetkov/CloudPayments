<?php

namespace Chetkov\CloudPayments\Request\Hydrator\Subscription;

use Chetkov\CloudPayments\Request\Subscription\Create as Request;

/**
 * Class Create
 * @package Chetkov\CloudPayments\Request\Hydrator\Subscription
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
            'Token' => $request->getToken(),
            'AccountId' => $request->getAccountId(),
            'Description' => $request->getDescription(),
            'Email' => $request->getEmail(),
            'Amount' => $request->getAmount(),
            'Currency' => $request->getCurrency(),
            'RequireConfirmation' => $request->isRequireConfirmation(),
            'StartDate' => $request->getStartDate(),
            'Interval' => $request->getInterval(),
            'Period' => $request->getPeriod(),
        ];

        if ($request->getMaxPeriods()) {
            $result['MaxPeriods'] = $request->getMaxPeriods();
        }

        return $result;
    }
}
