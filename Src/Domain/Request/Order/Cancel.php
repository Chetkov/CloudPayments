<?php

namespace CloudPayments\Domain\Request\Order;

/**
 * Class Cancel
 * @package CloudPayments\Domain\Card\Order
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
