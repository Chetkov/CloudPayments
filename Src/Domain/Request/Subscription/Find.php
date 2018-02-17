<?php

namespace CloudPayments\Domain\Request\Subscription;

/**
 * Class Find
 * @package CloudPayments\Domain\Request\Subscription
 */
class Find
{
    /**
     * @var string
     */
    protected $accountId;

    /**
     * Find constructor.
     *
     * @param string $accountId
     */
    public function __construct(string $accountId)
    {
        $this->accountId = $accountId;
    }

    /**
     * @return string
     */
    public function getAccountId(): string
    {
        return $this->accountId;
    }
}
