<?php

namespace Chetkov\CloudPayments\Service\Payment;

use Chetkov\CloudPayments\Service\Service;
use Chetkov\CloudPayments\Request\Hydrator\Payment\Get as Hydrator;
use Chetkov\CloudPayments\Request\Payment\Get as Request;
use Chetkov\CloudPayments\Response\Response;

/**
 * Просмотр информации об операции
 * Class Get
 * @package Chetkov\CloudPayments\Service\Payment
 */
class Get extends Service
{
    public const ACTION_URL = '/payments/get';

    /**
     * @param Request $request
     *
     * @return Response
     * @throws \Exception
     */
    public function get(Request $request): Response
    {
        $parameters = Hydrator::extract($request);
        return $this->execute($parameters);
    }
}
