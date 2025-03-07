<?php
require_once 'models/User.php';

class AuthController {
    public function register($data) {
        $user = new User();
        $user->username = $data['username'];
        $user->email = $data['email'];
        $user->password = $data['password'];

        if ($user->register()) {
            echo "Registration successful!";
        } else {
            echo "Registration failed!";
        }
    }

    public function login($data) {
        $user = new User();
        $user->email = $data['email'];
        $user->password = $data['password'];

        $loggedInUser = $user->login();
        if ($loggedInUser) {
            $_SESSION['user_id'] = $loggedInUser['id'];
            $_SESSION['username'] = $loggedInUser['username'];
            header("Location: index.php");
        } else {
            echo "Login failed!";
        }
    }

    public function logout() {
        session_destroy();
        header("Location: index.php");
    }
}
?>
