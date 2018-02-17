<?php

namespace CloudPayments\Application\Service\Payment;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Payment\VoidPayment as Hydrator;
use CloudPayments\Domain\Request\Payment\VoidPayment as Request;
use CloudPayments\Domain\Response\Response;

/**
 * Отмена оплаты
 * Class VoidPayment
 * @package CloudPayments\Application\Service\Payment
 */
class VoidPayment extends Service
{
    public const ACTION_URL = '/payments/void';

    /**
     * @param Request $request
     *
     * @return Response
     * @throws \Exception
     */
    public function void(Request $request): Response
    {
        $parameters = Hydrator::extract($request);
        return $this->execute($parameters);
    }
}
