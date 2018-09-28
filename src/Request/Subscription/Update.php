<?php

namespace Chetkov\CloudPayments\Request\Subscription;

/**
 * Class Update
 * @package Chetkov\CloudPayments\Request\Subscription
 */
class Update
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var int|null
     */
    protected $amount;

    /**
     * @var string|null
     */
    protected $currency;

    /**
     * @var bool|null
     */
    protected $requireConfirmation;

    /**
     * @var \DateTime|null
     */
    protected $startDate;

    /**
     * @var string|null
     */
    protected $interval;

    /**
     * @var int|null
     */
    protected $period;

    /**
     * @var int|null
     */
    protected $maxPeriods;

    /**
     * Update constructor.
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

    /**
     * @return null|string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return Update
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param int|null $amount
     *
     * @return Update
     */
    public function setAmount(int $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @return Update
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isRequireConfirmation(): ?bool
    {
        return $this->requireConfirmation;
    }

    /**
     * @param bool $requireConfirmation
     *
     * @return Update
     */
    public function setRequireConfirmation(bool $requireConfirmation): self
    {
        $this->requireConfirmation = $requireConfirmation;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getStartDate(): ?\DateTime
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime|null $startDate
     *
     * @return Update
     */
    public function setStartDate(\DateTime $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getInterval(): ?string
    {
        return $this->interval;
    }

    /**
     * @param string $interval
     *
     * @return Update
     */
    public function setInterval(string $interval): self
    {
        $this->interval = $interval;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPeriod(): ?int
    {
        return $this->period;
    }

    /**
     * @param int|null $period
     *
     * @return Update
     */
    public function setPeriod(int $period): self
    {
        $this->period = $period;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMaxPeriods(): ?int
    {
        return $this->maxPeriods;
    }

    /**
     * @param int|null $maxPeriods
     *
     * @return Update
     */
    public function setMaxPeriods(int $maxPeriods): self
    {
        $this->maxPeriods = $maxPeriods;
        return $this;
    }
}
