<?php
    
include('heder.php');

$link = mysqli_connect("localhost","root","","difal");
if(mysqli_connect_errno())
{
    exit("خطا: ".mysqli_connect_error());
}
$query = "SELECT * FROM prod";
$result = mysqli_query($link,$query);

// while( $row = $result->fetch_assoc() ){
//     echo "<li>" . $row['name'] . "(" .$row['username'] . ")</li>";
// }



?>
                <div class="top_navbar bodym">
                    <div class="row pad-left-right">
<?php
while( $row = $result->fetch_assoc() ){

$is_new = "";
if($row['new'] == "no_new")
{
    $is_new = "دست دوم";
}
elseif($row['new'] == 'new')
{
    $is_new = "کاملا سالم و نو";
}
else{
    $is_new = "دست دوم تمیز";
}
?>
                        <a href="detail?id=<?php echo($row['id']) ?> ">
                        <div class="mahsool col-md-4 col-lg-4 col-sm-6 col-xs-6">
                            <div class="row padmah">
                                <div class="matn col-md-7 col-xs-7">
                                    <h6><?php echo($row['name']) ?></h6>
                                    
                                    <div class="bottomm">
                                        <span class="font-size-10">توسط <?php echo($row['username']) ?></span>
                                        <br>    
                                        <span class="font-size-10">قیمت <?php echo($row['price']) ?></span>
                                        <br>
                                        <span class="font-size-10"> <?php echo($is_new) ?></span>
                                    </div>
                                </div>
                                
                                <img src="<?php if($row['image'] == '' ){echo('images/logo.png');}else{echo("images/".$row['image']);} ?>" class="pimage col-md-5 col-xs-5" alt="image-mahsool">
                            </div>
                        </a>

                        
                        </div>
                        <?php
}
                        ?>
                    </div>    
                </div>
                
            </div>
            <div class="navbarr col-md-3">
                <div class="in_navbar">
                    <h2 class="a_in_navbar h1_filter">دیفال</h2>
                    <hr>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                        <center>
                            <p>
                                 مرجع آگهی های فروش شما در هر زمینه و هر سلیقه در سهولت و بازدید بالا
                            </p>
                            <p>
                                با دیفال راحتی را برای خود به ارمغان بیاورید
                            </p>
                        </center>
                </div>
            </div>
        </div>
    </div>
</body>
</html>