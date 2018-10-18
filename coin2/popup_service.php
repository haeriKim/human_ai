<!doctype html>
<html lang="ko" class="no-js">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1">
  <title>출금 계좌 등록</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/popup.css">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/common.js"></script>
  <script src="js/fouc.js"></script>


 </head>
 <body>
    <div id="full">
            <!-- full_content -->
            <div id="popupbox" class='box popup'>
                <div class="full_inner">
                    <h2>서비스 이용 제한</h2>
                    <div class="popupbox_text">
                      <p>회원님의 현재 보안등급은 <b>Level <span class="user_level">3</span></b>입니다.</p>
                      <p>서비스를 이용하려면 <b>계좌인증(Level 4)</b>이 필요합니다.</p>
                      <p>확인버튼을 누르면 인증센터로 이동합니다.</p>
                    </div>
                    <div class="btn_area">
                      <input type="button" name="cancel" value="다음에 하기" class="popupbt">
                      <input type="button" name="submit" value="확인" class="popupbt ok" onclick="location.href='certification.php'">
                    </div>
                </div>
            </div><!-- full_content End-->
            <div id="shadow"></div>
    </div>  <!-- full End-->
 </body>
 </html>
