<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['user'];
include 'header.inc';
?>

<h3>Welcome, <?php echo htmlspecialchars($username); ?>!</h3>
<p>You have successfully logged in.</p>

<?php include 'footer.inc'; ?>


