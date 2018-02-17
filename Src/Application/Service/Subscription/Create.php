<?php

namespace CloudPayments\Application\Service\Subscription;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Subscription\Create as Hydrator;
use CloudPayments\Domain\Request\Subscription\Create as Request;
use CloudPayments\Domain\Response\Response;

/**
 * Создание подписки на рекуррентные платежи
 * Class Create
 * @package CloudPayments\Application\Service\Subscription
 */
class Create extends Service
{
    public const ACTION_URL = '/subscriptions/create';

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
