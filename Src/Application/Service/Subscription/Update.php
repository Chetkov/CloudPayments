<?php

namespace CloudPayments\Application\Service\Subscription;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Subscription\Update as Hydrator;
use CloudPayments\Domain\Request\Subscription\Update as Request;
use CloudPayments\Domain\Response\Response;

/**
 * Изменение подписки на рекуррентные платежи
 * Class Update
 * @package CloudPayments\Application\Service\Subscription
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
