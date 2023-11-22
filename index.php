<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .home-page {
            width: 80%;
            margin: 50px auto;
            text-align: center;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #333;
        }

        p {
            margin-bottom: 15px;
            font-size: 18px;
            color: #444;
        }

        a {
            text-decoration: none;
            color: #007bff;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #0056b3;
        }

        p:last-child a {
            color: #e74c3c;
        }

        p:last-child a:hover {
            color: #c23a2a;
        }
    </style>
</head>
<body>
    <div class="home-page">
        <h1>Welcome to the Home Page</h1>
        <p>Existing User? <a href="login.php">Login</a></p>
        <p>New User? <a href="register.php">Register</a></p>
        <p>Forgot Password? <a href="#">Coming Soon</a></p>
    </div>
</body>
</html>
