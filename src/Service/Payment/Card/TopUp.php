<?php

namespace Chetkov\CloudPayments\Service\Payment\Card;

use Chetkov\CloudPayments\Service\Service;
use Chetkov\CloudPayments\Request\Hydrator\Payment\Card\TopUp as Hydrator;
use Chetkov\CloudPayments\Request\Payment\Card\TopUp as Request;
use Chetkov\CloudPayments\Response\Response;

/**
 * Выплата
 * Class TopUp
 * @package Chetkov\CloudPayments\Service\Payment\Card
 */
class TopUp extends Service
{
    public const ACTION_URL = '/payments/cards/topup';

    /**
     * @param Request $request
     *
     * @return Response
     * @throws \Exception
     */
    public function topUp(Request $request): Response
    {
        $parameters = Hydrator::extract($request);
        return $this->execute($parameters);
    }
}
