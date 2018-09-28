<?php

namespace Chetkov\CloudPayments\Service\Subscription;

use Chetkov\CloudPayments\Service\Service;
use Chetkov\CloudPayments\Request\Hydrator\Subscription\Update as Hydrator;
use Chetkov\CloudPayments\Request\Subscription\Update as Request;
use Chetkov\CloudPayments\Response\Response;

/**
 * Изменение подписки на рекуррентные платежи
 * Class Update
 * @package Chetkov\CloudPayments\Service\Subscription
 */
class Update extends Service
{
    public const ACTION_URL = '/subscriptions/update';

    /**
     * @param Request $request
     *
     * @return Response
     * @throws \Exception
     */
    public function update(Request $request): Response
    {
        $parameters = Hydrator::extract($request);
        return $this->execute($parameters);
    }
}
