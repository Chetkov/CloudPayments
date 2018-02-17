<?php

namespace CloudPayments\Application;

use CloudPayments\Application\Service\ApplePay\StartSession;
use CloudPayments\Application\Service\Order\Cancel as OrderCancel;
use CloudPayments\Application\Service\Order\Create as OrderCreate;
use CloudPayments\Application\Service\Payment\Card\Auth as CardAuth;
use CloudPayments\Application\Service\Payment\Card\Charge as CardCharge;
use CloudPayments\Application\Service\Payment\Card\Post3Ds;
use CloudPayments\Application\Service\Payment\Card\TopUp;
use CloudPayments\Application\Service\Payment\Confirm;
use CloudPayments\Application\Service\Payment\Get as PaymentGet;
use CloudPayments\Application\Service\Payment\Find as PaymentFind;
use CloudPayments\Application\Service\Payment\PaymentList;
use CloudPayments\Application\Service\Payment\Refund;
use CloudPayments\Application\Service\Payment\Token\Auth as TokenAuth;
use CloudPayments\Application\Service\Payment\Token\Charge as TokenCharge;
use CloudPayments\Application\Service\Payment\VoidPayment;
use CloudPayments\Application\Service\Subscription\Cancel as SubscriptionCancel;
use CloudPayments\Application\Service\Subscription\Create as SubscriptionCreate;
use CloudPayments\Application\Service\Subscription\Find as SubscriptionFind;
use CloudPayments\Application\Service\Subscription\Get as SubscriptionGet;
use CloudPayments\Application\Service\Subscription\Update as SubscriptionUpdate;
use CloudPayments\Domain\Config\Config;
use CloudPayments\Domain\Request\ApplePay\StartSession as ApplePayStartSessionRequest;
use CloudPayments\Domain\Request\Order\Cancel as OrderCancelRequest;
use CloudPayments\Domain\Request\Order\Create as OrderCreateRequest;
use CloudPayments\Domain\Request\Payment\Card\Card as CardRequest;
use CloudPayments\Domain\Request\Payment\Card\Post3Ds as Post3DsRequest;
use CloudPayments\Domain\Request\Payment\Card\TopUp as TopUpRequest;
use CloudPayments\Domain\Request\Payment\Confirm as ConfirmRequest;
use CloudPayments\Domain\Request\Payment\Find as PaymentFindRequest;
use CloudPayments\Domain\Request\Payment\Get as PaymentGetRequest;
use CloudPayments\Domain\Request\Payment\PaymentList as PaymentListRequest;
use CloudPayments\Domain\Request\Payment\Refund as RefundRequest;
use CloudPayments\Domain\Request\Payment\Token\Token as TokenRequest;
use CloudPayments\Domain\Request\Payment\VoidPayment as VoidPaymentRequest;
use CloudPayments\Domain\Request\Subscription\Cancel as SubscriptionCancelRequest;
use CloudPayments\Domain\Request\Subscription\Create as SubscriptionCreateRequest;
use CloudPayments\Domain\Request\Subscription\Find as SubscriptionFindRequest;
use CloudPayments\Domain\Request\Subscription\Get as SubscriptionGetRequest;
use CloudPayments\Domain\Request\Subscription\Update as SubscriptionUpdateRequest;
use CloudPayments\Domain\Response\Response;

/**
 * Class CloudPayments
 * @package CloudPayments\Application
 */
class CloudPayments
{
    /**
     * @var Config
     */
    protected $config;

    /**
     * CloudPayments constructor.
     *
     * @param Config $config
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * @param CardRequest $request
     *
     * @return Response
     * @throws \Exception
     */
    public function paymentsCardsCharge(CardRequest $request): Response
    {
        return CardCharge::getInstance($this->config)->charge($request);
    }

    /**
     * @param CardRequest $request
     *
     * @return Response
     * @throws \Exception
     */
    public function paymentsCardsAuth(CardRequest $request): Response
    {
        return CardAuth::getInstance($this->config)->auth($request);
    }

    /**
     * @param Post3DsRequest $request
     *
     * @return Response
     * @throws \Exception
     */
    public function paymentsCardsPost3ds(Post3DsRequest $request): Response
    {
        return Post3Ds::getInstance($this->config)->post3ds($request);
    }

