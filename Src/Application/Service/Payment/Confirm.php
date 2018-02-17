<?php

namespace CloudPayments\Application\Service\Payment;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Payment\Confirm as Hydrator;
use CloudPayments\Domain\Request\Payment\Confirm as Request;
use CloudPayments\Domain\Response\Response;

/**
 * Подтверждение оплаты для двухстадийного платежа
 * Class Confirm
 * @package CloudPayments\Application\Service\Payment
 */
class Confirm extends Service
{
    public const ACTION_URL = '/payments/confirm';

    /**
     * @param Request $request
     *
     * @return Response
     * @throws \Exception
     */
    public function confirm(Request $request): Response
    {
        $parameters = Hydrator::extract($request);
        return $this->execute($parameters);
    }
}
