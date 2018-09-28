<?php
require_once 'vendor/autoload.php';

use Chetkov\CloudPayments\CloudPaymentsFactory;
use Chetkov\CloudPayments\Config;
use Chetkov\CloudPayments\Request\Subscription\Find;

$config = new Config(
    'user',
    'password'
);

$cloudPayments = CloudPaymentsFactory::create($config);

$subscriptionFindRequest = new Find('test@test.ru');
$response = $cloudPayments->subscriptionsFind($subscriptionFindRequest);
if (!$response->isSuccess()) {
    throw new RuntimeException($response->getMessage());
}
//do something
