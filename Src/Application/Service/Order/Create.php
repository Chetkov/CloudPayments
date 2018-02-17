<?php

namespace CloudPayments\Application\Service\Order;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Order\Create as Hydrator;
use CloudPayments\Domain\Request\Order\Create as Request;
use CloudPayments\Domain\Response\Response;

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
     * @return Response
     * @throws \Exception
     */
    public function create(Request $request): Response
    {
        $parameters = Hydrator::extract($request);
        return $this->execute($parameters);
    }
}
