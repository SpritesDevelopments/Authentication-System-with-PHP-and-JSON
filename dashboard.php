<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Retrieve user data
$userData = json_decode(file_get_contents('data/users.json'), true);
$username = $_SESSION['username'];

$user = array_filter($userData['users'], function ($u) use ($username) {
    return $u['username'] === $username;
});

// $user now contains the details of the logged-in user
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .dashboard {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .welcome {
            text-align: center;
            margin-bottom: 30px;
        }

        .user-info {
            border-bottom: 1px solid #ccc;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }

        .user-info h2 {
            margin-bottom: 10px;
            color: #3498db;
        }

        .user-info p {
            margin-bottom: 8px;
        }

        .logout-btn {
            display: block;
            width: 100%;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
            border: none;
            border-radius: 4px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .logout-btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <div class="welcome">
            <h1>Welcome, <?php echo $username; ?>!</h1>
            <p>This is your dashboard.</p>
        </div>

        <div class="user-info">
            <h2>User Information</h2>
            <?php foreach ($user as $userData): ?>
                <p><strong>Username:</strong> <?php echo $userData['username']; ?></p>
                <p><strong>Email:</strong> <?php echo $userData['email']; ?></p>
            <?php endforeach; ?>
        </div>

        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>
