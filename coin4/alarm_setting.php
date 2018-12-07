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
    <link rel="stylesheet" href="css/popup.css">
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
                                <dt><a href="alarm.php" title="알림 상세">알림 상세</a></dt>
                                <dt class='active'><a href="#" title="알림 설정">알림 설정</a></dt>
                            </dl>
                          </li>
                      </ul>
                    </div><!-- content_nav End-->

                  <div class="box alarm_area">
                    <h3 class="title">알림</h3>
                        <div class="alarm_inner mypage_content">
                          <h4 class="title2">알림 설정</h4>

                            <div class="alarm_setting">
                              <p class="title">회원님의 활동 내역을 알려드립니다.</p>
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
                                            <td class="toggle_area">
                                                <label class="switch">
                                                  <input type="checkbox">
                                                  <span class="slider round"></span>
                                                  <p class="toggle_text"></p>
                                                </label>

                                              </td>
                                          </tr>

                                          <tr>
                                              <td>거래 체결</td>
                                              <td class="toggle_area">
                                                  <label class="switch">
                                                  <input type="checkbox">
                                                  <span class="slider round"></span>
                                                  <p class="toggle_text"></p>
                                                  </label>
                                              </td>
                                        </tr>

                                        <tr>
                                            <td>입/출금 정보</td>
                                            <td class="toggle_area">
                                                <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                <p class="toggle_text"></p>
                                                </label>
                                            </td>
                                      </tr>

                                      <tr>
                                          <td>고객센터</td>
                                          <td class="toggle_area">
                                              <label class="switch">
                                              <input type="checkbox">
                                              <span class="slider round"></span>
                                              <p class="toggle_text"></p>
                                              </label>
                                          </td>
                                    </tr>

                                  </tbody>
                                </table>

                                <div class="alarm_sangse2">
                                <p class="title">개인정보 수집 및 이용 동의(선택)</p>
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

    <div id="full">
                <!-- full_content -->
                <div id="popupbox" class='box popup phone_change_box'>
                  <div class="full_inner">
                    <h2>알림 설정 완료</h2>
                    <div class="popupbox_text">
                      <p>알림 설정이 저장되었습니다.</p>
                    </div>
                    <div class="cancel_or_apply">
                      <input type="button" name="" value="확인" class="agree_btn save_ok">
                    </div>

                  </div>
                </div><!-- full_content End-->
                <div id="shadow"></div>
        </div>

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
