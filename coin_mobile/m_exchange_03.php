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
    <link rel="stylesheet" href="css/exchange.css">
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
              <div id="header">
                <h2 class="header_title">차트</h2>
                <div class="alarm_area">
                  <img src="img/bell.png" class="alarmBtn" alt="알림버튼"/>
                </div>
              </div> <!-- header End-->
            </div><!-- header_wrap End-->
            <!-- content_wrap -->
            <div class="content_wrap">
                <!-- main_content -->
                <div class="content">
                    <!-- chart -->
                    <div class="box" id='chart'>

                    </div><!-- chart End-->
                </div><!-- content End-->
            </div><!-- content_wrap End-->

            <!-- nav_wrap -->
            <?php include "nav.php";?>
            <!-- nav_wrap End-->

        </div><!-- container End -->
    </div><!-- wrap End -->
</body>
</html>
