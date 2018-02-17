<?php

namespace CloudPayments\Application\Service\Payment\Card;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Payment\Card\Card as Hydrator;
use CloudPayments\Domain\Request\Payment\Card\Card as Request;
use CloudPayments\Domain\Response\Response;

/**
 * Оплата по криптограмме для двухстадийного платежа
 * Class Auth
 * @package CloudPayments\Application\Service\Payment\Card
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
