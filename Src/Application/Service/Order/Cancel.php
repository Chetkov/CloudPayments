<?php

namespace CloudPayments\Application\Service\Order;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Order\Cancel as Hydrator;
use CloudPayments\Domain\Request\Order\Cancel as Request;

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
     * @throws \Exception
     */
    public function cancel(Request $request)
    {
        $parameters = Hydrator::extract($request);
        $result = $this->execute($parameters);
    }
}
