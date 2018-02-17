<?php

namespace CloudPayments\Application\Service\Payment;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Payment\Refund as Hydrator;
use CloudPayments\Domain\Request\Payment\Refund as Request;
use CloudPayments\Domain\Response\Response;

/**
 * Возврат денег
 * Class Refund
 * @package CloudPayments\Application\Service\Payment
 */
class Refund extends Service
{
    public const ACTION_URL = '/payments/refund';

    /**
     * @param Request $request
     *
     * @return Response
     * @throws \Exception
     */
    public function refund(Request $request): Response
    {
        $parameters = Hydrator::extract($request);
        return $this->execute($parameters);
    }
}
