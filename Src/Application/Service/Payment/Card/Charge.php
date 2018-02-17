<?php

namespace CloudPayments\Application\Service\Payment\Card;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Payment\Card\Card as Hydrator;
use CloudPayments\Domain\Request\Payment\Card\Card as Request;

/**
 * Оплата по криптограмме для одностадийного платежа
 * Class Charge
 * @package CloudPayments\Application\Service\Payment\Card
 */
class Charge extends Service
{
    public const ACTION_URL = '/payments/cards/charge';

    /**
     * @param Request $request
     *
     * @throws \Exception
     */
    public function charge(Request $request)
    {
        $parameters = Hydrator::extract($request);
        $result = $this->execute($parameters);
    }
}
