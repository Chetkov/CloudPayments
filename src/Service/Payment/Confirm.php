<?php

namespace Chetkov\CloudPayments\Service\Payment;

use Chetkov\CloudPayments\Service\Service;
use Chetkov\CloudPayments\Request\Hydrator\Payment\Confirm as Hydrator;
use Chetkov\CloudPayments\Request\Payment\Confirm as Request;
use Chetkov\CloudPayments\Response\Response;

/**
 * Подтверждение оплаты для двухстадийного платежа
 * Class Confirm
 * @package Chetkov\CloudPayments\Service\Payment
 */
class Confirm extends Service
{
    public const ACTION_URL = '/payments/confirm';

    /**
     * @param Request $request
     *
     * @return Response
     * @throws \Exception
     */
    public function confirm(Request $request): Response
    {
        $parameters = Hydrator::extract($request);
        return $this->execute($parameters);
    }
}
