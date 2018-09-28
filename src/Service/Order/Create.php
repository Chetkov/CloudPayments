<?php

namespace Chetkov\CloudPayments\Service\Order;

use Chetkov\CloudPayments\Service\Service;
use Chetkov\CloudPayments\Request\Hydrator\Order\Create as Hydrator;
use Chetkov\CloudPayments\Request\Order\Create as Request;
use Chetkov\CloudPayments\Response\Response;

/**
 * Создание счета для отправки по почте
 * Class Create
 * @package Chetkov\CloudPayments\Service\Order
 */
class Create extends Service
{
    public const ACTION_URL = '/orders/create';

    /**
     * @param Request $request
     *
     * @return Response
     * @throws \Exception
     */
    public function create(Request $request): Response
    {
        $parameters = Hydrator::extract($request);
        return $this->execute($parameters);
    }
}
