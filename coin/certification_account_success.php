<!DOCTYPE html>
<html lang="ko" class="no-js">
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
    <link rel="stylesheet" href="css/certification_myInfo.css">
    <link rel="stylesheet" href="css/sub_menu.css">
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
                        <li><a href="myinfo.php" title="회원정보">회원정보</a></li>
                        <li>
                          <a href="myinfo_login_password.php" title="회원정보관리" class='more_menu'>회원정보관리</a>
                          <dl class="nav_dropdown info_dd off">
                              <dt><a href="myinfo_login_password.php" title="로그인 비밀번호 변경" class='active'>로그인 비밀번호 변경</a></dt>
                              <dt><a href="myinfo_security_password.php" title="보안비밀번호 변경">보안비밀번호 변경</a></dt>
                              <dt><a href="myinfo_phone.php" title="휴대폰번호 변경">휴대폰번호 변경</a></dt>
                              <dt><a href="myinfo_account.php" title="계좌 변경">계좌 변경</a></dt>
                              <dt><a href="myinfo_OTP.php" title="OTP 변경">OTP 변경</a></dt>
                          </dl>
                        </li>
                        <li class='active'><a href="#" title="인증센터">인증센터</a></li>
                        <li><a href="track_ip_address.php" title="접속이력확인">접속이력확인</a></li>
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
                          <img src="img/lv2.png" alt="레벨2"/>
                          <p class="img_area">
                            <img src="img/key.png" alt="보안비밀번호생성 아이콘"/>
                          </p>
                          <strong>보안비밀번호 생성</strong>
                          <span>안전거래를 위한 <br/>보안비밀번호를 생성해주세요.</span>
                        </li>
                        <li>
                          <img src="img/lv3.png" alt="레벨3"/>
                          <p class="img_area">
                            <img src="img/phone.png" alt="휴대폰인증 아이콘"/>
                          </p>
                          <strong>실명인증</strong>
                          <span>본인명의 휴대폰을 통하여<br/>실명을 인증해주세요.</span>
                        </li>
                        <li>

                          <img src="img/lv4.png" alt="레벨4"/>
                          <p class="img_area">
                            <img src="img/bankbook.png" alt="계좌인증 아이콘">

                          </p>
                          <strong>계좌인증</strong>
                          <span>거래소를 이용하시 위한<br/>계좌를 인증해주요.</span>
                        </li>
                        <li>

                          <img src="img/lv5_off.png" alt="레벨5" class="lv5_off"/>
                          <p class="img_area">
                            <img src="img/lock_off.png" alt="OTP인증 아이콘" class="otp_off"/>

                          </p>
                          <strong class="gray_title">OTP인증</strong>
                          <span>실제 사용 중인<br/>OTP로 인증해주세요.</span>
                        </li>
                      </ul>

                      <div class="myinfo_text_box">
                        <h3>계좌인증 완료</h3>
                        <br/>
                        <p>회원님의 현재 보안등급은 <strong class="complete_level">Level <b class="user_level">4</b></strong>입니다.</p>
                        <br/>
                        <p>더 많은 서비스를 이용하려면 다음 단계를 인증해주세요</p>
                      </div>

                      <div class="cancel_or_apply">
                        <input type="button" name="" value="확인" onclick="location.href='myinfo.php'" class="cancel_btn">
                        <input type="button" name="" value="인증하기" onclick="location.href='certification_OTP.php'" class="agree_btn">
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
