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
    <link rel="stylesheet" href="css/nav.css">
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

    <div class="content input_content">
      <div class="input_box">
        <div class="input_inner">
          <div class="my_coin_box">
            <span class="my_coin">내잔고</span><span class='my_coin_number'>0 PLS</span>
          </div>
          <input type='text' name="number" value="" placeholder="수량" required maxlength="100" minlength="1"  class='input_number' autocomplete="off"/>
          <input type='text' name="limit_number" value="" placeholder="0.02" class="input_limit" disabled="disabled">
          <input type='text' name="limit_number" value="" class="input_limit" disabled="disabled">
          <input type="text" name="address" value="" placeholder="주소" required maxlength="100" class='address'>

          <div class="input_text">
            <input type="button" name="qrcode" value="QR코드 스캔">
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
