<?php
trait Authenticatable {
    private $username;
    private $password;
    
    public function login($username, $password) {
        $this->username = $username;
        $this->password = $password;
        echo "Пользователь {$username} вошел в систему.<br>";
    }

    public function logout() {
        $this->username = null;
        $this->password = null;
        echo "Пользователь вышел из системы.<br>";
    }
}

class User {
    use Authenticatable;

}

$user = new User();
$user->login("john_doe", "securepassword");
$user->logout();
