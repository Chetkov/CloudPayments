<?php

namespace Chetkov\CloudPayments\Service\ApplePay;

use Chetkov\CloudPayments\Service\Service;
use Chetkov\CloudPayments\Request\ApplePay\StartSession as Request;
use Chetkov\CloudPayments\Request\Hydrator\ApplePay\StartSession as Hydrator;
use Chetkov\CloudPayments\Response\Response;

/**
 * Запуск сессии для оплаты через Apple Pay
 * Class StartSession
 * @package Chetkov\CloudPayments\Service\ApplePay
 */
class StartSession extends Service
{
    public const ACTION_URL = '/applepay/startsession';

    /**
     * @param Request $request
     *
     * @return Response
     * @throws \Exception
     */
    public function startSession(Request $request): Response
    {
        $parameters = Hydrator::extract($request);
        return $this->execute($parameters);
    }
}
