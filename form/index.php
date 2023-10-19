<?php 
include_once("config.php");

?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/index.css">
    <script src="jquery/jquery-3.6.4.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<style>
    .alert-msg {
        width: fit-content;
        padding: 15px;
        border-radius: 25px;
        background-color: #276ae7 !important;
        color: #ffffff;
        position: absolute;
        top: 15px;
        left: 0;
        right: 0;
        margin-left: auto !important;
        margin-right: auto !important;
        z-index: 10;
    }
</style>
<body>

    <div class="bg">
        
    </div>

    <div class="reg-form">
        <h2>Registration Form</h2>
        <br>
        
        <form action="process.php" method="post" id="regForm">
            <small>Last Name</small>
            <input type="text" name="lastname" id="lastName" required>

            <small>First Name</small>
            <input type="text" name="firstname" id="firstName" required>

            <small>Email</small>
            <input type="text" name="email" id="email" required>

            <small>Password</small>
            <input type="password" name="password" id="pass" required>

            <label for="viewPass" class="lblView">
                <input type="checkbox" name="check" id="viewPass">&nbsp;
                See Password
            </label><br>

            <input type="submit" class="reg-btn" id="regBtn" name="submit-form" value="Submit">
        </form>
    </div>
    

    <div class="footer">
        <p>John Ray C. Escarlan <span>&nbsp;</span> BSIT - AI32</p>
    </div>

    <?php if(isset($_SESSION["msg"])): ?>
        <h5 class="alert-msg"><?php echo $_SESSION["msg"]; ?></h5>

        <script>
            $(document).ready(function() {
                $(".alert-msg").fadeIn(900, function() { $(".alert-msg").fadeOut(2000); });
            });
        </script>
    <?php endif; unset($_SESSION["msg"]); ?>

    <script>
        $(document).ready(function() {

            let checkbox = $("#viewPass");
            checkbox.click(() => {
                if(checkbox.prop("checked")) {
                    $("#pass").attr("type", "text");
                } else {
                    $("#pass").attr("type", "password");
                }
            });


        });
    </script>
</body>
</html>
