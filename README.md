# Open Api Client

Пример использования
```php
$client = new Client(['base_uri' => 'http://docker.dooglys.local:8222/api/']);
$client->setTenantDomain('google');

// установка токена
$client->setAccessToken('access_token');

try {
    $data = $client->nomenclatureProductView ('fef36b6d-5ba3-452c-8f39-22a75912b674');
} catch (BadResponseException $exc) {

}
```

## Тестирование
- скопировать файл phpunit.xml.dist -> phpunit.xml
- заполнить правильными данными
- запустить ` vendor/bin/phpunit`
