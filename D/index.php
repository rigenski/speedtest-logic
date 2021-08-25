<?php
session_start();
    if(isset($_POST['submit'])) {
        if($_POST['key'] == $_SESSION['key']) {
            $msg = "<b>Success!</b> Right Code";
        } else {
            $msg = "<b>Error!<b> Wrong Captcha Code";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP VERIF CHAPTCHA</title>
    <style>
        header {
            display: flex;
            justify-content: center;
        }

        .container {
            width: 14em;
            margin: auto;
            background-color: rgb(161, 161, 161);
            padding:2em;
            border-radius: 10px;
        }

        img {
            width: 100%;
        }

        form {
            display: flex;
        }

        input {
            width: 100%;
        }

    </style>
</head>
<body>
    <header>
        <h1>PHP VERIFICATION CHAPCTHA</h1>
    </header>
    <div class="container">
        <img src="key.php" alt="">
        <form action="" method="post">
            <input type="text" name="key">
            <button type="submit" name="submit">Submit</button>
        </form>
        <h3>
            <?php if(isset($msg)) {
                echo $msg;
            }
            ?>
        </h3>
    </div>
</body>
</html>