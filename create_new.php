<?php
session_start();

$link = mysqli_connect("localhost","root","","difal");
if(mysqli_connect_errno())
{
    exit("خطا: ".mysqli_connect_error());
}

if(isset($_POST["name"]) && !empty($_POST["name"]) && 
isset($_POST["description"]) && isset($_POST["price"])&& isset($_POST["new"]) && isset($_POST["location"]))
{
    $name = $_POST["name"];
    $price = $_POST['price'];
    $new = $_POST['new'];
    $location = $_POST['location'];
    $description = $_POST["description"];
    $username = $_SESSION['username'];
    $file_name = $_FILES['image']['name'];
    $temp_name = $_FILES['image']['tmp_name'];
    $folder = "images/".$file_name;
}
else
{
    exit("برخی فیلد ها خالی وارد شده اند");
}
        $q = "INSERT INTO prod(name,description,price,username,new,location,image) VALUES('$name','$description','$price','$username','$new','$location','$file_name')";
        if($query = mysqli_query($link,$q) === true)
        {
            if (move_uploaded_file($temp_name, $folder))  {
                echo("Image uploaded successfully");
                ?>
                <script type="text/javascript">
                    location.replace("index.php")
                </script>
                <?php
            }else{
                echo("Failed to upload image");
                ?>
                <script type="text/javascript">
                    location.replace("index.php")
                </script>
                <?php
            }
            ?>
                <script type="text/javascript">
                        location.replace("index.php")
                </script>
            <?php
            
        }
        else{   

            exit("اتصال انجام نشد");
        }
    




?>