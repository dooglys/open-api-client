# Open Api Client

Пример использования
```php
$client = new Client(DOMAIN, 'YOUR_TOKEN', ['base_uri' => BASE_URI]);

try {
    $data = $client->nomenclatureProductView ('fef36b6d-5ba3-452c-8f39-22a75912b674');
} catch (BadResponseException $exc) {

}
```

## Тестирование
- скопировать файл phpunit.xml.dist -> phpunit.xml
- заполнить правильными данными
- запустить ` vendor/bin/phpunit`


## Использование Postman для тестирования API
- [Postman](https://www.getpostman.com/apps)
- [Коллекция запросов](./postman/Collection.json)
