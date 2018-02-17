<?php

namespace CloudPayments\Application\Service\Payment;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Payment\Refund as Hydrator;
use CloudPayments\Domain\Request\Payment\Refund as Request;

/**
 * Возврат денег
 * Class Refund
 * @package CloudPayments\Application\Service\Payment
 */
class Refund extends Service
{
    public const ACTION_URL = '/payments/refund';

    /**
     * @param Request $request
     *
     * @throws \Exception
     */
    public function refund(Request $request)
    {
        $parameters = Hydrator::extract($request);
        $result = $this->execute($parameters);
    }
}
