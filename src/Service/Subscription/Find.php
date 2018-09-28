<?php

namespace Chetkov\CloudPayments\Service\Subscription;

use Chetkov\CloudPayments\Service\Service;
use Chetkov\CloudPayments\Request\Hydrator\Subscription\Find as Hydrator;
use Chetkov\CloudPayments\Request\Subscription\Find as Request;
use Chetkov\CloudPayments\Response\Response;

/**
 * Поиск подписок
 * Class Find
 * @package Chetkov\CloudPayments\Service\Subscription
 */
class Find extends Service
{
    public const ACTION_URL = '/subscriptions/find';

    /**
     * @param Request $request
     *
     * @return Response
     * @throws \Exception
     */
    public function find(Request $request): Response
    {
        $parameters = Hydrator::extract($request);
        return $this->execute($parameters);
    }
}
