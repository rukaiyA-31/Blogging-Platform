<html>
    <head>
        <title>User Authentication</title>
        <link rel="stylesheet" type="text/css" href="../css/mycs.css">
    </head>
    <body>
        <h1>REGISTER AUTHENTICATION</h1>
<!-- User Registration Form -->
<div>
    <h2>Signup</h2>
    <form id="userForm" action="user.php" method="POST">
        <div>Please fill up this form</div>
        <fieldset>
            <legend>Register</legend>
            <table>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="text" id="email" name="email" class="center" placeholder="Enter your email"><p id ="emailError" class="error-message"></p></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input type="password" id="password" name="password" class="center" placeholder="Enter your password"><p id="passwordError" class="error-message"></p></td>
                </tr>
                <tr>
                    <td><label for="confirmPassword">Confirm Password</label></td>
                    <td><input type="password" id="confirmPassword" name="confirmPassword" class="center" placeholder="Confirm your password"><p id="cpasswordError" class="error-message"></p></td>
                </tr>
            </table>
            <button type="submit" id="para1">Sign Up</button>
        </fieldset>
        <script src="../jss/myjs.js"></script>
    </form>
</div>
</body>
</html>
