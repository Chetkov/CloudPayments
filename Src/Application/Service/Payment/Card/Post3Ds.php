<?php

namespace CloudPayments\Application\Service\Payment\Card;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Payment\Card\Post3Ds as Hydrator;
use CloudPayments\Domain\Request\Payment\Card\Post3Ds as Request;

/**
 * Завершение оплаты
 * Class Post3Ds
 * @package CloudPayments\Application\Service\Payment\Card
 */
class Post3Ds extends Service
{
    public const ACTION_URL = '/payments/cards/post3ds';

    /**
     * @param Request $request
     *
     * @throws \Exception
     */
    public function post3ds(Request $request)
    {
        $parameters = Hydrator::extract($request);
        $result = $this->execute($parameters);
    }
}
