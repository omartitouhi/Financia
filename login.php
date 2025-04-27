<?php
// Simulate login processing and redirect based on role
$role = isset($_POST['role']) ? $_POST['role'] : '';
switch ($role) {
    case 'client':
        header('Location: client_dashboard.php');
        break;
    case 'teller':
        header('Location: teller_dashboard.php');
        break;
    case 'admin':
        header('Location: admin_dashboard.php');
        break;
    default:
        header('Location: index.php');
}
exit;
?>