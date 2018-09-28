<?php

namespace Chetkov\CloudPayments\Request\Order;

/**
 * Class Create
 * @package Chetkov\CloudPayments\Request\Order
 */
class Create
{
    /**
     * @var int
     */
    protected $amount;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var bool|null
     */
    protected $requireConfirmation;

    /**
     * @var bool|null
     */
    protected $sendEmail;

    /**
     * @var string|null
     */
    protected $invoiceId;

    /**
     * @var string|null
     */
    protected $accountId;

    /**
     * @var string|null
     */
    protected $phone;

    /**
     * @var bool|null
     */
    protected $sendSms;

    /**
     * @var bool|null
     */
    protected $sendViber;

    /**
     * @var string|null
     */
    protected $cultureInfo;

    /**
     * @var string|null
     */
    protected $subscriptionBehavior;

    /**
     * @var array|null
     */
    protected $jsonData;

    /**
     * Create constructor.
     *
     * @param int    $amount
     * @param string $currency
     * @param string $description
     */
    public function __construct(int $amount, string $currency, string $description)
    {
        $this->amount = $amount;
        $this->currency = $currency;
        $this->description = $description;
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
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return null|string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return Create
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;
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
     * @return Create
     */
    public function setRequireConfirmation(bool $requireConfirmation): self
    {
        $this->requireConfirmation = $requireConfirmation;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isSendEmail(): ?bool
    {
        return $this->sendEmail;
    }

    /**
     * @param bool $sendEmail
     *
     * @return Create
     */
    public function setSendEmail(bool $sendEmail): self
    {
        $this->sendEmail = $sendEmail;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getInvoiceId(): ?string
    {
        return $this->invoiceId;
    }

    /**
     * @param string $invoiceId
     *
     * @return Create
     */
    public function setInvoiceId(string $invoiceId): self
    {
        $this->invoiceId = $invoiceId;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     *
     * @return Create
     */
    public function setAccountId(string $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     *
     * @return Create
     */
    public function setPhone(string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isSendSms(): ?bool
    {
        return $this->sendSms;
    }

    /**
     * @param bool $sendSms
     *
     * @return Create
     */
    public function setSendSms(bool $sendSms): self
    {
        $this->sendSms = $sendSms;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isSendViber(): ?bool
    {
        return $this->sendViber;
    }

    /**
     * @param bool $sendViber
     *
     * @return Create
     */
    public function setSendViber(bool $sendViber): self
    {
        $this->sendViber = $sendViber;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCultureInfo(): ?string
    {
        return $this->cultureInfo;
    }

    /**
     * @param string $cultureInfo
     *
     * @return Create
     */
    public function setCultureInfo(string $cultureInfo): self
    {
        $this->cultureInfo = $cultureInfo;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getSubscriptionBehavior(): ?string
    {
        return $this->subscriptionBehavior;
    }

    /**
     * @param string $subscriptionBehavior
     *
     * @return Create
     */
    public function setSubscriptionBehavior(string $subscriptionBehavior): self
    {
        $this->subscriptionBehavior = $subscriptionBehavior;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getJsonData(): ?array
    {
        return $this->jsonData;
    }

    /**
     * @param array $jsonData
     *
     * @return Create
     */
    public function setJsonData(array $jsonData): self
    {
        $this->jsonData = $jsonData;
        return $this;
    }
}
