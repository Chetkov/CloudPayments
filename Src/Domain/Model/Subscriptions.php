<?php

namespace CloudPayments\Domain\Model;

/**
 * Class Subscriptions
 * @package CloudPayments\Domain\Model
 */
class Subscriptions
{
    /**
     * @var array
     */
    protected $list = [];

    /**
     * SubscriptionList constructor.
     * @param array $subscriptionList
     */
    public function __construct(array $subscriptionList)
    {
        foreach ($subscriptionList as $subscription) {
            if (!($subscription instanceof Subscription)) {
                continue;
            }
            $this->list[] = $subscription;
        }
    }

    /**
     * @return Subscription[]
     */
    public function getList(): array
    {
        return $this->list;
    }
}
