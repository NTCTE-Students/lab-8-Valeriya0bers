<?php
abstract class Payment {
    abstract public function process();
}

class CreditCardPayment extends Payment {
    public function process() {
        print("Оплата с помощью кредитной карты.<br>");
    }
}

class PayPalPayment extends Payment {
    public function process() {
        print("Оплата через PayPal.<br>");
    }
}

class BankTransferPayment extends Payment {
    public function process() {
        print("Оплата банковским переводом.<br>");
    }
}

$creditCardPayment = new CreditCardPayment();
$payPalPayment = new PayPalPayment();
$bankTransferPayment = new BankTransferPayment();

$creditCardPayment->process();
$payPalPayment->process();
$bankTransferPayment->process();
?>