<?php

namespace Chetkov\CloudPayments\Service\Payment\Token;

use Chetkov\CloudPayments\Service\Service;
use Chetkov\CloudPayments\Request\Hydrator\Payment\Token\Token as Hydrator;
use Chetkov\CloudPayments\Request\Payment\Token\Token as Request;
use Chetkov\CloudPayments\Response\Response;

/**
 * Оплата по токену (рекарринг) для одностадийного платежа
 * Class Charge
 * @package Chetkov\CloudPayments\Service\Payment\Token
 */
class Charge extends Service
{
    public const ACTION_URL = '/payments/tokens/charge';

    /**
     * @param Request $request
     *
     * @return Response
     * @throws \Exception
     */
    public function charge(Request $request): Response
    {
        $parameters = Hydrator::extract($request);
        return $this->execute($parameters);
    }
}
