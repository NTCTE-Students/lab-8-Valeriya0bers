<?php
trait Logger {
    public function log($message) {
        echo "Лог: {$message}<br>";
    }
}

class User {
    use Logger;

    public function createUser($name) {
        $this->log("Пользователь {$name} создан.");
    }

    public function updateUser($name) {
        $this->log("Пользователь {$name} обновлен.");
    }
}

class Order {
    use Logger;

    public function createOrder($orderId) {
        $this->log("Заказ с ID {$orderId} создан.");
    }

    public function updateOrder($orderId) {
        $this->log("Заказ с ID {$orderId} обновлен.");
    }
}

class Product {
    use Logger;

    public function createProduct($productName) {
        $this->log("Продукт {$productName} создан.");
    }

    public function updateProduct($productName) {
        $this->log("Продукт {$productName} обновлен.");
    }
}

$user = new User();
$user->createUser("John Doe");
$user->updateUser("John Doe");

$order = new Order();
$order->createOrder(12345);
$order->updateOrder(12345);

$product = new Product();
$product->createProduct("Laptop");
$product->updateProduct("Laptop");