# CloudPayments
Библиотека для работы с API платежного сервиса CloudPayments

# Требования
- Минимальная версия PHP - 7.1

# Установка
```
composer require "v.chetkov/cloud-payments:*"
```

# Использование
- Создаем экземпляр конфига
```php
<?php
$config = new Chetkov\CloudPayments\Config(
    'user',
    'password'
);
```

- Создаем экземпляр фасада
```php
<?php
$cloudPayments = Chetkov\CloudPayments\CloudPaymentsFactory::create($config);
```
Фасад содержит полный перечень методов доступных в API CloudPayments (https://cloudpayments.ru/Docs/Api).


Каждый метод, на входе, ожидает получить экземпляр класа запроса, на выходе отдаёт экземпляр класса Response.

- Создаём запрос 
```php
<?php
$subscriptionFindRequest = new Chetkov\CloudPayments\Request\Subscription\Find('test@test.ru');
```

- Вызываем метод
```php
<?php
$response = $cloudPayments->subscriptionsFind($subscriptionFindRequest);
```

- Обрабатываем ответ
```php
<?php
if (!$response->isSuccess()) {
    throw new RuntimeException($response->getMessage());
}

$model = $response->getModel();
//do something
```