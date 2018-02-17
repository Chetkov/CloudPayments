<?php

namespace CloudPayments\Domain\Request\Hydrator\ApplePay;

use CloudPayments\Domain\Request\ApplePay\StartSession as Request;

/**
 * Class StartSession
 * @package CloudPayments\Domain\Request\Hydrator\ApplePay
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