    /**
     * @param TokenRequest $request
     *
     * @return Response
     * @throws \Exception
     */
    public function paymentsTokensCharge(TokenRequest $request): Response
    {
        return TokenCharge::getInstance($this->config)->charge($request);
    }

    /**
     * @param TokenRequest $request
     *
     * @return Response
     * @throws \Exception
     */
    public function paymentsTokensAuth(TokenRequest $request): Response
    {
        return TokenAuth::getInstance($this->config)->auth($request);
    }

    /**
     * @param ConfirmRequest $request
     *
     * @return Response
     * @throws \Exception
     */
    public function paymentsConfirm(ConfirmRequest $request): Response
    {
        return Confirm::getInstance($this->config)->confirm($request);
    }

    /**
     * @param VoidPaymentRequest $request
     *
     * @return Response
     * @throws \Exception
     */
    public function paymentsVoid(VoidPaymentRequest $request): Response
    {
        return VoidPayment::getInstance($this->config)->void($request);
    }

    /**
     * @param RefundRequest $request
     *
     * @return Response
     * @throws \Exception
     */
    public function paymentsRefund(RefundRequest $request): Response
    {
        return Refund::getInstance($this->config)->refund($request);
    }

    /**
     * @param TopUpRequest $request
     *
     * @return Response
     * @throws \Exception
     */
    public function paymentsCardsTopUp(TopUpRequest $request): Response
    {
        return TopUp::getInstance($this->config)->topUp($request);
    }

    /**
     * @param PaymentGetRequest $request
     *
     * @return Response
     * @throws \Exception
     */
    public function paymentsGet(PaymentGetRequest $request): Response
    {
        return PaymentGet::getInstance($this->config)->get($request);
    }

    /**
     * @param PaymentFindRequest $request
     *
     * @return Response
     * @throws \Exception
     */
    public function paymentsFind(PaymentFindRequest $request): Response
    {
        return PaymentFind::getInstance($this->config)->find($request);
    }

    /**
     * @param PaymentListRequest $request
     *
     * @return Response
     * @throws \Exception
     */
    public function paymentsList(PaymentListRequest $request): Response
    {
        return PaymentList::getInstance($this->config)->list($request);
    }

    /**
     * @param SubscriptionCreateRequest $request
     *
     * @return Response
     * @throws \Exception
     */
    public function subscriptionsCreate(SubscriptionCreateRequest $request): Response
    {
        return SubscriptionCreate::getInstance($this->config)->create($request);
    }

    /**
     * @param SubscriptionGetRequest $request
     *
     * @return Response
     * @throws \Exception
     */
    public function subscriptionsGet(SubscriptionGetRequest $request): Response
    {
        return SubscriptionGet::getInstance($this->config)->get($request);
    }

    /**
     * @param SubscriptionFindRequest $request
     *
     * @return Response
     * @throws \Exception
     */
    public function subscriptionsFind(SubscriptionFindRequest $request): Response
    {
        return SubscriptionFind::getInstance($this->config)->find($request);
    }

    /**
     * @param SubscriptionUpdateRequest $request
     *
     * @return Response
     * @throws \Exception
     */
    public function subscriptionsUpdate(SubscriptionUpdateRequest $request): Response
    {
        return SubscriptionUpdate::getInstance($this->config)->update($request);
    }

    /**
     * @param SubscriptionCancelRequest $request
     *
     * @return Response
     * @throws \Exception
     */
    public function subscriptionsCancel(SubscriptionCancelRequest $request): Response
    {
        return SubscriptionCancel::getInstance($this->config)->cancel($request);
    }

    /**
     * @param OrderCreateRequest $request
     *
     * @return Response
     * @throws \Exception
     */
    public function ordersCreate(OrderCreateRequest $request): Response
    {
        return OrderCreate::getInstance($this->config)->create($request);
    }

    /**
     * @param OrderCancelRequest $request
     *
     * @return Response
     * @throws \Exception
     */
    public function orderCancel(OrderCancelRequest $request): Response
    {
        return OrderCancel::getInstance($this->config)->cancel($request);
    }

    /**
     * @param ApplePayStartSessionRequest $request
     *
     * @return Response
     * @throws \Exception
     */
    public function applePayStartSession(ApplePayStartSessionRequest $request): Response
    {
        return StartSession::getInstance($this->config)->startSession($request);
    }
}
