<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script><!--//배너 슬라이더-->
    <title>The Alls</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/myinfo.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/common.js"></script>
    <!-- <script src="js/fouc.js"></script> -->
</head>
<body>
   <!-- wrap -->
   <div id="wrap">
     <!-- container -->
     <div id="container">

         <div id ="header_wrap">
           <!-- header -->
           <div id="header2">
             <div class="headerTop">
               <input type="button" class="back" onclick="location.href='m_moreView_main.php'"/>
               <h2 class="header_title">회원정보</h2>
               <div class="alarm_area">
                 <img src="img/bell.png" class="alarmBtn" alt="알림버튼" onclick="location.href='m_alarm.php'"/>
               </div>
             </div>
           </div> <!-- header End-->
         </div><!-- header_wrap End-->

           <!-- mycoin_content_wrap -->
           <div class="mycoin_content_wrap">
               <!-- m_mycoin_main -->
               <div class="content">
                   <div class="myinfo_area">

                         <p>회원정보</p>
                         <dl>
                           <dt class="info_title">이메일주소</dt>
                           <dd class="info user_phone">abc@naver.com</dd>

                           <dt class="info_title">휴대폰 번호</dt>
                           <dd class="info user_phone">010-****-1234</dd>

                           <dt class="info_title">이름</dt>
                           <dd class="info user_phone">가*다</dd>

                           <dt class="info_title">계좌정보</dt>
                           <dd class="info user_phone">국민은행 1234-********-11-123</dd>

                           <dt class="info_title">인증레벨</dt>
                           <dd class="info user_level">Level 5 (OTP인증)</dd>

                           <!--<li class="info_title">접속관리</li>
                           <li class="info">2018-10-24 최종 로그인</li>-->

                         </dl>

                         <p class="info_h2">회원정보관리</p>
                         <ul>
                           <li class="info info2">회원정보 변경 및 탈퇴는 웹(PC)에서 가능 합니다.</li>
                         </ul>



                   </div><!-- assets_area End-->
               </div><!-- m_mycoin_main End-->
           </div><!-- mycoin_content_wrap End-->

           <!-- nav -->
           <?php include "nav.php";?>
           <!-- nav End-->

       </div><!-- container End -->
       <!-- nav_wrap -->
       <!-- nav_wrap End-->
   </div><!-- wrap End -->
</body>
</html>
