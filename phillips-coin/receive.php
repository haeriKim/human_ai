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
    <link rel="stylesheet" href="css/receive.css">
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
                <h3 class='title'>받기</h3>
                <div class="line"></div>
                <form class="change_pw_form" action="#" method="post">
                  <div class="my_coin_box">
                    <span class="my_coin">내잔고</span><span class='my_coin_number'>0 PHS</span>
                  </div>

                  <div class="output_text">
                    <input type="button" name="qrcode" value="QR코드 스캔">
                      <div class="codeArea">
                        <p><img src="img/qr_code.png" alt="qr코드"></p>
                        <p>0x777kyJeJjHIFdukLyVO69TLDCkn</p>
                      </div>
                    <input type="button" name="buttton" value="주소복사">
                    <p class="copyright">CRYPOCURRNCY PHILLIPS-COIN SINCE 2018</p>
                    <a href="#" class='go_thealls' target="_blank">디올스(The Alls) 거래소 바로가기</a>
                  </div>
                </form>

            </div><!-- content End-->

        </div><!-- container End -->
    </div><!-- wrap End -->
</body>
</html>
