<?php

namespace Chetkov\CloudPayments\Request\Hydrator\ApplePay;

use Chetkov\CloudPayments\Request\ApplePay\StartSession;
use Chetkov\CloudPayments\Request\ApplePay\StartSession as Request;

/**
 * Class StartSession
 * @package Chetkov\CloudPayments\Request\Hydrator\ApplePay
 */
class StartSession
{
    /**
     * @param Request $request
     *
     * @return array
     */
    public static function extract(Request $request): array
    {
        return [
            'ValidationUrl' => $request->getValidationUrl(),
        ];
    }
}
