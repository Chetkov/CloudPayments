<?php

namespace CloudPayments\Domain\Request\Subscription;

/**
 * Class Create
 * @package CloudPayments\Domain\Request\Subscription
 */
class Create
{
    /**
     * @var string
     */
    protected $token;

    /**
     * @var string
     */
    protected $accountId;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var int
     */
    protected $amount;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var bool
     */
    protected $requireConfirmation;

    /**
     * @var \DateTime
     */
    protected $startDate;

    /**
     * @var string
     */
    protected $interval;

    /**
     * @var int
     */
    protected $period;

    /**
     * @var int|null
     */
    protected $maxPeriods;

    /**
     * Create constructor.
     *
     * @param string    $token
     * @param string    $accountId
     * @param string    $description
     * @param string    $email
     * @param int       $amount
     * @param string    $currency
     * @param bool      $requireConfirmation
     * @param \DateTime $startDate
     * @param string    $interval
     * @param int       $period
     */
    public function __construct(
        string $token,
        string $accountId,
        string $description,
        string $email,
        int $amount,
        string $currency,
        bool $requireConfirmation,
        \DateTime $startDate,
        string $interval,
        int $period
    )
    {
        $this->token = $token;
        $this->accountId = $accountId;
        $this->description = $description;
        $this->email = $email;
        $this->amount = $amount;
        $this->currency = $currency;
        $this->requireConfirmation = $requireConfirmation;
        $this->startDate = $startDate;
        $this->interval = $interval;
        $this->period = $period;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @return string
     */
    public function getAccountId(): string
    {
        return $this->accountId;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return bool
     */
    public function isRequireConfirmation(): bool
    {
        return $this->requireConfirmation;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    /**
     * @return string
     */
    public function getInterval(): string
    {
        return $this->interval;
    }

    /**
     * @return int
     */
    public function getPeriod(): int
    {
        return $this->period;
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
     * @return Create
     */
    public function setMaxPeriods(int $maxPeriods): self
    {
        $this->maxPeriods = $maxPeriods;
        return $this;
    }
}
