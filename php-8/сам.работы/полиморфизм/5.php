<?php
abstract class Order {
    protected $totalAmount;

    public function __construct($totalAmount) {
        $this->totalAmount = $totalAmount;
    }

    abstract public function calculateTotal();
}

class OnlineOrder extends Order {
    public function calculateTotal() {
        $discount = 0.10;
        $tax = 0.05;
        $totalAfterDiscount = $this->totalAmount * (1 - $discount);
        $totalAfterTax = $totalAfterDiscount * (1 + $tax);
        return $totalAfterTax;
    }
}

class StoreOrder extends Order {
    public function calculateTotal() {
        $discount = 0.05;
        $tax = 0.08;
        $totalAfterDiscount = $this->totalAmount * (1 - $discount);
        $totalAfterTax = $totalAfterDiscount * (1 + $tax);
        return $totalAfterTax;
    }
}

class TelephoneOrder extends Order {
    public function calculateTotal() {
        $discount = 0.15;
        $tax = 0.10;
        $totalAfterDiscount = $this->totalAmount * (1 - $discount);
        $totalAfterTax = $totalAfterDiscount * (1 + $tax);
        return $totalAfterTax;
    }
}

$onlineOrder = new OnlineOrder(100);
$storeOrder = new StoreOrder(100);
$telephoneOrder = new TelephoneOrder(100);

echo "Общая сумма онлайн-заказа: " . $onlineOrder->calculateTotal() . "<br>";
echo "Общая сумма заказа в магазине: " . $storeOrder->calculateTotal() . "<br>";
echo "Общая сумма телефонного заказа: " . $telephoneOrder->calculateTotal() . "<br>";