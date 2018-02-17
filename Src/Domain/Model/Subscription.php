<?php

namespace CloudPayments\Domain\Model;

/**
 * Class Subscription
 * @package CloudPayments\Domain\Model
 */
class Subscription
{
    protected $id;
    protected $accountId;
    protected $description;
    protected $email;
    protected $amount;
    protected $currencyCode;
    protected $currency;
    protected $requireConfirmation;
    protected $startDate;
    protected $startDateIso;
    protected $intervalCode;
    protected $interval;
    protected $period;
    protected $maxPeriods;
    protected $cultureName;
    protected $statusCode;
    protected $status;
    protected $successfulTransactionsNumber;
    protected $failedTransactionsNumber;
    protected $lastTransactionDate;
    protected $lastTransactionDateIso;
    protected $nextTransactionDate;
    protected $nextTransactionDateIso;

    /**
     * Subscription constructor.
     * @param string         $id
     * @param string         $accountId
     * @param string         $description
     * @param string         $email
     * @param float          $amount
     * @param int            $currencyCode
     * @param string         $currency
     * @param bool           $requireConfirmation
     * @param \DateTime|null $startDate
     * @param string         $startDateIso
     * @param int            $intervalCode
     * @param string         $interval
     * @param int            $period
     * @param                $maxPeriods
     * @param null|string    $cultureName
     * @param int            $statusCode
     * @param string         $status
     * @param int            $successfulTransactionsNumber
     * @param int            $failedTransactionsNumber
     * @param \DateTime|null $lastTransactionDate
     * @param null|string    $lastTransactionDateIso
     * @param \DateTime|null $nextTransactionDate
     * @param null|string    $nextTransactionDateIso
     */
    public function __construct(
        string $id,
        string $accountId,
        string $description,
        string $email,
        float $amount,
        int $currencyCode,
        string $currency,
        bool $requireConfirmation,
        ?\DateTime $startDate,
        string $startDateIso,
        int $intervalCode,
        string $interval,
        int $period,
        $maxPeriods,
        ?string $cultureName,
        int $statusCode,
        string $status,
        int $successfulTransactionsNumber,
        int $failedTransactionsNumber,
        ?\DateTime $lastTransactionDate,
        ?string $lastTransactionDateIso,
        ?\DateTime $nextTransactionDate,
        ?string $nextTransactionDateIso
    )
    {
        $this->id = $id;
        $this->accountId = $accountId;
        $this->description = $description;
        $this->email = $email;
        $this->amount = $amount;
        $this->currencyCode = $currencyCode;
        $this->currency = $currency;
        $this->requireConfirmation = $requireConfirmation;
        $this->startDate = $startDate;
        $this->startDateIso = $startDateIso;
        $this->intervalCode = $intervalCode;
        $this->interval = $interval;
        $this->period = $period;
        $this->maxPeriods = $maxPeriods;
        $this->cultureName = $cultureName;
        $this->statusCode = $statusCode;
        $this->status = $status;
        $this->successfulTransactionsNumber = $successfulTransactionsNumber;
        $this->failedTransactionsNumber = $failedTransactionsNumber;
        $this->lastTransactionDate = $lastTransactionDate;
        $this->lastTransactionDateIso = $lastTransactionDateIso;
        $this->nextTransactionDate = $nextTransactionDate;
        $this->nextTransactionDateIso = $nextTransactionDateIso;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
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
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return int
     */
    public function getCurrencyCode(): int
    {
        return $this->currencyCode;
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
    public function getStartDateIso(): string
    {
        return $this->startDateIso;
    }

    /**
     * @return int
     */
    public function getIntervalCode(): int
    {
        return $this->intervalCode;
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
     * @return mixed
     */
    public function getMaxPeriods()
    {
        return $this->maxPeriods;
    }

    /**
     * @return string
     */
    public function getCultureName(): string
    {
        return $this->cultureName;
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function getSuccessfulTransactionsNumber(): int
    {
        return $this->successfulTransactionsNumber;
    }

    /**
     * @return int
     */
    public function getFailedTransactionsNumber(): int
    {
        return $this->failedTransactionsNumber;
    }

    /**
     * @return mixed
     */
    public function getLastTransactionDate()
    {
        return $this->lastTransactionDate;
    }

    /**
     * @return mixed
     */
    public function getLastTransactionDateIso()
    {
        return $this->lastTransactionDateIso;
    }

    /**
     * @return \DateTime
     */
    public function getNextTransactionDate(): \DateTime
    {
        return $this->nextTransactionDate;
    }

    /**
     * @return string
     */
    public function getNextTransactionDateIso(): string
    {
        return $this->nextTransactionDateIso;
    }
}