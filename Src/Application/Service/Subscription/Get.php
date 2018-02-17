<?php

namespace CloudPayments\Application\Service\Subscription;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Subscription\Get as Hydrator;
use CloudPayments\Domain\Request\Subscription\Get as Request;
use CloudPayments\Domain\Response\Response;

/**
 * Запрос информации о подписке
 * Class Get
 * @package CloudPayments\Application\Service\Subscription
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
