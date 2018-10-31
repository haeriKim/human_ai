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
    <link rel="stylesheet" href="css/moreView_main.css">
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
            <!-- header_wrap -->
            <div id ="header_wrap">
                <!-- header -->
                <div id="header">
                    <!-- headerTop -->
                    <div class="headerTop">
                        <h2 class="header_title">더보기</h2>
                        <!-- alarm_area -->
                        <div class="alarm_area">
                            <img src="img/bell.png" class="alarmBtn" alt="알림버튼" onclick="location.href='m_alarm.php'"/>
                        </div><!-- alarm_area End-->
                    </div><!-- headerTop End-->
                </div> <!-- header End-->
            </div><!-- header_wrap End-->

            <!-- moreView_content_wrap -->
            <div class="moreView_content_wrap">
                <ul>
                    <li class='user_info_li'>
                        <p class='user_mail'>abc@naver.com</p>
                        <input type="button" name="logout" value="로그아웃" class='log_out waiting' onclick="location.href='m_login.php'">
                    </li>
                    <li onclick="location.href='m_moreView_myinfo.php'">
                        <p>회원정보</p>
                        <p class='waiting only_pc'>회원정보 관리 및 변경은 웹(PC)에서 가능합니다.</p>
                        <img src="img/m_gothru.png" alt="자세히" class='gothru gothru_02'>
                    </li>
                    <li onclick="location.href='m_certification_main.php'">
                        <p>인증센터</p>
                        <img src="img/m_gothru.png" alt="자세히" class='gothru'>
                    </li>
                    <li onclick="location.href='m_moreView_notice.php'">
                        <p>공지사항</p>
                        <img src="img/m_gothru.png" alt="자세히" class='gothru'>
                    </li>
                    <li onclick="location.href='m_moreView_support_customer.php'">
                        <p>고객지원</p>
                        <p class='waiting only_pc'>FAQ, 1:1 문의, 인증자료 제출안내, 수수료 안내를 보실 수 있습니다.</p>
                        <img src="img/m_gothru.png" alt="자세히" class='gothru gothru_03'>
                    </li>
                    <li onclick="location.href='m_moreView_track_ip.php'">
                        <p>접속 이력확인</p>
                        <img src="img/m_gothru.png" alt="자세히" class='gothru'>
                    </li>
                    <li onclick="location.href='m_moreView_tos.php'">
                        <p>이용약관 / 개인정보처리방침</p>
                        <img src="img/m_gothru.png" alt="자세히" class='gothru'>
                    </li>
                </ul>

            </div><!-- moreView_content_wrap End-->

            <!-- nav -->
            <?php include "nav.php";?>
            <!-- nav End-->

        </div><!-- container End -->
    </div><!-- wrap End -->
</body>
</html>
