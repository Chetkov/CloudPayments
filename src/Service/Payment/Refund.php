<?php

namespace Chetkov\CloudPayments\Service\Payment;

use Chetkov\CloudPayments\Service\Service;
use Chetkov\CloudPayments\Request\Hydrator\Payment\Refund as Hydrator;
use Chetkov\CloudPayments\Request\Payment\Refund as Request;
use Chetkov\CloudPayments\Response\Response;

/**
 * Возврат денег
 * Class Refund
 * @package Chetkov\CloudPayments\Service\Payment
 */
class Refund extends Service
{
    public const ACTION_URL = '/payments/refund';

    /**
     * @param Request $request
     *
     * @return Response
     * @throws \Exception
     */
    public function refund(Request $request): Response
    {
        $parameters = Hydrator::extract($request);
        return $this->execute($parameters);
    }
}
