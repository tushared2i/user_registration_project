<?php
require 'config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $profile_photo = $_FILES['profile_photo']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($profile_photo);
    move_uploaded_file($_FILES['profile_photo']['tmp_name'], $target_file);

    $stmt = $conn->prepare("INSERT INTO users (name, age, email, password, profile_photo) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$name, $age, $email, $password, $profile_photo]);

    header('Location: login.php');
}
?>

<form action="register.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Name" required>
    <input type="number" name="age" placeholder="Age" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="file" name="profile_photo" required>
    <button type="submit">Register</button>
</form>
