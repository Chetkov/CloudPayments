<?php

namespace Chetkov\CloudPayments\Service\Payment;

use Chetkov\CloudPayments\Service\Service;
use Chetkov\CloudPayments\Request\Hydrator\Payment\Find as Hydrator;
use Chetkov\CloudPayments\Request\Payment\Find as Request;
use Chetkov\CloudPayments\Response\Response;

/**
 * Поиск платежа для проверки статуса
 * Class Find
 * @package Chetkov\CloudPayments\Service\Payment
 */
class Find extends Service
{
    public const ACTION_URL = '/payments/find';

    /**
     * @param Request $request
     *
     * @return Response
     * @throws \Exception
     */
    public function find(Request $request): Response
    {
        $parameters = Hydrator::extract($request);
        return $this->execute($parameters);
    }
}
