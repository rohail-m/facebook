<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>facebook</title>
    <?php
    include "./boot_css.php";
    ?>
    <style>
        body{
            background-color:#F0F2F5;
        }
        .cont{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .reg-form{
            height:100vh;
            width:100vw;
            position: fixed;
            top: 0;
            background:rgba(255,255,255,0.6);
            z-index: 222;
            display: flex;
            justify-content: center;
            align-items: center;
            display: none;
        }
        
    </style>
</head>
<body>
    <div class="container cont">
        <div class="row">
            <div class="col-lg-7">
                <img width="350px" height="200px" src="https://logohistory.net/wp-content/uploads/2022/10/Facebook-Logo-2019.png" alt="">
                <h3>Facebook helps you connect and share with the people in your life </h3>
            </div>
            <div class="col-lg-5">
                <?php
                include "./login_form.php";
                ?>
            </div>
        </div>
    </div>
        <div class="reg-form">
        <?php
        include "./registration-form.php";
        ?>
        </div>

    <?php include "./boot_js.php"; 
    ?>
</body>
</html>