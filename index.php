<?php
session_start();
require_once 'config/Database.php';
require_once 'models/User.php';
require_once 'models/Student.php';
require_once 'controllers/AuthController.php';
require_once 'controllers/StudentController.php';

// Initialize controllers
$auth = new AuthController();
$student = new StudentController();

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['register'])) {
        $auth->register($_POST);
    } elseif (isset($_POST['login'])) {
        $auth->login($_POST);
    } elseif (isset($_POST['create_student'])) {
        $student->create($_POST);
    }
} elseif (isset($_GET['logout'])) {
    $auth->logout();
} elseif (isset($_GET['delete_student'])) {
    $student->delete($_GET['delete_student']);
}

// Include layout
include 'views/layout.php';
?>
