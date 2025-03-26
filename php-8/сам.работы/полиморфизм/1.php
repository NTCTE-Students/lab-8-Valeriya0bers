<?php
interface Notifier {
    public function send($message);
}

class EmailNotifier implements Notifier {
    public function send($message) {
        print("Отправка email: {$message}<br>");
    }
}

class SMSNotifier implements Notifier {
    public function send($message) {
        print("Отправка SMS: {$message}<br>");
    }
}

class PushNotifier implements Notifier {
    public function send($message) {
        print("Отправка Push уведомления: {$message}<br>");
    }
}

$emailNotifier = new EmailNotifier();
$smsNotifier = new SMSNotifier();
$pushNotifier = new PushNotifier();

$emailNotifier->send("Привет, это ваш email уведомление!");
$smsNotifier->send("Привет, это ваше SMS уведомление!");
$pushNotifier->send("Привет, это ваше Push уведомление!");