<?php

namespace Chetkov\CloudPayments\Service\Subscription;

use Chetkov\CloudPayments\Service\Service;
use Chetkov\CloudPayments\Request\Hydrator\Subscription\Create as Hydrator;
use Chetkov\CloudPayments\Request\Subscription\Create as Request;
use Chetkov\CloudPayments\Response\Response;

/**
 * Создание подписки на рекуррентные платежи
 * Class Create
 * @package Chetkov\CloudPayments\Service\Subscription
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
