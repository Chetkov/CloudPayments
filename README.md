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
$config = new \CloudPayments\Domain\Config\Config(
    'user',
    'password'
);
```

- Создаем экземпляр фасада
```php
$cloudPayments = \CloudPayments\Application\CloudPaymentsFactory::create($config);
```
Фасад содержит полный перечень методов доступных в API CloudPayments (https://cloudpayments.ru/Docs/Api).


Каждый метод, на входе, ожидает получить экземпляр класа запроса, на выходе отдаёт экземпляр класса Response.

- Создаём запрос 
```php
$subscriptionFindRequest = new \CloudPayments\Domain\Request\Subscription\Find('test@test.ru');
```

- Вызываем метод
```php
$response = $cloudPayments->subscriptionsFind($subscriptionFindRequest);
```

- Обрабатываем ответ
```php
if (!$response->isSuccess()) {
    throw new Exception($response->getMessage());
}

$model = $response->getModel();
//do something
```