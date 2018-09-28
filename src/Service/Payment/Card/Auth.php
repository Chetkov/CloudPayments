<?php

namespace Chetkov\CloudPayments\Service\Payment\Card;

use Chetkov\CloudPayments\Service\Service;
use Chetkov\CloudPayments\Request\Hydrator\Payment\Card\Card as Hydrator;
use Chetkov\CloudPayments\Request\Payment\Card\Card as Request;
use Chetkov\CloudPayments\Response\Response;

/**
 * Оплата по криптограмме для двухстадийного платежа
 * Class Auth
 * @package Chetkov\CloudPayments\Service\Payment\Card
 */
class Auth extends Service
{
    public const ACTION_URL = '/payments/cards/auth';

    /**
     * @param Request $request
     *
     * @return Response
     * @throws \Exception
     */
    public function auth(Request $request): Response
    {
        $parameters = Hydrator::extract($request);
        return $this->execute($parameters);
    }
}
