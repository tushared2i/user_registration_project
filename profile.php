<?php
require 'sessions/session.php';
require 'config/db.php';
checkSession();

$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch();
?>

<h2>User Profile</h2>
<p>Name: <?php echo $user['name']; ?></p>
<p>Age: <?php echo $user['age']; ?></p>
<p>Email: <?php echo $user['email']; ?></p>
<p><img src="uploads/<?php echo $user['profile_photo']; ?>" alt="Profile Photo" width="100"></p>
