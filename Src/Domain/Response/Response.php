<?php

namespace CloudPayments\Domain\Response;

/**
 * Class Response
 * @package CloudPayments\Domain\Response
 */
class Response
{
    /**
     * @var bool
     */
    protected $success;

    /**
     * @var string
     */
    protected $message;

    /**
     * Response constructor.
     *
     * @param bool   $success
     * @param string $message
     */
    public function __construct(bool $success, string $message)
    {
        $this->success = $success;
        $this->message = $message;
    }

    /**
     * @return bool
     */
    public function isSuccess(): bool
    {
        return $this->success;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
