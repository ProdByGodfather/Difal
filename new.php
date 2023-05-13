<?php
include("heder.php");

if($_SESSION["is_login"] != true)
{
    exit("برای ثبت آگهی میبایست ثبت نام کنید");
}

?>

<div class="top_navbar bodym">
                    <div class="">
                        <form action="create_new.php" enctype="multipart/form-data" method="post">
                        <CENTer>
                            <h2 class="font-vazir">آگهی خودت رو ثبت کن</h2>
                            <br>
                            <input class="input_login" type="text" name="name" required maxlength="140" placeholder="نام محصول" style="padding:7px 30px;border: 1px solid #ddd;border-radius: 5px;width:370px;  box-shadow: 2px 2px 5px rgb(175, 175, 175)  ;">
                            <br><Br><textarea class="input_login" type="text" required="" placeholder="توضیحات محصول" name="description" style="padding:7px 30px;border: 1px solid #ddd;border-radius: 5px;width:370px;  box-shadow: 2px 2px 5px rgb(175, 175, 175)  ;"></textarea>
                            <br><br><input class="input_login" type="number" name="price" required maxlength="200" placeholder="قیمت"  style="padding:7px 30px;border: 1px solid #ddd;border-radius: 5px;  width:370px;  box-shadow: 2px 2px 5px rgb(175, 175, 175)  ;">
                            <br><br><input class="input_login" type="text" name="location" required maxlength="1000" placeholder="آدرس و مکان"  style="padding:7px 30px;border: 1px solid #ddd;border-radius: 5px;  width:370px;  box-shadow: 2px 2px 5px rgb(175, 175, 175)  ;">
                            <br><br><div style="padding:7px 30px;border: 1px solid #ddd;border-radius: 5px;  width:370px;  box-shadow: 2px 2px 5px rgb(175, 175, 175)  ;"><label for="">عکس :</label><input class="input_login" type="file" name="image" ></div>
                            <br><select class="input_login" type="number" name="new" required  placeholder="شماره تلفن "  style="padding:7px 30px;border: 1px solid #ddd;border-radius: 5px;   width:370px; box-shadow: 2px 2px 5px rgb(175, 175, 175)  ;">
                            <option value="new">نو</option>
                            <option value="no_new">دست دوم</option>
                            <option value="clen_new">دست دوم تمیز</option>
</select>
                            <br><br><input type="submit" class="btn btn-dark" value="ثبت آگهی" style="padding:10px 30px">
                        </CENTer>
                        </form>
                    </div>
                </div>
                
            </div>
            <div class="navbarr col-md-3">
                <div class="in_navbar">
                    <h2 class="a_in_navbar h1_filter">ثبت آگهی</h2>
                    <hr>
                    <br><br><br><br><br><br>
                    <center><p>برای ثبت آگهی میبایست نکاتی را مد نظر داشته باشید<br>برای نام کالا سعی کنید توصیفی کوتاه بیان کنید <br>برای توضیحات سعی شود موارد کم اهمیت کالا حذف و موارد مهم اشاره شوند  <Br> قیمت کلا میبایست عادلانه و معادل قیمت بازار باشد </p></center>
                
                </div>
            </div>
        </div>
    </div>
</body>
</html>