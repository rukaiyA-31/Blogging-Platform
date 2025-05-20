<?php
session_start();
setcookie("nishi1","1",time()+86400);
if(!isset($_COOKIE["nishi1"])){
    echo "Welcome to my site";
}
else{
    echo "You have allready visited";
}
$_SESSION["user"]='Welcome to next page';
?>

<html>


    <head>
        <title>Blogging platform</title>
        <link rel="stylesheet" href="../css/blogingcs.css">
    </head>
    <body>
        <button id="signinBtn" type="button" onclick="location.href='user.php'">Sign In</button>


        <form action="user.html" method="POST" class="form-container">
            <div class="content-center">
                <h4>Blogging Platform</h4>
                <h1>Publish your passion,Your way</h1>
                
                <h5>Create a unique and beautiful vlog easily</h5>
                <div class="center">Create your vlog</div>
            </div>
        </form>
    </body>
</html>
