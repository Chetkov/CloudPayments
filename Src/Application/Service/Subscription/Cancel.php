<?php

namespace CloudPayments\Application\Service\Subscription;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Subscription\Cancel as Hydrator;
use CloudPayments\Domain\Request\Subscription\Cancel as Request;

/**
 * Отмена подписки на рекуррентные платежи
 * Class Cancel
 * @package CloudPayments\Application\Service\Subscription
 */
class Cancel extends Service
{
    public const ACTION_URL = '/subscriptions/cancel';

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
