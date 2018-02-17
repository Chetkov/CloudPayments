<?php

namespace CloudPayments\Domain\Request\Subscription;

/**
 * Class Get
 * @package CloudPayments\Domain\Request\Subscription
 */
class Get
{
    /**
     * @var string
     */
    protected $id;

    /**
     * Get constructor.
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
