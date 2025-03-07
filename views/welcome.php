<?php
// Split the username into an array by space and take the first part (first name)
$firstName = explode(' ', $_SESSION['username'])[0];
?>

<h2 class="text-center mb-4 display-4 text-primary">Welcome, <?php echo htmlspecialchars($firstName); ?>!</h2>
<div class="d-flex justify-content-center">
    <a href="?logout" class="btn btn-danger btn-md px-3 py-1 mb-3">Logout <i class="fas fa-sign-out-alt ms-2"></i></a>
</div>
