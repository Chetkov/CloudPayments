<?php

namespace Chetkov\CloudPayments\Service\Subscription;

use Chetkov\CloudPayments\Service\Service;
use Chetkov\CloudPayments\Request\Hydrator\Subscription\Get as Hydrator;
use Chetkov\CloudPayments\Request\Subscription\Get as Request;
use Chetkov\CloudPayments\Response\Response;

/**
 * Запрос информации о подписке
 * Class Get
 * @package Chetkov\CloudPayments\Service\Subscription
 */
class Get extends Service
{
    public const ACTION_URL = '/subscriptions/get';

    /**
     * @param Request $request
     *
     * @return Response
     * @throws \Exception
     */
    public function get(Request $request): Response
    {
        $parameters = Hydrator::extract($request);
        return $this->execute($parameters);
    }
}
