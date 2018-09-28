<?php

namespace Chetkov\CloudPayments\Service\Payment;

use Chetkov\CloudPayments\Service\Service;
use Chetkov\CloudPayments\Request\Hydrator\Payment\PaymentList as Hydrator;
use Chetkov\CloudPayments\Request\Payment\PaymentList as Request;
use Chetkov\CloudPayments\Response\Response;

/**
 * Выгрузка списка транзакций
 * Class PaymentList
 * @package Chetkov\CloudPayments\Service\Payment
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
