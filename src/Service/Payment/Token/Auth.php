<?php

namespace Chetkov\CloudPayments\Service\Payment\Token;

use Chetkov\CloudPayments\Service\Service;
use Chetkov\CloudPayments\Request\Hydrator\Payment\Token\Token as Hydrator;
use Chetkov\CloudPayments\Request\Payment\Token\Token as Request;
use Chetkov\CloudPayments\Response\Response;

/**
 * Оплата по токену (рекарринг) для двухстадийного платежа
 * Class Auth
 * @package Chetkov\CloudPayments\Service\Payment\Token
 */
class Auth extends Service
{
    public const ACTION_URL = '/payments/tokens/auth';

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
