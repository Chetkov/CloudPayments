<?php

namespace Chetkov\CloudPayments\Service\Payment\Card;

use Chetkov\CloudPayments\Service\Service;
use Chetkov\CloudPayments\Request\Hydrator\Payment\Card\Card as Hydrator;
use Chetkov\CloudPayments\Request\Payment\Card\Card as Request;
use Chetkov\CloudPayments\Response\Response;

/**
 * Оплата по криптограмме для одностадийного платежа
 * Class Charge
 * @package Chetkov\CloudPayments\Service\Payment\Card
 */
class Charge extends Service
{
    public const ACTION_URL = '/payments/cards/charge';

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
