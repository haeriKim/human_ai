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
    <link rel="stylesheet" href="css/certification_05.css">
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

          <div id ="header_wrap">
            <!-- header -->
            <div id="header2">
              <div class="headerTop">
              <a href="m_certification_main.php"/> <input type="button" class="back" ></a>
                <h2 class="header_title">OTP 인증</h2>
                <div class="alarm_area">
                  <img src="img/bell.png" class="alarmBtn" alt="알림버튼" onclick="location.href='m_alarm.php'"/>
                </div>
              </div>
            </div> <!-- header End-->
          </div><!-- header_wrap End-->

            <!-- mycoin_content_wrap -->
            <div class="mycoin_content_wrap">
                <!-- m_mycoin_main -->
                <div class="content">
                    <div class="certification_OTP_area">

                        <div class="OTP_inner">
                          <p class="OTP_title">STEP1. OTP앱을 스마트폰에 다운로드 받으세요.</p>
                          <div class="download_area">

                          <ul class="app">
                            <!--<li class="app_title">[ android 전용 Google OTP ]</li>-->
                            <li class="app_text">
                              <!--<img src="img/apple_app.png" alt="안드로이드구글OTP" class="android_img">-->
                              <br/>
                              <p>[ Android 전용 ]</p>
                              <p><a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&rdid=com.google.android.apps.authenticator2" target="_blank">
                                <img src="img/playstore.png" alt="플레이스토어" class="playstore">
                              </a></p>
                              <!--<span>'Google OTP'를 검색하신 후 다운로드 받으세요.</span>-->

                            </li>


                            <!--<li class="app_title">[ ios 전용 Google Authenticator ]</li>-->
                            <li class="app_text2">
                              <!--<img src="img/apple_app.png" alt="애플구글OTP" class="apple_img">-->
                              <br/>
                              <p>[ IOS 전용 ]</p>
                              <p><a href="https://itunes.apple.com/kr/app/google-authenticator/id388497605?mt=8" target="_blank">
                                <img src="img/appstore.png" alt="앱스토어" class="appstore">
                              </a></p>
                              <!--<span>'Google Authenticator'를 검색하신 후 다운로드 받으세요.</span>-->

                            </li>
                          </ul>

                        </div>

                          <p class="OTP_title borderTop">STEP2. 다운로드 받은 앱에 'QR'코드를 스캔하거나 '16자리 코드번호'를 입력해주세요.</p>

                          <div class="qr_code_area">
                          <ul class="qr_code_img">
                            <li class="qr_code_text">QR 코드</li>
                            <li><img src="img/qr_code.png" alt="qr코드" class="qr_code_imgbox"></li>
                          </ul>

                          <ul class="qr_code_key">
                            <li class="qr_code_number">16자리 코드번호</li>
                            <li class="qr_code_key2">NRSLK7JWICMZLXBAWEZ</li>
                          </ul>
                        </div>

                          <p class="OTP_title borderTop">STEP3. '2단계'완료 후 OTP 인증 앱에 표시된 인증번호(6자리)를 입력해주세요.</p>

                          <div class="key_area">
                            <form action="#" method="post" class="OTP_codebox">

                              <input type="number" placeholder="OTP번호를 입력하세요." name='inputBox' required max="999999" min="999999" class="OTP_number user_otpNum">
                              <!--<p id='warning_message'>OTP번호가 일치하지 않습니다.</p>-->

                              <div id="OTP_complete">

                                  <input type="button" name="취소" value="취소" onclick="location.href='m_certification_main.php'" class="cancel">
                                  <input type="submit" name="등록" value="등록" onclick="location.href='m_certification_success05.php'" class="OTP_complete"/>

                              </div>
                            </form>
                          </div>


                        </div>


                        <div class="none_box"></div>


                    </div><!-- assets_area End-->
                </div><!-- m_mycoin_main End-->
            </div><!-- mycoin_content_wrap End-->

            <!-- nav -->
            <?php include "nav.php";?>
            <!-- nav End-->

        </div><!-- container End -->
        <!-- nav_wrap -->
        <!-- nav_wrap End-->
    </div><!-- wrap End -->
</body>
</html>
