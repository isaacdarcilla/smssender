# SMS Sender

Laravel package that can send SMS SMS through D7 Networks API.

## Installation

The suggested installation method is via [composer](https://getcomposer.org/):

```sh
composer require "isaacdarcilla/smssender:^1.0.0"
```

## Usage

Send a simple SMS using the code snippet below. In your laravel ```routes/web.php```,

```php
Route::get('/send', function () {
    $sms= new Smssender();
    return $sms->send('eGV1YTQwNDA6eU9kZlBaTXM=', '+639509342323', 'Isaac', 'This is a test message.');
});

```