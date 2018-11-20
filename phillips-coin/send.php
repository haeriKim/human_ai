<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>Phillips-coin</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/send.css">
    <link rel="shortcut icon" href="img/favicon-16.png" type="image/x-icon">
    <link rel="icon" href="img/favicon-16.png" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon-32.png" type="image/x-icon">
    <link rel="icon" href="img/favicon-32.png" type="image/x-icon">
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
                <h3 class='title'>보내기</h3>
                <div class="line"></div>
                <form class="change_pw_form" action="#" method="post">
                  <div class="my_coin_box">
                    <span class="my_coin">내잔고</span><span class='my_coin_number'>0 PHS</span>
                  </div>
                  <input type='number' name="number" value="" placeholder="수량" required maxlength="100" minlength="1"  class='input_number' autocomplete="off"/>
                  <input type='text' name="limit_number" value="" placeholder="0.02" class="input_limit borderNone" disabled="disabled">
                  <input type='text' name="limit_number" value="" class="input_limit borderNone" disabled="disabled">
                  <input type="text" name="address" value="" placeholder="주소" required maxlength="100" class='address'>
                  <div class="btnArea">
                    <input type="submit" name="submit" value="QR코드 스캔" class='changeInfo_btn'>
                    <input type="submit" name="submit" value="보내기" class='changeInfo_btn'>
                  </div>
                </form>
                <p class="copyright">CRYPTOCURRNCY PHILLIPS-COIN SINCE 2018</p>
                <a href="#" class='go_thealls' target="_blank">디올스(The Alls) 거래소 바로가기</a>
            </div><!-- content End-->

        </div><!-- container End -->
    </div><!-- wrap End -->
</body>
</html>
