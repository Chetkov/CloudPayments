<?php

namespace CloudPayments\Application\Service\Payment;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Payment\PaymentList as Hydrator;
use CloudPayments\Domain\Request\Payment\PaymentList as Request;

/**
 * Выгрузка списка транзакций
 * Class PaymentList
 * @package CloudPayments\Application\Service\Payment
 */
class PaymentList extends Service
{
    public const ACTION_URL = '/payments/list';

    /**
     * @param Request $request
     *
     * @throws \Exception
     */
    public function list(Request $request)
    {
        $parameters = Hydrator::extract($request);
        $result = $this->execute($parameters);
    }
}
