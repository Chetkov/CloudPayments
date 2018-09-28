<?php

namespace Chetkov\CloudPayments\Response;

use Chetkov\CloudPayments\Model\Model;

/**
 * Class Response
 * @package Chetkov\CloudPayments\Response
 */
class Response
{
    /**
     * @var bool
     */
    protected $success;

    /**
     * @var string|null
     */
    protected $message;

    /**
     * @var Model|null
     */
    protected $model;

    /**
     * Response constructor.
     *
     * @param bool $success
     */
    public function __construct(bool $success)
    {
        $this->success = $success;
    }

    /**
     * @return bool
     */
    public function isSuccess(): bool
    {
        return $this->success;
    }

    /**
     * @return null|string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return Response
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return Model|null
     */
    public function getModel(): ?Model
    {
        return $this->model;
    }

    /**
     * @param Model|null $model
     *
     * @return Response
     */
    public function setModel(Model $model): self
    {
        $this->model = $model;
        return $this;
    }
}
