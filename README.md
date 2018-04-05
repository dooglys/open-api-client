# Dooglys Open Api Client

# Установка

```bash
composer require dooglys/open-api-client
```

# Пример использования
```php
$client = new Client('your_domain', 'your_token');

try {
    $data = $client->nomenclatureProductView ('product_uuid');
} catch (BadResponseException $exc) {

}
```

## Тестирование
- Скопировать файл phpunit.xml.dist -> phpunit.xml
- Указать правильные значения констант для доступа к api серверу 
- Запустить `vendor/bin/phpunit`


## Использование Postman для тестирования API
- [Postman](https://www.getpostman.com/apps)
- [Коллекция запросов](./postman/Collection.json)
