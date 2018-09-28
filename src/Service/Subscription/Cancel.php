<?php

namespace Chetkov\CloudPayments\Service\Subscription;

use Chetkov\CloudPayments\Service\Service;
use Chetkov\CloudPayments\Request\Hydrator\Subscription\Cancel as Hydrator;
use Chetkov\CloudPayments\Request\Subscription\Cancel as Request;
use Chetkov\CloudPayments\Response\Response;

/**
 * Отмена подписки на рекуррентные платежи
 * Class Cancel
 * @package Chetkov\CloudPayments\Service\Subscription
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
