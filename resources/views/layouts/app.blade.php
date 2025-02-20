<?php
// Sample user data
$user = [
    'name' => 'Admin AN',
    'email' => 'adminan@gmail.com',
    'role' => 'Administrator',
    'joined' => 'February 06, 2025',
    'profile_picture' => 'https://via.placeholder.com/150'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
            padding: 10px;
        }
        .navbar a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            float: left;
        }
        .navbar a:hover {
            background-color: #575757;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .profile-header {
            text-align: center;
        }
        .profile-header img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }
        .edit-btn {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 16px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .edit-btn:hover {
            background-color: #0056b3;
        }
        .account-details {
            margin-top: 20px;
        }
        .account-details h3 {
            border-bottom: 2px solid #007BFF;
            padding-bottom: 5px;
        }
        .account-details ul {
            list-style: none;
            padding: 0;
        }
        .account-details li {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="#">Admin</a>
    </div>

    <div class="container">
        <div class="profile-header">
            <h1>My Profile</h1>
            <img src="siswa.webp" alt="Profile Picture">
            <br>

        </div>

        <div class="account-details">
            <h3>Account Details</h3>
            <ul>
                <li><strong>Username:</strong> <?php echo $user['name']; ?></li>
                <li><strong>Email:</strong> <?php echo $user['email']; ?></li>
                <li><strong>Role:</strong> <?php echo $user['role']; ?></li>
                <li><strong>Joined:</strong> <?php echo $user['joined']; ?></li>
            </ul>
        </div>
    </div>
</body>
</html>
