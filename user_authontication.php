<?php
session_start();

$link = mysqli_connect('localhost','root','','difal');
if(mysqli_connect_errno())
{
    echo("اتصال به دیتابیس انجام نشد");
}
if(isset($_POST["fullname"]) && !empty($_POST["fullname"]) && 
isset($_POST["username"]) && !empty($_POST["username"]) && 
isset($_POST["password"]) && !empty($_POST["password"]) && 
isset($_POST["repassword"]) && !empty($_POST["repassword"]) 
&& isset($_POST["number"]) && !empty($_POST["number"]))
{
    $fullname = $_POST["fullname"];
    $username = $_POST['username'];
    $number = $_POST['number'];
    $pass = $_POST["password"];
    $repass = $_POST["repassword"];
}
else
{
    exit("برخی فیلد ها خالی وارد شده اند");
}

    if($pass == $repass)
    {
        $q = "INSERT INTO users(fullname,username,password,number,type) VALUES('$fullname','$username','$pass','$number','0')";
        if($query = mysqli_query($link,$q) === true)
        {
            $_SESSION["is_login"] = true;
            $_SESSION['name'] = $fullname;
            $_SESSION['username'] = $username;
            ?>
                <script type="text/javascript">
                        location.replace("index.php")
                </script>
            <?php
        }
        else{
            exit("اتصال انجام نشد");
        }
    
    }
    else
    {
        exit("رمز عبور با تکرار آن مساوری نیست");
    }


?>