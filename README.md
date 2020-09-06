# 💌 SMS Sender

Laravel package that can send SMS through D7 Networks API.

## ⬇️ Installation

The suggested installation method is via [composer](https://getcomposer.org/):

```sh
composer require "isaacdarcilla/smssender:^1.0.0"
```

## 👏 Prerequisite

You must register for an **SMS API Token** from [D7Networks](https://dashboard.d7networks.com/) first.

## ❓ Usage

Send a simple SMS using the code snippet below. In your laravel ```routes/web.php```,
add the code snippets. The `$token` parameter is your SMS API Token from [D7Networks](https://dashboard.d7networks.com/), `$to` parameter is the receiver phone number, `$from` is the sender, `$message` parameter is your message to be sent. To enable debug, set the debug to `true` and `false` to disable it.

```php
Route::get('/send', function () {
    $sms = new Smssender();
    return $sms->send($token, $to, $from, $message, true);
});
```

## 🔖 License
[MIT License](https://github.com/isaacdarcilla/smssender/blob/master/LICENSE)
