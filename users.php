<?php
require 'sessions/session.php';
require 'config/db.php';
checkSession();

$stmt = $conn->query("SELECT * FROM users");
$users = $stmt->fetchAll();
?>

<h2>All Registered Users</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
        <th>Profile Photo</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['name']; ?></td>
            <td><?php echo $user['age']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><img src="uploads/<?php echo $user['profile_photo']; ?>" alt="Profile Photo" width="50"></td>
        </tr>
    <?php endforeach; ?>
</table>
