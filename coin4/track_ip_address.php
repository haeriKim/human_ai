<!DOCTYPE html>
<html lang="ko" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script><!--//배너 슬라이더-->
    <title>The Alls</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/track_ip_address.css">
    <link rel="stylesheet" href="css/sub_menu.css">
    <link rel="stylesheet" href="css/app_page_PC.css">
    <link rel="shortcut icon" href="img/favicon-16.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon-16.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon-32.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon-32.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon-16.png" type="image/x-icon">
    <link rel="icon" href="img/favicon-16.png" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon-32.png" type="image/x-icon">
    <link rel="icon" href="img/favicon-32.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/common.js"></script>
    <script src="js/fouc.js"></script>
</head>
<body>
    <!-- wrap -->
    <div id="wrap">
        <!-- container -->
        <div id="container">

            <!-- nav_wrap -->
            <?php include "nav.php";?>
                      <!-- nav_wrap End-->

            <!-- header_wrap -->
            <?php include "header.php";?>
            <!-- header_wrap End-->

            <!-- content_wrap -->
            <div class="content_wrap">
                <!-- main_content -->
                <div class="content track_ip_address_wrap con_1250">
                  <!--content_nav -->
                  <div class="content_nav">
                    <h4>마이페이지</h4>
                    <ul>
                        <li><a href="myinfo.php" title="회원정보">회원 정보</a></li>
                        <li>
                          <a href="myinfo_login_password.php" title="회원정보관리" class='more_menu'>회원 정보관리</a>
                          <dl class="nav_dropdown info_dd off">
                            <dt><a href="myinfo_login_password.php" title="로그인 비밀번호변경">로그인 비밀번호변경</a></dt>
                            <dt><a href="myinfo_security_password.php" title="보안 비밀번호변경">보안 비밀번호변경</a></dt>
                            <dt><a href="myinfo_security_change.php" title="보안 비밀번호 초기화">보안 비밀번호 초기화</a></dt>
                            <dt><a href="myinfo_phone.php" title="휴대폰 번호변경">휴대폰 번호변경</a></dt>
                            <dt><a href="myinfo_account.php" title="계좌변경">계좌변경</a></dt>
                            <dt><a href="myinfo_OTP.php" title="OTP 초기화">OTP 초기화</a></dt>
                            <dt><a href="myinfo_OTP_change.php" title="OTP 비활성화">OTP 비활성화</a></dt>
                          </dl>
                        </li>
                        <li><a href="certification.php" title="인증센터">인증센터</a></li>
                        <li class='active'><a href="#" title="접속 이력확인">접속 이력확인</a></li>
                        <li>
                          <a href="#" title="알림" class='more_menu'>알림</a>
                          <dl class="nav_dropdown alarm_dd off">
                              <dt><a href="alarm.php" title="알림 상세">알림 상세</a></dt>
                              <dt><a href="alarm_setting.php" title="알림 설정">알림 설정</a></dt>
                          </dl>
                        </li>
                    </ul>
                  </div><!-- content_nav End-->
                  <!-- track_ip_address_area -->
                  <div class="box track_ip_address_area">
                    <h3 class="title">접속 이력확인</h3>
                    <!-- track_ip_address -->
                    <div class="track_ip_address mypage_content">
                        <table class='track_ip_address_table' summary='OS,브라우저,IP주소,이벤트,시간,결과 정보가 나와 있는 표'>
                            <colgroup>
                                <col width='16%'/>
                                <col width='20%'/>
                                <col width='19%'/>
                                <col width='15%'/>
                                <col width='16%'/>
                                <col width='14%'/>
                            </colgroup>
                            <thead class='track_ip_address_thead'>
                                <tr>
                                    <th>OS</th>
                                    <th>브라우저</th>
                                    <th>IP주소</th>
                                    <th>이벤트</th>
                                    <th>시간</th>
                                    <th>결과</th>
                                </tr>
                            </thead>
                            <tbody class='track_ip_address_tbody'>
                                <tr>
                                    <td>Windows 10</td>
                                    <td>Chrome 68.0.3440.106</td>
                                    <td>123.123.123.12</td>
                                    <td>웹로그인 완료</td>
                                    <td>2018-09-13<br/>14:30:14</td>
                                    <td>SUCCESS</td>
                                </tr>
                                <tr>
                                    <td>Windows 10</td>
                                    <td>Chrome 68.0.3440.106</td>
                                    <td>123.123.123.12</td>
                                    <td>웹로그인 완료</td>
                                    <td>2018-09-11<br/>10:51:43</td>
                                    <td>SUCCESS</td>
                                </tr>
                                <tr>
                                    <td>Windows 10</td>
                                    <td>Chrome 68.0.3440.106</td>
                                    <td>123.123.123.12</td>
                                    <td>웹로그인 완료</td>
                                    <td>2018-09-11<br/>01:32:23</td>
                                    <td>SUCCESS</td>
                                </tr>
                                <tr>
                                    <td>Windows 10</td>
                                    <td>Chrome 68.0.3440.106</td>
                                    <td>123.123.123.12</td>
                                    <td>웹로그인 완료</td>
                                    <td>2018-09-10<br/>18:00:52</td>
                                    <td>SUCCESS</td>
                                </tr>
                                <tr>
                                    <td>Windows 10</td>
                                    <td>Chrome 68.0.3440.106</td>
                                    <td>123.123.123.12</td>
                                    <td>웹로그인 완료</td>
                                    <td>2018-09-10<br/>12:11:01</td>
                                    <td>SUCCESS</td>
                                </tr>
                                <tr>
                                    <td>Windows 10</td>
                                    <td>Chrome 68.0.3440.106</td>
                                    <td>123.123.123.12</td>
                                    <td>웹로그인 완료</td>
                                    <td>2018-08-26<br/>09:30:24</td>
                                    <td>SUCCESS</td>
                                </tr>
                                <tr>
                                    <td>Windows 10</td>
                                    <td>Chrome 68.0.3440.106</td>
                                    <td>123.123.123.12</td>
                                    <td>웹로그인 완료</td>
                                    <td>2018-08-22<br/>14:39:22</td>
                                    <td>SUCCESS</td>
                                </tr>
                                <tr>
                                    <td>Windows 10</td>
                                    <td>Chrome 68.0.3440.106</td>
                                    <td>123.123.123.12</td>
                                    <td>웹로그인 완료</td>
                                    <td>2018-08-14<br/>17:23:09</td>
                                    <td>SUCCESS</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- contentBottom -->

                        <div class="contentBottom">
                            <div class="paging">
                                <a href="#" title="prev"><img src="img/p_first.png"></a>
                                <a href="#" title="prev"><img src="img/p_prev.png"></a>
                                <a href="#" title="1page" class="selected">1</a>
                                <a href="#" title="2page">2</a>
                                <a href="#" title="3page">3</a>
                                <a href="#" title="4page">4</a>
                                <a href="#" title="5page">5</a>
                                <a href="#" title="next"><img src="img/p_next.png"></a>
                                <a href="#" title="next"><img src="img/p_end.png"></a>
                            </div>
                        </div><!-- contentBottom End-->

                    </div><!-- track_ip_address End-->
                  </div><!--track_ip_address_area End-->

                </div><!-- track_ip_address_wrap End-->
            </div><!-- content_wrap End-->

            <!-- footer_wrap -->
            <?php include "footer.php";?>
            <!-- footer_wrap End-->

            <!--sub_menu-->
            <?php include "sub_menu.php";?>
            <!--sub_menu End-->

        </div><!-- container End -->
    </div><!-- wrap End -->

    <!-- wrap -->
    <div id="app_wrap">
        <!-- container -->
        <div id="container">
          <!-- m_nav-->
          <?php include "m_nav.php";?>
          <!-- m_nav End-->

          <!-- m_header-->
          <?php include "m_header.php";?>
          <!-- m_header End-->

            <!-- content_wrap -->
            <div class="content_wrap">
                <!-- common_table_wrap -->
                <div class="content common_table_wrap con_1250">

                  <!-- app_page_content -->
                  <div class="app_pagePC_content">

                    <div class="app_pagePC_story">
                      <img src="img/exclamation6.png" alt="컴퓨터아이콘">
                      <p>현재 페이지는 디올스 PC버전을 통해<br/>
                      이용하실수 있습니다.</p>

                      <div class="app_pagePC_bt">
                        <input type="button" name="거래소버튼" value="홈으로 돌아가기" onclick="location.href='index.php'" class="app_bt">
                      </div>



                    </div>

                  </div><!-- app_page_content End-->

                </div><!-- common_table_wrap End-->
            </div><!-- content_wrap End-->

            <!-- footer_wrap -->
            <?php include "footer.php";?>
            <!-- footer_wrap End-->

            <!--sub_menu-->
            <?php include "sub_menu.php";?>
            <!--sub_menu End-->

        </div><!-- container End -->
    </div><!-- wrap End -->

</body>
</html>
