<?php

namespace Chetkov\CloudPayments\Service\Payment\Card;

use Chetkov\CloudPayments\Service\Service;
use Chetkov\CloudPayments\Request\Hydrator\Payment\Card\Post3Ds as Hydrator;
use Chetkov\CloudPayments\Request\Payment\Card\Post3Ds as Request;
use Chetkov\CloudPayments\Response\Response;

/**
 * Завершение оплаты
 * Class Post3Ds
 * @package Chetkov\CloudPayments\Service\Payment\Card
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
