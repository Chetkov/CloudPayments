<?php

namespace Chetkov\CloudPayments\Service\Payment;

use Chetkov\CloudPayments\Service\Service;
use Chetkov\CloudPayments\Request\Hydrator\Payment\VoidPayment as Hydrator;
use Chetkov\CloudPayments\Request\Payment\VoidPayment as Request;
use Chetkov\CloudPayments\Response\Response;

/**
 * Отмена оплаты
 * Class VoidPayment
 * @package Chetkov\CloudPayments\Service\Payment
 */
class VoidPayment extends Service
{
    public const ACTION_URL = '/payments/void';

    /**
     * @param Request $request
     *
     * @return Response
     * @throws \Exception
     */
    public function void(Request $request): Response
    {
        $parameters = Hydrator::extract($request);
        return $this->execute($parameters);
    }
}
