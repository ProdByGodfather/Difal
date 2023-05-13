<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>دیفال</title>
</head>
<body dir="rtl">
    <div class="content">
        <div class="row">
            <div class="menu col-md-9">
                <div class="top_navbar">
                    <div class="nnnn">
                        <img src="images/logo.png" class="logo" alt="Logo">
                        <a href="index.php" class="a_in_navbar">صفحه اصلی</a>
                        <?php
                        if(isset($_SESSION["is_login"]) && $_SESSION["is_login"] === true)
                        {
                            ?>
                            <a href="new.php" class="a_in_navbar">ثبت آگهی</a>
                            <a href="logout.php" class="a_in_navbar"> خروج (<?php echo($_SESSION["name"]) ?>)</a>
                            <?php
                        }
                        else{
                            ?>
                            <a href="register.php" class="a_in_navbar">ورود | ثبت نام</a> 
                            <?php
                        }
                        
                        ?>
                        <form action="" method="get" class="form_search">
                            <input type="search" name="search" placeholder="جستجو کنید..." class="search_form">
                            <button type="submit" class="button_search">جستجو</button>
                        </form>
                    </div>
                      
                    
                </div>  