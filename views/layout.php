<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .navbar {
            margin-bottom: 30px;
        }
        .btn-custom {
            width: 100%;
        }
        .btn-danger i {
            margin-right: 8px; 
        }
        .alert {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 9999;
        text-align: center;
        padding: 15px;
        font-size: 1.2em;
        transition: opacity 1s ease-out;
    }
    .alert-success {
        background-color: #28a745;
        color: white;
    }
    .alert-error {
        background-color: #dc3545;
        color: white;
    }
    .fade-out {
        animation: fadeOut 5s forwards;
    }
    @keyframes fadeOut {
        0% {
            opacity: 1;
        }
        80% {
            opacity: 1;
        }
        100% {
            opacity: 0;
            transform: translateY(-50px);
        }
    }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Student Management System</a>          
            </div>
        </div>
    </nav>

    <div class="container">
        <!-- Notification Area -->
           <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-<?php echo $_SESSION['message']['type']; ?> fade-out" role="alert">
                <?php echo htmlspecialchars($_SESSION['message']['content']); ?>
            </div>
            <?php unset($_SESSION['message']); ?>
        <?php endif; ?>
        <?php
        
        // Include the appropriate view
        if (!isset($_SESSION['user_id'])) {
            include 'views/register.php';
            include 'views/login.php';
        } else {
            include 'views/welcome.php';
            include 'views/add_student.php';
            include 'views/student_list.php';
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
