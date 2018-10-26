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
    <link rel="stylesheet" href="css/moreView_track_ip.css">
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
                        <h2 class="header_title">접속 이력확인</h2>
                        <!-- alarm_area -->
                        <div class="alarm_area">
                            <img src="img/bell.png" class="alarmBtn" alt="알림버튼" onclick="location.href='m_alarm.php'"/>
                        </div><!-- alarm_area End-->
                    </div><!-- headerTop End-->
                </div> <!-- header End-->
            </div><!-- header_wrap End-->

            <!-- moreView_trackIp_wrap -->
            <div class="moreView_trackIp_wrap">
                <table class='trackIp_table'>
                    <thead>
                        <tr>
                            <th>시간</th>
                            <th>OS/브라우저</th>
                            <th>IP주소</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                2018-09-13<br>
                                14:30:14
                            </td>
                            <td>
                                Windows 10<br>
                                Chrome
                            </td>
                            <td>123.123.123.12</td>
                        </tr>
                        <tr>
                            <td>
                                2018-09-13<br>
                                14:30:14
                            </td>
                            <td>
                                Windows 10<br>
                                Chrome
                            </td>
                            <td>123.123.123.12</td>
                        </tr>
                        <tr>
                            <td>
                                2018-09-13<br>
                                14:30:14
                            </td>
                            <td>
                                Windows 10<br>
                                Chrome
                            </td>
                            <td>123.123.123.12</td>
                        </tr>
                        <tr>
                            <td>
                                2018-09-13<br>
                                14:30:14
                            </td>
                            <td>
                                Windows 10<br>
                                Chrome
                            </td>
                            <td>123.123.123.12</td>
                        </tr>
                        <tr>
                            <td>
                                2018-09-13<br>
                                14:30:14
                            </td>
                            <td>
                                Windows 10<br>
                                Chrome
                            </td>
                            <td>123.123.123.12</td>
                        </tr>
                        <tr>
                            <td>
                                2018-09-13<br>
                                14:30:14
                            </td>
                            <td>
                                Windows 10<br>
                                Chrome
                            </td>
                            <td>123.123.123.12</td>
                        </tr>
                        <tr>
                            <td>
                                2018-09-13<br>
                                14:30:14
                            </td>
                            <td>
                                Windows 10<br>
                                Chrome
                            </td>
                            <td>123.123.123.12</td>
                        </tr>
                        <tr>
                            <td>
                                2018-09-13<br>
                                14:30:14
                            </td>
                            <td>
                                Windows 10<br>
                                Chrome
                            </td>
                            <td>123.123.123.12</td>
                        </tr>
                        <tr>
                            <td>
                                2018-09-13<br>
                                14:30:14
                            </td>
                            <td>
                                Windows 10<br>
                                Chrome
                            </td>
                            <td>123.123.123.12</td>
                        </tr>
                        <tr>
                            <td>
                                2018-09-13<br>
                                14:30:14
                            </td>
                            <td>
                                Windows 10<br>
                                Chrome
                            </td>
                            <td>123.123.123.12</td>
                        </tr>
                    </tbody>
                </table>
            </div><!-- moreView_trackIp_wrap End-->

            <div class="none_box"></div>
            <!-- nav -->
            <?php include "nav.php";?>
            <!-- nav End-->

        </div><!-- container End -->
    </div><!-- wrap End -->
</body>
</html>
