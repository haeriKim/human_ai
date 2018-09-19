<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script><!--//배너 슬라이더-->
    <title>CCE</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/sub_menu.css">
    <link rel="stylesheet" href="css/alarm.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/common.js"></script>
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
                                <dt><a href="myinfo_login_password.php" title="로그인 비밀번호 변경" class='active'>로그인 비밀번호 변경</a></dt>
                                <dt><a href="#" title="보안비밀번호 변경">보안비밀번호 변경</a></dt>
                                <dt><a href="#" title="휴대폰번호 변경">휴대폰번호 변경</a></dt>
                                <dt><a href="#" title="계좌 변경">계좌 변경</a></dt>
                                <dt><a href="#" title="새 지갑발급">OTP 변경</a></dt>
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
                          <h4 class="title2">알림상세</h4>
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
                                      <td id="left_text">회원님이 AOS(에오스)코인을 80,000AOS를(을) 매도하였습니다.<span class="new"> NEW</span></td>
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

</body>
</html>
