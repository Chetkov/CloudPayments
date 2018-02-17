<?php

namespace CloudPayments\Application\Service\Payment;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Payment\PaymentList as Hydrator;
use CloudPayments\Domain\Request\Payment\PaymentList as Request;
use CloudPayments\Domain\Response\Response;

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
     * @return Response
     * @throws \Exception
     */
    public function list(Request $request): Response
    {
        $parameters = Hydrator::extract($request);
        return $this->execute($parameters);
    }
}
