<?php

namespace CloudPayments\Application\Service\Payment\Card;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Payment\Card\TopUp as Hydrator;
use CloudPayments\Domain\Request\Payment\Card\TopUp as Request;
use CloudPayments\Domain\Response\Response;

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
     * @return Response
     * @throws \Exception
     */
    public function topUp(Request $request): Response
    {
        $parameters = Hydrator::extract($request);
        return $this->execute($parameters);
    }
}
