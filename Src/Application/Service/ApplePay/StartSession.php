<?php

namespace CloudPayments\Application\Service\ApplePay;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\ApplePay\StartSession as Request;
use CloudPayments\Domain\Request\Hydrator\ApplePay\StartSession as Hydrator;

/**
 * Запуск сессии для оплаты через Apple Pay
 * Class StartSession
 * @package CloudPayments\Application\Service\ApplePay
 */
class StartSession extends Service
{
    public const ACTION_URL = '/applepay/startsession';

    /**
     * @param Request $request
     *
     * @throws \Exception
     */
    public function startSession(Request $request)
    {
        $parameters = Hydrator::extract($request);
        $result = $this->execute($parameters);
    }
}
