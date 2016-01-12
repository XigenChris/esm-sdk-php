# esm-sdk-php

[![Build Status](https://travis-ci.org/XigenChris/esm-sdk-php.svg?branch=master)](https://travis-ci.org/XigenChris/esm-sdk-php)

A simple PHP that allows you to interact with Xigen's Signature Manager's API
without needing to know the endpoints or make manual curl request.

## Requirements
- PHP >=5.4.38
- Curl installed (used via guzzle)
- API Key (You can get this via the ESM control panel)

## Installation
Installation is done via composer
```
composer require xigen/esm-sdk-php
```

```php
<?php
require 'vendor/autoload.php';

$ESM = new \Xigen\ESM([
    'URL' => 'https://signaturemanager.co.uk/api/rest/v2/',
    'APIKEY' => 'TestAPIKEY'
]);
```
(Replacing APIKEY with your own, the current one will work with a demo client)

## Usage
As an example we can a list of every user in the system
```php
$ESM->clientGetAll();
foreach ($ESM->getRequestData()->payload->Data as $user) {
    var_dump($user, $user->Email);
}
```

To get a users signature you would do something like this
```php
$ESM->templateGetUsersSignature('User\'s hash goes here');
$ESM->getRequestData()->payload;
```
