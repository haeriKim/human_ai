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
                                <dt><a href="alarm.php" title="알림 상세">알림 상세</a></dt>
                                <dt class='active'><a href="#" title="알림 설정">알림 설정</a></dt>
                            </dl>
                          </li>
                      </ul>
                    </div><!-- content_nav End-->

                  <div class="box alarm_area">
                    <h3 class="title">알림</h3>
                        <div class="alarm_inner mypage_content">
                          <h4 class="title2">알림설정</h4>

                            <div class="alarm_sangse">
                              <p>회원님의 활동 내역을 알려드립니다.</p>
                                <table class="alarm_sangse_pyo1">
                                  <colgroup>
                                    <col width="50%">
                                    <col width="50%">
                                  </colgroup>
                                  <thead>

                                    <tr>
                                      <th>알림종류</th>
                                      <th>SMS</th>
                                    </tr>

                                  </thead>

                                      <tbody>

                                          <tr>
                                            <td>로그인 정보</td>
                                            <td>
                                                <input type="button" name="ON" value="ON" class="alarm_on1 alarm_on">
                                                <input type="button" name="OFF" value="OFF" class="alarm_off1 alarm_off">
                                              </td>
                                          </tr>

                                          <tr>
                                              <td>거래 체결</td>
                                              <td>
                                                <input type="button" name="ON" value="ON" class="alarm_on2 alarm_on">
                                                <input type="button" name="OFF" value="OFF" class="alarm_off2 alarm_off">
                                              </td>
                                        </tr>

                                        <tr>
                                            <td>입/출금 정보</td>
                                            <td>
                                              <input type="button" name="ON" value="ON" class="alarm_on3 alarm_on">
                                              <input type="button" name="OFF" value="OFF" class="alarm_off3 alarm_off">
                                            </td>
                                      </tr>

                                      <tr>
                                          <td>고객센터</td>
                                          <td>
                                            <input type="button" name="ON" value="ON" class="alarm_on4 alarm_on">
                                            <input type="button" name="OFF" value="OFF" class="alarm_off4 alarm_off">
                                          </td>
                                    </tr>

                                  </tbody>
                                </table>

                                <div class="alarm_sangse2">
                                <p>개인정보 수집 및 이용 동의(선택)</p>
                                  <table class="alarm_sangse_pyo2">
                                    <tbody>

                                      <colgroup>
                                        <col width="30%">
                                        <col width="70%">
                                      </colgroup>
                                      <tr>
                                        <th>- 목적</th>
                                        <td>이벤트 행사 시 정보 전달,마케팅 및 광고등에 활용</td>
                                      </tr>

                                      <tr>
                                        <th>- 항목</th>
                                        <td>이메일,연락처</td>
                                      </tr>

                                      <tr>
                                        <th>- 보유기간</th>
                                        <td>회원탈퇴 시까지,법령이 정한 시점</td>
                                      </tr>

                                    </tbody>
                                  </table>

                                  <div class="alarm_snagse_checkbox">
                                    <input type="checkbox" id="alarm_sangse_checkbox"><label for="alarm_sangse_checkbox">개인정보 수집 및 이용에 동의합니다.</label>
                                  </div>

                                  <div class="alarm_sangse_bt">
                                    <input type="reset" name="reset" value="초기화" class='alarm_reset_bt'/>
                                    <input type="submit" name="submit" value="저장" class='save_bt'/>

                                  </div>
                                </div>
                            </div>
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
