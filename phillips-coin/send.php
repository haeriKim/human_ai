<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>Phillis-coin</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/send.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
    <!-- wrap -->
    <div id="wrap">

        <!-- container -->
        <div id="container">

            <!-- nav -->
            <?php include "nav.php";?>
            <!-- nav End-->

            <!-- header -->
            <?php include "header.php";?>
            <!-- header End-->

            <!-- content -->
            <div class="content changeInfo_content">
                <p class='title'>비밀번호 변경</p>
                <div class="line"></div>
                <form class="change_pw_form" action="#" method="post">
                  <div class="my_coin_box">
                    <span class="my_coin">내잔고</span><span class='my_coin_number'>0 PLS</span>
                  </div>
                  <input type='number' name="number" value="" placeholder="수량" required maxlength="100" minlength="1"  class='input_number' autocomplete="off"/>
                  <input type='text' name="limit_number" value="" placeholder="0.02" class="input_limit" disabled="disabled">
                  <input type='text' name="limit_number" value="" class="input_limit" disabled="disabled">
                  <input type="text" name="address" value="" placeholder="주소" required maxlength="100" class='address'>

                                      <input type="submit" name="submit" value="QR코드 스캔" class='changeInfo_btn'>
                                      <input type="submit" name="submit" value="보내기" class='changeInfo_btn'>
                </form>

            </div><!-- content End-->

        </div><!-- container End -->
    </div><!-- wrap End -->
</body>
</html>
