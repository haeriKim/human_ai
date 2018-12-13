<!DOCTYPE html>
<html lang="ko" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>The Alls</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/signUp_compelete.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/sub_menu.css">
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
                <div class="content signUp_c_content">
                  <div class="box con_1000">
                    <!-- 로그인폼 -->
                    <div id="signUp_c_area">

                      <h3>회원가입 완료</h3>
                      <div class="complete_text">
                        <img /src="img/join.png" alt="회원가입 완료">
                        <strong>회원가입이 완료 되었습니다.</strong>
                        <p>The Alls 회원이 되신 것을 환영합니다.</p>
                        <p><b class="user_mail">abc@naver.com</b>님의 현재 인증단계는 <b>Level<span class="user_level"> 1</span></b> 입니다.</p>
                        <p>거래를 이용하기 위해서 <a href="certification.php"><b>인증단계</b></a>를 진행해야합니다.</p>
                      </div>

                      <div class="cer_center">
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
                            <img src="img/lv2_off.png" alt="레벨2" />
                            <p class="img_area">
                              <img src="img/key_off.png" alt="보안비밀번호생성 아이콘" />
                            </p>
                            <strong class="gray_title">보안비밀번호 생성</strong>
                            <span>안전거래를 위한 <br/>보안비밀번호를 생성해주세요.</span>
                            <a href="certification_security_password.php" class="cer_btn">인증하기</a>
                          </li>
                          <li>
                            <img src="img/lv3_off.png" alt="레벨3" />
                            <p class="img_area">
                              <img src="img/phone_off.png" alt="실명인증 아이콘" />
                            </p>
                            <strong class="gray_title">실명인증</strong>
                            <span>본인명의 휴대폰을 통하여<br/>실명을 인증해주세요.</span>
                          </li>
                          <li>
                            <img src="img/lv4_off.png" alt="레벨4" class="lv4_off"/>
                            <p class="img_area">
                              <img src="img/bankbook_off.png" alt="계좌인증 아이콘" class="account_off"/>
                            </p>
                            <strong class="gray_title">계좌인증</strong>
                            <span>거래소를 이용하기 위한<br/>계좌를 인증해주세요.</span>
                          </li>
                          <li>
                            <img src="img/lv5_off.png" alt="레벨4" class="lv5_off"/>
                            <p class="img_area">
                              <img src="img/lock_off.png" alt="OTP인증 아이콘" class="otp_off"/>
                            </p>
                            <strong class="gray_title">OTP인증</strong>
                            <span>실제 사용 중인<br/>OTP로 인증해주세요.</span>
                          </li>
                        </ul>
                      </div>
                      <div class="btn_area">
                        <a href="exchange_BITCOIN.php" class='look_around'>거래소 둘러보기</a>
                        <a href="login.php" class='go_login'>로그인 하기</a>
                      </div>

                    </div><!-- signUp_c_area End-->
                  </div><!-- con_1000 End-->
                </div><!-- signUp_c_content End-->
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

          <!-- nav_wrap -->
          <?php include "nav.php";?>
          <!-- nav_wrap End-->

          <!-- m_nav-->
          <?php include "m_nav.php";?>
          <!-- m_nav End-->

          <!-- m_header-->
          <?php include "m_header.php";?>
          <!-- m_header End-->

          <!-- header_wrap -->
          <?php include "header.php";?>
          <!-- header_wrap End-->

            <!-- content_wrap -->
            <div class="content_wrap">
                <!-- common_table_wrap -->
                <div class="content common_table_wrap con_1250">

                  <!-- app_page_content -->
                  <div class="loginC_content">

                    <div class="loginC_story">
                      <img src="img/join.png" alt="컴퓨터아이콘">

                      <h4>회원가입이 완료 되었습니다.</h4>

                      <p>The Alls 회원이 되신 것을 환영합니다.<br/>
                      <span class="user_mail">abc@naver.com</span>님의 현재 인증단계는 <span>Level</span><span calss="user_level">1</span> 입니다.<br/>
                      거래를 이용하기 위해서 <span>인증단계</span>를 진행해야합니다.</p>

                      <div class="loginC_bt">
                        <input type="button" name="거래소버튼" value="거래소 둘러보기" onclick="location.href='index.php'" class="home_bt">
                        <input type="button" name="로그인 하기" value="로그인 하기" onclick="location.href='login.php'" class="login_bt">
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
