<?php

namespace CloudPayments\Application\Service\Payment;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Payment\Get as Hydrator;
use CloudPayments\Domain\Request\Payment\Get as Request;
use CloudPayments\Domain\Response\Response;

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
     * @return Response
     * @throws \Exception
     */
    public function get(Request $request): Response
    {
        $parameters = Hydrator::extract($request);
        return $this->execute($parameters);
    }
}
