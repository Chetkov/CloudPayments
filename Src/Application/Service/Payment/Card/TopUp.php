<?php

namespace CloudPayments\Application\Service\Payment\Card;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Payment\Card\TopUp as Hydrator;
use CloudPayments\Domain\Request\Payment\Card\TopUp as Request;

/**
 * Выплата
 * Class TopUp
 * @package CloudPayments\Application\Service\Payment\Card
 */
class TopUp extends Service
{
    public const ACTION_URL = '/payments/cards/topup';

    /**
     * @param Request $request
     *
     * @throws \Exception
     */
    public function topUp(Request $request)
    {
        $parameters = Hydrator::extract($request);
        $result = $this->execute($parameters);
    }
}
