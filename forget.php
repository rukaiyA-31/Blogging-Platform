
<html>
    <head>
        <title>User Authentication</title>
        <link rel="stylesheet" type="text/css" href="../css/mycs.css">
    </head>
    <body>
        <h1>Password AUTHENTICATION</h1>

<!-- Forgot Password Form -->
<div>
    <h2>Forgot Password?</h2>
    <form id="forgetForm" action="registered.php" method="POST">
        <div>Please enter your email to reset your password</div>
        <fieldset>
            <legend>Password Reset</legend>
            <table>
                <tr>
                    <td><label for="fremail">Email</label></td>
                    <td><input type="text" id="fremail" name="email" class="center" placeholder="Enter your email"><p id ="femailError" class="error-message"></p></td>
                </tr>
            </table>
            <button type="submit" id="para1">Send Reset Link</button>
        </fieldset>
        <script src="../jss/myjs2.js"></script>
    </form>
</div>
</body>
</html>
