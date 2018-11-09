<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>Phillis-coin</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/input_output.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
<div id="wrap">

  <!-- 컨테이너 -->
  <div id="container">

    <!-- nav -->
    <?php include "nav.php";?>
    <!-- nav End-->

    <!-- header -->
    <?php include "header.php";?>
    <!-- header End-->

    <div class="content output_content">
      <div class="output_box">
        <div class="output_inner">
          <div class="my_coin_box">
            <span class="my_coin">내잔고</span><span class='my_coin_number'>0 PLS</span>
          </div>

          <div class="output_text">
            <input type="button" name="qrcode" value="QR코드 스캔">

              <p><img src="img/qr_code.png" alt="qr코드"></p>
              <p>0x777kyJeJjHIFdukLyVO69TLDCkn</p>

            <input type="submit" name="submit" value="보내기">
            <p class="copyright">CRYPOCURRNCY PILIPS COIN SINCE 2018</p>
          </div>
        </div>
      </div>

    </div><!-- content End -->
  </div><!-- container End -->
</div><!--wrap End-->
</body>
</html>
