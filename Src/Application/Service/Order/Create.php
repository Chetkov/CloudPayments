<?php

namespace CloudPayments\Application\Service\Order;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Order\Create as Hydrator;
use CloudPayments\Domain\Request\Order\Create as Request;

/**
 * Создание счета для отправки по почте
 * Class Create
 * @package CloudPayments\Application\Service\Order
 */
class Create extends Service
{
    public const ACTION_URL = '/orders/create';

    /**
     * @param Request $request
     *
     * @throws \Exception
     */
    public function create(Request $request)
    {
        $parameters = Hydrator::extract($request);
        $result = $this->execute($parameters);
    }
}
