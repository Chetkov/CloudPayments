<?php
require_once 'vendor/autoload.php';

use CloudPayments\Application\CloudPaymentsFactory;
use CloudPayments\Domain\Config\Config;
use CloudPayments\Domain\Request\Subscription\Find;

$config = new Config(
    'user',
    'password'
);

$cloudPayments = CloudPaymentsFactory::create($config);

$subscriptionFindRequest = new Find('test@test.ru');
$response = $cloudPayments->subscriptionsFind($subscriptionFindRequest);
if (!$response->isSuccess()) {
    throw new Exception($response->getMessage());
}
//do something
