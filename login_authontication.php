<?php
session_start();

if(isset($_POST["username"]) && !empty($_POST["username"]) && 
isset($_POST["password"]) && !empty($_POST["password"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
}
else
{
    exit("برخی فیلد ها مقدار دهی نشده اند");
}

$link = mysqli_connect("localhost","root","","difal");
if(mysqli_connect_errno())
{
    exit("خطا: ".mysqli_connect_error());
}

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($link,$query);

$row = mysqli_fetch_array($result);

if($row)
{
    $_SESSION["is_login"] = true;
    $_SESSION['name'] = $row["fullname"];
    $_SESSION['username'] = $username;
    ?>
        <script type="text/javascript">
                location.replace("index.php")
        </script>
    <?php
}
else
{
    echo("<br><br><br><br><center><h2>چنین نام کاربری و رمز عبوری موجود نیست</h2><br><h4><a href='register.php'>دوباره تلاش کنید</a></h4></center>");
}

?>