<?php

include("heder.php")

?>

<div class="top_navbar bodym">
                    <div class="">
                        <form action="user_authontication.php" method="post">
                        <CENTer>
                            <h2 class="font-vazir">ثبت نام در دیفال</h2>
                            <br>
                            <input class="input_login" type="text" name="fullname" required maxlength="140" placeholder="نام و نام خانوادگی*" style="padding:7px 30px;border: 1px solid #ddd;border-radius: 5px;width:370px;  box-shadow: 2px 2px 5px rgb(175, 175, 175)  ;">
                            <br><br><input class="input_login" type="text" name="username" required maxlength="60" placeholder="نام کاربری*"  style="padding:7px 30px;border: 1px solid #ddd;border-radius: 5px;  width:370px;  box-shadow: 2px 2px 5px rgb(175, 175, 175)  ;">
                            <br><br><input class="input_login" type="number" name="number" maxlength="200" placeholder="شماره تلفن*"  style="padding:7px 30px;border: 1px solid #ddd;border-radius: 5px;  width:370px;  box-shadow: 2px 2px 5px rgb(175, 175, 175)  ;">
                            <br><br><input class="input_login" type="password" name="password" required  placeholder="رمز عبور*"  style="padding:7px 30px;border: 1px solid #ddd;border-radius: 5px;   width:370px; box-shadow: 2px 2px 5px rgb(175, 175, 175)  ;">
                            <br><br><input class="input_login" type="password" name="repassword" required maxlength="200" placeholder="تکرار رمز عبور*"  style="padding:7px 30px;border: 1px solid #ddd;border-radius: 5px;  width:370px;  box-shadow: 2px 2px 5px rgb(175, 175, 175)  ;">
                            <br><br><input type="submit" class="btn btn-dark" value="ثبت نام" style="padding:10px 30px">
                        </CENTer>
                        </form>
                    </div>
                </div>
                
            </div>
            <div class="navbarr col-md-3">
                <div class="in_navbar">
                    <h2 class="a_in_navbar h1_filter">ورود</h2>
                    <hr>
                    <br>
                    <center><p>اگر ثبت نام کرده اید از این طریق وارد شوید</p></center>
                    <br><br><br><br>
                    
                    <form action="login_authontication.php" class="form-filter" method="post">
                       <input type="text" name="username" placeholder="نام کاربری"style="padding:7px 30px;border: 1px solid #ddd;border-radius: 5px;    box-shadow: 2px 2px 5px rgb(175, 175, 175)  ;">
                        <br><br>
                       <input type="password" name="password" placeholder="رمز عبور" style="padding:7px 30px;border: 1px solid #ddd;border-radius: 5px;    box-shadow: 2px 2px 5px rgb(175, 175, 175)  ;">
                        <input type="submit" class="btn btn-dark" value="ورود" style="margin:25px;padding:10px 25px">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>