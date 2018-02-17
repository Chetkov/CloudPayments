<?php

namespace CloudPayments\Application\Service\Subscription;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Subscription\Find as Hydrator;
use CloudPayments\Domain\Request\Subscription\Find as Request;
use CloudPayments\Domain\Response\Response;

/**
 * Поиск подписок
 * Class Find
 * @package CloudPayments\Service\Subscription
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
