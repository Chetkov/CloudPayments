<?php

namespace CloudPayments\Application\Service\Subscription;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Subscription\Get as Hydrator;
use CloudPayments\Domain\Request\Subscription\Get as Request;

/**
 * Запрос информации о подписке
 * Class Get
 * @package CloudPayments\Application\Service\Subscription
 */
class Get extends Service
{
    public const ACTION_URL = '/subscriptions/get';

    /**
     * @param Request $getRequest
     *
     * @throws \Exception
     */
    public function get(Request $getRequest)
    {
        $parameters = Hydrator::extract($getRequest);
        $result = $this->execute($parameters);
    }
}
