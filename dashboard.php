<?php
require 'sessions/session.php';
checkSession();

echo "Welcome to your dashboard!";
?>

<a href="profile.php">View Profile</a>
<a href="users.php">View All Users</a>
<a href="logout.php">Logout</a>
