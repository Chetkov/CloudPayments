<?php

namespace CloudPayments\Application\Service\Payment\Card;

use CloudPayments\Application\Service\Service;
use CloudPayments\Domain\Request\Hydrator\Payment\Card\Post3Ds as Hydrator;
use CloudPayments\Domain\Request\Payment\Card\Post3Ds as Request;
use CloudPayments\Domain\Response\Response;

/**
 * Завершение оплаты
 * Class Post3Ds
 * @package CloudPayments\Application\Service\Payment\Card
 */
class Post3Ds extends Service
{
    public const ACTION_URL = '/payments/cards/post3ds';

    /**
     * @param Request $request
     *
     * @return Response
     * @throws \Exception
     */
    public function post3ds(Request $request): Response
    {
        $parameters = Hydrator::extract($request);
        return $this->execute($parameters);
    }
}
