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
                <div id="header2">
                    <!-- headerTop -->
                    <div class="headerTop">
                        <input type="button" class="back" onclick="location.href='m_moreView_main.php'"/>
                        <h2 class="header_title">고객지원</h2>
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
                    <li>
                        <p>FAQ</p>
                        <img src="img/m_gothru.png" alt="자세히" class='gothru'>
                    </li>
                    <li>
                        <p>1:1 문의</p>
                        <img src="img/m_gothru.png" alt="자세히" class='gothru'>
                    </li>
                    <li>
                        <p>인증자료 제출안내</p>
                        <img src="img/m_gothru.png" alt="자세히" class='gothru'>
                    </li>
                    <li>
                        <p>수수료 안내</p>
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
