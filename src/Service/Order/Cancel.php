<?php

namespace Chetkov\CloudPayments\Service\Order;

use Chetkov\CloudPayments\Service\Service;
use Chetkov\CloudPayments\Request\Hydrator\Order\Cancel as Hydrator;
use Chetkov\CloudPayments\Request\Order\Cancel as Request;
use Chetkov\CloudPayments\Response\Response;

/**
 * Отмена созданного счета
 * Class Cancel
 * @package Chetkov\CloudPayments\Service\Order
 */
class Cancel extends Service
{
    public const ACTION_URL = '/orders/cancel';

    /**
     * @param Request $request
     *
     * @return Response
     * @throws \Exception
     */
    public function cancel(Request $request): Response
    {
        $parameters = Hydrator::extract($request);
        return $this->execute($parameters);
    }
}
