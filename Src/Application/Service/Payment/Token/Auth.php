<?php

namespace CloudPayments\Application\Service\Payment\Token;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Payment\Token\Token as Hydrator;
use CloudPayments\Domain\Request\Payment\Token\Token as Request;
use CloudPayments\Domain\Response\Response;

/**
 * Оплата по токену (рекарринг) для двухстадийного платежа
 * Class Auth
 * @package CloudPayments\Application\Service\Payment\Token
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
