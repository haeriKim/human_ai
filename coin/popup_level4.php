<!doctype html>
<html lang="ko">
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


 </head>
 <body>
    <div id="full">
            <!-- full_content -->
            <div id="popupbox" class='box popup'>
                <div class="full_inner">
                    <h2>출금계좌 등록</h2>
                    <div class="popupbox_text">
                      <p>회원님의 단계는 Level<span class="user_level">3</span> 입니다.</p>
                      <p>거래를 이용하려면 <b>Level4(출금계좌 등록)</b>가 필요합니다.</p>
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
