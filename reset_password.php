<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the email is submitted via POST
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        
        // Here you'd typically check if the email exists in your database
        // You'd generate a unique token, save it in the database and send it via email
        // For this example, let's assume a token is generated and stored in a variable $resetToken
        $resetToken = generateUniqueToken(); // Function to generate a token
        
        // Now, you'd send an email to the user with a link containing this token
        // The link might look something like: reset_password_confirm.php?token=$resetToken
        // For simplicity, let's just show the token here
        echo "Token: " . $resetToken;
        // In a real scenario, you would send an email with this token to the user's email address.
    }
}

function generateUniqueToken(){
    // Generate a unique token, for example:
    return bin2hex(random_bytes(16)); // Generates a 32-character hexadecimal token
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="reset-password-form">
        <!-- Your HTML form for resetting password -->
        <form method="post" action="">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            
            <input type="submit" value="Reset Password">
        </form>
    </div>
</body>
</html>
