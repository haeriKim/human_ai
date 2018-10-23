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
    <link rel="stylesheet" href="css/account_KRW.css">
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
                <input type="button" class="back" onclick="location.href='m_account_main.php'"/>
                <h2 class="header_title">원화(KRW) 입금 (2/3)</h2>
                <div class="alarm_area">
                  <img src="img/bell.png" class="alarmBtn" alt="알림버튼"/>
                </div>
              </div>
            </div> <!-- header End-->
          </div><!-- header_wrap End-->

            <!-- mycoin_content_wrap -->
            <div class="mycoin_content_wrap">
                <!-- m_mycoin_main -->
                <div class="content">
                    <div class="account_area my_assets my_assets_KRW02">
                      <div class="box">
                      <div class="assetBox">
                        <ul class="asset all_assets">
                          <li class='border_bottom_none'>
                              <p class='mywallet_title'>총 보유자산</p>
                              <p class="up_down_data mywallet_amount">8,123.60<span>KRW</span></p>
                              <div class='notification_wrap'>
                                  <p class='notification notification_01'>거래대기</p>
                                  <p class='notification notification_a_01'>2,992.99 KRW</p>
                              </div>
                              <div class='notification_wrap'>
                                  <p class='notification notification_02'>출금가능</p>
                                  <p class='notification notification_a_02'>381.02 KRW</p>
                              </div>
                          </li>
                          <li class='button_li'>
                              <a href="#">입금하기</a>
                              <a href="#">출금하기</a>
                          </li>
                        </ul>
                      </div>
                    </div>


                    <div class="KRW_in">
                     <div class="KRW_input">

                        <p>출금할 금액을 입력해 주세요.</p>

                        <form>
                          <input type="text" placeholder="0" class="send_money" maxlength="10" required><span>KRW</span>
                        </form>

                        <ul class="KRW_unit">
                          <li>10만</li>
                          <li>50만</li>
                          <li>100만</li>
                          <li>1000만</li>
                        </ul>

                        <p>보안 비밀번호</p>
                        <input type="text" placeholder="보안비밀번호를 입력하세요." class="send_money" maxlength="4" required>
                        <p>OTP 인증번호</p>
                        <input type="text" placeholder="OTP 인증번호를 입력하세요." class="send_money" maxlength="4" required>
                        <p>휴대폰 SMS 인증</p>
                        <input type="text" placeholder="인증번호를 입력하세요." class="send_money" maxlength="6" required>

                        <ul class="KRW_warning_list">
                          <li>1회 출금한도: 100,000,000 KRW</li>
                          <li>1일 잔여한도: 200,000,000 KRW</li>
                          <li>수수료: 1000 KRW</li>
                          <li>입금 후 출금시간: 72시간</li>
                        </ul>
                        
                      </div>

                      </div>

                      <div class="KRW_bt_area2">
                        <input type="button" name='button' value="다음" class="next_bt">
                      </div>


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