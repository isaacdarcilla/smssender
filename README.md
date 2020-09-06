# 💌 SMS Sender

Laravel package that can send SMS SMS through D7 Networks API.

## ⬇️ Installation

The suggested installation method is via [composer](https://getcomposer.org/):

```sh
composer require "isaacdarcilla/smssender:^1.0.0"
```

## 👏 Prerequisite

You must register for an **SMS API Token** from [D7Networks](https://dashboard.d7networks.com/) first.

## ❓ Usage

Send a simple SMS using the code snippet below. In your laravel ```routes/web.php```,

```php
$token = "Your SMS API Token";
$to = "Your recepient number";
$from = "Your name";
$message = "Your message";

Route::get('/send', function () {
    $sms = new Smssender();
    return $sms->send($token, $to, $from, $message);
});
```

## 🔖 License
[MIT](https://github.com/isaacdarcilla/smssender/blob/master/LICENSE)
