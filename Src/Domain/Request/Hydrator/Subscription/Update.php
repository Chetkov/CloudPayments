<?php

namespace CloudPayments\Domain\Request\Hydrator\Subscription;

use CloudPayments\Domain\Request\Subscription\Update as Request;

/**
 * Class Update
 * @package CloudPayments\Domain\Request\Hydrator\Subscription
 */
class Update
{
    /**
     * @param Request $request
     *
     * @return array
     */
    public static function extract(Request $request): array
    {
        $result = [
            'Id' => $request->getId(),
        ];

        if ($request->getDescription()) {
            $result['Description'] = $request->getDescription();
        }

        if ($request->getAmount()) {
            $result['Amount'] = $request->getAmount();
        }

        if ($request->getCurrency()) {
            $result['Currency'] = $request->getCurrency();
        }

        if ($request->isRequireConfirmation()) {
            $result['RequireConfirmation'] = $request->isRequireConfirmation();
        }

        if ($request->getStartDate()) {
            $result['StartDate'] = $request->getStartDate();
        }

        if ($request->getInterval()) {
            $result['Interval'] = $request->getInterval();
        }

        if ($request->getPeriod()) {
            $result['Period'] = $request->getPeriod();
        }

        if ($request->getMaxPeriods()) {
            $result['MaxPeriods'] = $request->getMaxPeriods();
        }

        return $result;
    }
}
