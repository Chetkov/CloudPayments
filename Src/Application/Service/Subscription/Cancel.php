<?php

namespace CloudPayments\Application\Service\Subscription;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Subscription\Cancel as Hydrator;
use CloudPayments\Domain\Request\Subscription\Cancel as Request;
use CloudPayments\Domain\Response\Response;

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
     * @return Response
     * @throws \Exception
     */
    public function cancel(Request $request): Response
    {
        $parameters = Hydrator::extract($request);
        return $this->execute($parameters);
    }
}
