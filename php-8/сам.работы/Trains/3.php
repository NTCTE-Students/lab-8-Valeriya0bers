<?php
trait Validatable {
    public function validate($data) {
        foreach ($data as $key => $value) {
            if (empty($value)) {
                return "{$key} cannot be empty.";
            }
        }
        return "Validation passed.";
    }
}

class RegistrationForm {
    use Validatable;

    public function submit($data) {
        $validationResult = $this->validate($data);
        echo $validationResult;
    }
}

class LoginForm {
    use Validatable;

    public function submit($data) {
        $validationResult = $this->validate($data);
        echo $validationResult;
    }
}

$registrationData = ['username' => 'JohnDoe', 'password' => ''];
$registrationForm = new RegistrationForm();
$registrationForm->submit($registrationData);

echo "<br>";

$loginData = ['username' => 'JohnDoe', 'password' => 'password123'];
$loginForm = new LoginForm();
$loginForm->submit($loginData);