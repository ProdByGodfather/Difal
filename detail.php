<?php
include('heder.php');

$link = mysqli_connect("localhost","root","","difal");

$id = $_GET['id'];
$query = "SELECT * FROM prod WHERE id='$id'";
$result = mysqli_query($link,$query);

$row = mysqli_fetch_array($result);

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
if($row)
{
    $user = $row['username'];
    $user_query = "SELECT * FROM users WHERE username='$user'";
    $user_result = mysqli_query($link,$user_query);
    $users = mysqli_fetch_array($user_result);
    if($users)
    {
        
    }
    else{
        exit('مشکلی پیش آمد');
    }
}
?>
                <div class="top_navbar bodym">
                    <div class="row pad-left-right">
                        <div class="row">
                            <div class="col-md-6">
                                <center>
                                <img style="padding: 30px;width: 100%;" src="<?php if($row['image'] == '' ){echo('images/logo.png');}else{echo("images/".$row['image']);} ?>" alt="">
                                </center>
                            </div>
                            <div class="col-md-6" style="padding: 30px"><h5> نام کالا: </5>
                                <h2><?php echo($row['name'])?></h2>
                                <br>
                                <br>
                                <h5>توضیحات :</h5>
                                <p><?php echo($row['description']) ?></p>
                                <br>
                                <h5>آدرس: </h5>
                                <p><?php echo($row['location']) ?></p></div>

                                <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6"  style="width: 49%;position: relative">
                                    <p>قیمت کالا: <span style="color:#696969;"><?php echo($row['price']) ?> تومن </span></p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6" style="width: 49%;position: relative">
                                    <p>وضیعت کالا: <span style="color:#696969;"><?php echo($is_new) ?></span></p>
                                </div>




                        </div>

                    </div>    
                </div>
                
            </div>
            <div class="navbarr col-md-3">
                <div class="in_navbar">
                    <h2 class="a_in_navbar h1_filter">مشخصات آگهی کننده</h2>
                    <hr>
                    <center style="font-family:iran;">
                    <br><br><br>
                    <h5>نام آگهی کننده</h5>
                    <p><?php echo($users['fullname']) ?></p><br><br>
                    <h5>نام کاربری آگهی کننده</h5>
                    <p><?php echo($users['username']) ?></p><br><br>
                    <h5>شماره تلفن آگهی کننده</h5>
                    <p style="color:darkred"><?php echo($users['number']) ?></p>
                    </center>
                </div>
            </div>
        </div>
    </div>
</body>
</html>