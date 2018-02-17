<?php

namespace CloudPayments\Domain\Request\Subscription;

/**
 * Class Cancel
 * @package CloudPayments\Domain\Request\Subscription
 */
class Cancel
{
    /**
     * @var string
     */
    protected $id;

    /**
     * Cancel constructor.
     *
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
}
