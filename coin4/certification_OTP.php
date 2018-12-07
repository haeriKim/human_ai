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
    <link rel="stylesheet" href="css/certification_OTP.css">
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
                <div class="content certification_content con_1250">

                  <!--content_nav -->
                  <div class="content_nav">
                    <h4>마이페이지</h4>
                    <ul>
                        <li><a href="myinfo.php" title="회원 정보">회원 정보</a></li>
                        <li>
                          <a href="myinfo_login_password.php" title="회원 정보관리" class='more_menu'>회원 정보관리</a>
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
                        <li class='active'><a href="#" title="인증센터">인증센터</a></li>
                        <li><a href="track_ip_address.php" title="접속 이력확인">접속 이력확인</a></li>
                        <li>
                          <a href="#" title="알림" class='more_menu'>알림</a>
                          <dl class="nav_dropdown alarm_dd off">
                              <dt><a href="alarm.php" title="알림 상세">알림 상세</a></dt>
                              <dt><a href="alarm_setting.php" title="알림 설정">알림 설정</a></dt>
                          </dl>
                        </li>
                    </ul>
                  </div><!-- content_nav End-->


                  <div class="box certification_area">
                    <h3 class="title">인증센터</h3>
                    <div class="cer_center mypage_content">
                      <ul class="cer_level">
                        <li>
                          <img src="img/lv1.png" alt="레벨1"/>
                          <p class="img_area">
                            <img src="img/mailbox.png" alt="이메일인증 아이콘"/>
                          </p>
                          <strong>이메일인증</strong>
                          <span>실제 사용 중인<br/>이메일 계정을 인증해주세요.</span>
                        </li>
                        <li>
                          <img src="img/lv2.png" alt="레벨2" />
                          <p class="img_area">
                            <img src="img/key.png" alt="보안비밀번호생성 아이콘" />
                          </p>
                          <strong>보안비밀번호 생성</strong>
                          <span>안전거래를 위한 <br/>보안비밀번호를 생성해주세요.</span>
                        </li>
                        <li>
                          <img src="img/lv3.png" alt="레벨3" />
                          <p class="img_area">
                            <img src="img/phone.png" alt="휴대폰인증 아이콘" />
                          </p>
                          <strong>실명인증</strong>
                          <span>본인명의 휴대폰을 통하여<br/>실명을 인증해주세요.</span>
                        </li>
                        <li>
                          <img src="img/lv4.png" alt="레벨4" class="lv4_on"/>
                          <img src="img/lv4_off.png" alt="레벨4" class="lv4_off"/>
                          <p class="img_area">
                            <img src="img/bankbook_off.png" alt="계좌인증 아이콘" class="account_off"/>
                            <img src="img/bankbook.png" alt="계좌인증 아이콘" class="account_on" />
                          </p>
                          <strong>계좌인증</strong>
                          <span>거래소를 이용하시 위한<br/>계좌를 인증해주요.</span>
                        </li>
                        <li>
                          <img src="img/lv5.png" alt="레벨5" class="lv5_on">
                          <img src="img/lv5_off.png" alt="레벨4" class="lv5_off"/>
                          <p class="img_area">
                            <img src="img/lock_off.png" alt="OTP 인증 아이콘" class="otp_off"/>
                            <img src="img/lock.png" alt="OTP 인증인증 아이콘" class="otp_on" />
                          </p>
                          <strong class="gray_title">OTP 인증</strong>
                          <span>실제 사용 중인<br/>OTP로 인증해주세요.</span>
                        </li>
                      </ul>

                      <div class="center_bottom">
                        <p class='content_title'>OTP 인증</p>
                        <div class="cText_left3">
                            <strong><span>1</span>. OTP앱을 스마트폰에 다운로드 받으세요.</strong>
                            <ul class="android">
                              <li class="app_title">[ android 전용 Google OTP ]</li>
                              <li class="app_text">
                                <img src="img/apple_app.png" alt="안드로이드구글OTP" class="android_img">
                                <br/>
                                <span>'Google OTP'를 검색하신 후 다운로드 받으세요.</span>
                                <p><a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&rdid=com.google.android.apps.authenticator2" target="_blank"><img src="img/playstore.png" alt="플레이스토어"></a></p>
                              </li>
                            </ul>

                            <ul class="apple">
                              <li class="app_title">[ ios 전용 Google Authenticator ]</li>
                              <li class="app_text">
                                <img src="img/apple_app.png" alt="애플구글OTP" class="apple_img">
                                <br/>
                                <span>'Google Authenticator'를 검색하신 후 다운로드 받으세요.</span>
                                <p><a href="https://itunes.apple.com/kr/app/google-authenticator/id388497605?mt=8" target="_blank"><img src="img/appstore.png" alt="앱스토어"></a></p>
                              </li>
                            </ul>

                        </div>

                      <div class="cText_right3">
                          <div class="qr_code">
                            <strong><span>2</span>. 다운로드 받은 앱에 'QR'코드를 스캔하거나 '16자리 코드번호'를 입력해주세요.</strong>

                            <ul class="qr_code_img">
                              <li>QR 코드</li>
                              <li><img src="img/qr_code.png" alt="qr코드" class="qr_code_imgbox"></li>
                            </ul>

                            <ul class="qr_code_key">
                              <li>16자리 코드번호</li>
                              <li class="qr_code_key2">NRSLK7JWICMZLXBAWEZ</li>
                            </ul>

                            <a href="customer_faq.php"><span class="OTP_guide">OTP 설정이 처음이신가요?</span></a>
                          </div>

                        <div class="OTP_code">
                          <strong><span>3</span>. '2단계' 완료 후 OTP 인증 앱에 표시된 인증번호(6자리)를<br/>
                            입력해주세요. <samll class="OTP_reset">[OTP번호는 30초마다 자동으로 변경됩니다.]</small></strong>

                          <div>
                            <form action="#" method="post" class="OTP_codebox">

                              <input type="text" placeholder="OTP번호를 입력하세요." required maxlength="6" minlength="6" class="OTP_number user_otpNum">
                              <p id='warning_message'>OTP번호가 일치하지 않습니다.</p>

                              <div id="OTP_complete">
                                <a href="certification.php">
                                  <input type="button" name="취소" value="취소" class="cancel" onclick="location.href='certification.php'"/>
                                </a>

                                  <input type="submit" name="등록" value="등록" onclick="location.href='certification_OTP_success.php'" class="OTP_complete"/>

                              </div>
                            </form>
                          </div>


                        </div>

                      </div>

                      </div>
                    </div>
                  </div><!--certification_area End-->

                </div><!-- certification_content End-->
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
