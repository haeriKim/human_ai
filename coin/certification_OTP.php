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
    <link rel="stylesheet" href="css/certification_OTP.css">
    <link rel="stylesheet" href="css/sub_menu.css">
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
                <div class="content certification_content con_1250">

                  <!--content_nav -->
                  <div class="content_nav">
                    <h4>마이페이지</h4>
                    <ul>
                        <li><a href="#" title="회원정보">회원정보</a></li>
                        <li>
                          <a href="#" title="회원정보관리" class='more_menu'>회원정보관리</a>
                          <dl class="nav_dropdown info_dd off">
                              <dt><a href="#" title="로그인 비밀번호 변경" class='active'>로그인 비밀번호 변경</a></dt>
                              <dt><a href="#" title="보안비밀번호 변경">보안비밀번호 변경</a></dt>
                              <dt><a href="#" title="휴대폰번호 변경">휴대폰번호 변경</a></dt>
                              <dt><a href="#" title="계좌 변경">계좌 변경</a></dt>
                              <dt><a href="#" title="새 지갑발급">OTP 변경</a></dt>
                          </dl>
                        </li>
                        <li class='active'><a href="certification.php" title="인증센터">인증센터</a></li>
                        <li><a href="track_ip_address.php" title="접속이력확인">접속이력확인</a></li>
                        <li>
                          <a href="#" title="알림" class='more_menu'>알림</a>
                          <dl class="nav_dropdown alarm_dd off">
                              <dt class='active'><a href="#" title="알림 상세">알림 상세</a></dt>
                              <dt><a href="#" title="알림 설정">알림 설정</a></dt>
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
                            <img src="img/phone.png" alt="휴대폰인증 아이콘" />
                          </p>
                          <strong>휴대폰인증</strong>
                          <span>본인명의 휴대폰을 통하여<br/>실명을 인증해주세요.</span>
                        </li>
                        <li>
                          <img src="img/lv3.png" alt="레벨3" />
                          <p class="img_area">
                            <img src="img/key.png" alt="보안비밀번호생성 아이콘" />
                          </p>
                          <strong>보안비밀번호 생성</strong>
                          <span>안전거래를 위한 <br/>2차 비밀번호를 생성해주세요.</span>
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
                            <img src="img/lock_off.png" alt="OTP인증 아이콘" class="otp_off"/>
                            <img src="img/lock.png" alt="OTP인증인증 아이콘" class="otp_on" />
                          </p>
                          <strong class="gray_title">OTP인증</strong>
                          <span>실제 사용 중인<br/>OTP로 인증해주세요.</span>
                        </li>
                      </ul>

                      <div class="center_bottom">
                        <div class="cText_left3">

                            <strong><span>1</span>. OTP앱을 스마트폰에 다운로드 받으세요.</strong>
                            <ul class="android">
                              <li class="app_title">[ 안드로이드 휴대폰 전용 Google OTP ]</li>
                              <li class="app_text">
                                <img src="img/android_app.png" alt="안드로이드구글OTP" class="android_img">
                                <br/>
                                <span>play 스토어에서 'Google OTP'를 검색하신 후 다운로드 받으세요.</span>
                              </li>
                            </ul>

                            <ul class="apple">
                              <li class="app_title">[ 아이폰 휴대폰 전용 Google Authenticator ]</li>
                              <li class="app_text">
                                <img src="img/apple_app.png" alt="애플구글OTP" class="apple_img">
                                <br/>
                                <span>App Store에서 'Google Authenticator'를 검색하신 후 다운로드 받으세요.</span>
                              </li>
                            </ul>

                        </div>

                      <div class="cText_right3">
                          <div class="qr_code">
                            <strong><span>2</span>. 다운로드 받은 앱에 QR코드를 스캔하거나 비밀키를 입력해주세요.</strong>

                            <ul class="qr_code_img">
                              <li>QR 코드</li>
                              <li><img src="img/qr_code.png" alt="qr코드" class="qr_code_imgbox"></li>
                            </ul>

                            <ul class="qr_code_key">
                              <li>비밀키</li>
                              <li class="qr_code_key2">NRSLK7JWICMZLXBAWEZ</li>
                            </ul>

                          </div>

                        <div class="OTP_code">
                          <strong><span>3</span>. '2단계'완료 후 OTP 인증 앱에 표시된 인증번호(6자리)와 SMS
                          로 발송된 보안코드를 입력해주세요.</strong>

                          <div>
                            <form action="#" method="post" class="OTP_codebox">
                              <input type="text" placeholder="보안코드" required class="OTP_number"><input type="button" value="보안코드 받기" class="OTP_numberbt">
                              <input type="text" placeholder="OTP번호 입력" required class="OTP_number">
                              <div id="OTP_complete">
                                <a href="certification.php">
                                  <input type="button" name="취소" value="취소" class="cancel" onclick="location.href='certification.php'"/>
                                </a>

                                  <input type="submit" name="OTP 인증완료" value="OTP 인증완료" class="OTP_complete"/>

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

</body>
</html>
