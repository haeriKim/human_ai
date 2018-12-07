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
    <link rel="stylesheet" href="css/sub_menu.css">
    <link rel="stylesheet" href="css/alarm.css">
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
                <div class="content alarm_wrap con_1250">
                    <!--content_nav -->
                    <div class="content_nav">
                      <h4>마이페이지</h4>
                      <ul>
                          <li><a href="myinfo.php" title="회원정보">회원정보</a></li>
                          <li>
                            <a href="myinfo_login_password.php" title="회원정보관리" class='more_menu'>회원정보관리</a>
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
                          <li><a href="track_ip_address.php" title="접속이력확인">접속이력확인</a></li>
                          <li class='on'>
                            <a href="#" title="알림" class='more_menu'>알림</a>
                            <dl class="nav_dropdown alarm_dd">
                                <dt class='active'><a href="#" title="알림 상세">알림 상세</a></dt>
                                <dt><a href="alarm_setting.php" title="알림 설정">알림 설정</a></dt>
                            </dl>
                          </li>
                      </ul>
                    </div><!-- content_nav End-->

                  <div class="box alarm_area">
                    <h3 class="title">알림</h3>
                        <div class="alarm_inner mypage_content">
                          <h4 class="title2">알림 상세</h4>
                          <div class="alarm_head">
                            <select name="알림선택" id="alarm_select">
                              <option value="전체">전체</option>
                              <option value="입금">입금</option>
                              <option value="출금">출금</option>
                              <option value="매도">매도</option>
                              <option value="매수">매수</option>
                              <option value="정보">정보</option>
                            </select>

                            <div class="days"><!--days-->
                              <div>
                                <input type="date" value="2018-07-29">
                              </div>
                              <span>~</span>
                              <div>
                                <input type="date" value="2018-08-29">
                              </div>
                              <input type="submit" name="search" value="조회" class='search_btn'>
                            </div><!--days End-->
                          </div>



                          <table class="alarm_list" id="alarm_list">
                              <colgroup>
                                  <col width="10%">
                                  <col width="70%">
                                  <col width="20%">
                              </colgroup>
                                <thead>
                                  <tr>
                                    <th class="alram">분류</th>
                                    <th class="title">제목</th>
                                    <th class="date">시간</th>
                                  </tr>
                                </thead>

                                  <tbody>
                                    <tr>
                                      <td><span class="culgm">출금</td>
                                      <td id="left_text">hosik-e789님이 회원님에게 7,500,000BTC를(을) 출금하였습니다.<span class="new"> NEW</span></td>
                                      <td>15분전</td>
                                    </tr>

                                    <tr>
                                      <td><span class="masu">매수</span></td>
                                      <td id="left_text">회원님이 ETH(이더리움)코인을 30,000ETH를(을) 매수하였습니다.<span class="new"> NEW</span></td>
                                      <td>24분전</td>
                                    </tr>

                                    <tr>
                                      <td><span class="ipgm">입금</td>
                                      <td id="left_text">monster29님이 회원님에게 7,500,000BTC를(을) 입금하였습니다.<span class="new"> NEW</span></td>
                                      <td>40분전</td>
                                    </tr>

                                    <tr>
                                      <td><span class="mado">매도</span></td>
                                      <td id="left_text">회원님이 EOS(이오스)코인을 80,000AOS를(을) 매도하였습니다.<span class="new"> NEW</span></td>
                                      <td>1시간전</td>
                                    </tr>

                                    <tr>
                                      <td><span class="zeongbo">정보</td>
                                      <td id="left_text">hosik-e789님이 회원님에게 7,500,000BTC를(을) 출금하였습니다.</td>
                                      <td>15분전</td>
                                    </tr>

                                    <tr>
                                      <td><span class="culgm">출금</span></td>
                                      <td id="left_text">hosik-e789님이 회원님에게 7,500,000BTC를(을) 출금하였습니다.</td>
                                      <td>15분전</td>
                                    </tr>

                                    <tr>
                                      <td><span class="culgm">출금</span></td>
                                      <td id="left_text">hosik-e789님이 회원님에게 7,500,000BTC를(을) 출금하였습니다.</td>
                                      <td>15분전</td>
                                    </tr>

                                    <tr>
                                      <td><span class="ipgm">입금</span></td>
                                      <td id="left_text">hosik-e789님이 회원님에게 7,500,000BTC를(을) 입금하였습니다.</td>
                                      <td>15분전</td>
                                    </tr>

                                    <tr>
                                      <td><span class="culgm">출금</span></td>
                                      <td id="left_text">hosik-e789님이 회원님에게 7,500,000BTC를(을) 출금하였습니다.</td>
                                      <td>15분전</td>
                                    </tr>

                                    <tr>
                                      <td><span class="ipgm">입금</span></td>
                                      <td id="left_text">hosik-e789님이 회원님에게 7,500,000BTC를(을) 입금하였습니다.</td>
                                      <td>15분전</td>
                                    </tr>

                                    <tr>
                                      <td><span class="ipgm">입금</span></td>
                                      <td id="left_text">hosik-e789님이 회원님에게 7,500,000BTC를(을) 입금하였습니다.</td>
                                      <td>15분전</td>
                                    </tr>


                                  </tbody>
                          </table>

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
                          </div><!-- 페이징 -->

                        </div>


                  </div><!--alram_area End-->

                </div><!-- alarm_wrap End-->
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
