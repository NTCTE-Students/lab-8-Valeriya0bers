<?php
interface Database {
    public function connect();
    public function query($sql);
}

class MySQLDatabase implements Database {
    public function connect() {
        print("Подключение к базе данных MySQL.<br>");
    }

    public function query($sql) {
        print("Запрос MySQL: {$sql}<br>");
    }
}
class PostgreSQLDatabase implements Database {
    public function connect() {
        print("Подключение к базе данных PostgreSQL.<br>");
    }

    public function query($sql) {
        print("Запрос PostgreSQL: {$sql}<br>");
    }
}

class SQLiteDatabase implements Database {
    public function connect() {
        print("Подключение к базе данных SQLite.<br>");
    }

    public function query($sql) {
        print("Запрос SQLite: {$sql}<br>");
    }
}

$mysqlDatabase = new MySQLDatabase();
$postgresqlDatabase = new PostgreSQLDatabase();
$sqliteDatabase = new SQLiteDatabase();

$mysqlDatabase->connect();
$mysqlDatabase->query("SELECT * FROM users");

$postgresqlDatabase->connect();
$postgresqlDatabase->query("SELECT * FROM products");

$sqliteDatabase->connect();
$sqliteDatabase->query("SELECT * FROM orders");