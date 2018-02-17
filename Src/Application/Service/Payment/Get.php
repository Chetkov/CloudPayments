<?php

namespace CloudPayments\Application\Service\Payment;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Payment\Get as Hydrator;
use CloudPayments\Domain\Request\Payment\Get as Request;

/**
 * Просмотр информации об операции
 * Class Get
 * @package CloudPayments\Application\Service\Payment
 */
class Get extends Service
{
    public const ACTION_URL = '/payments/get';

    /**
     * @param Request $request
     *
     * @throws \Exception
     */
    public function get(Request $request)
    {
        $parameters = Hydrator::extract($request);
        $result = $this->execute($parameters);
    }
}
