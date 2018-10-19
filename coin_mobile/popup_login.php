<!doctype html>
<html lang="ko" class="no-js">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1">
  <title>The Alls</title>
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
                   <h2>로그인하기</h2>
                   <div class="popupbox_text">
                     <p>로그인이 필요한 서비스입니다.</p>
                     <p>로그인하시겠습니까?</p>
                   </div>
                   <div class="btn_area">
                     <input type="button" name="cancel" value="확인" class="popupbt">
                     <input type="button" name="submit" value="로그인하기" class="popupbt ok" onclick="location.href='login.php'">
                   </div>
                   <a href="signUp.php" class="join_btn">아직 The Alls 계정이 없으시다면?</a>
               </div>
           </div><!-- full_content End-->
           <div id="shadow"></div>
   </div>  <!-- full End-->
 </body>
 </html>
