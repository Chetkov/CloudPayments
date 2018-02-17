<?php

namespace CloudPayments\Application\Service\Order;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Order\Cancel as Hydrator;
use CloudPayments\Domain\Request\Order\Cancel as Request;
use CloudPayments\Domain\Response\Response;

/**
 * Отмена созданного счета
 * Class Cancel
 * @package CloudPayments\Application\Service\Order
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
