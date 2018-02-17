<?php

namespace CloudPayments\Application\Service\Payment\Token;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Payment\Token\Token as Hydrator;
use CloudPayments\Domain\Request\Payment\Token\Token as Request;

/**
 * Оплата по токену (рекарринг) для одностадийного платежа
 * Class Charge
 * @package CloudPayments\Application\Service\Payment\Token
 */
class Charge extends Service
{
    public const ACTION_URL = '/payments/tokens/charge';

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
