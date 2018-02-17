<?php

namespace CloudPayments\Application\Service\Payment;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Payment\Find as Hydrator;
use CloudPayments\Domain\Request\Payment\Find as Request;
use CloudPayments\Domain\Response\Response;

/**
 * Поиск платежа для проверки статуса
 * Class Find
 * @package CloudPayments\Application\Service\Payment
 */
class Find extends Service
{
    public const ACTION_URL = '/payments/find';

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
