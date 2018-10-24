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
    <link rel="stylesheet" href="css/account_coin.css">
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
                <h2 class="header_title">비트코인(BTC) 출금 (2/3)</h2>
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
                    <div class="account_area my_assets my_assets_coin02">
                      <div class="box">
                      <div class="assetBox">
                        <ul class="asset all_assets">
                          <li class='border_bottom_none'>
                            <p class='mywallet_title'>총 보유자산</p>
                            <p class="up_down_data mywallet_amount">374,92.60<span>BTC</span></p>
                            <div class='notification_wrap'>
                                <p class='notification notification_01'>거래대기</p>
                                <p class='notification notification_a_01'>1,002.32 BTC</p>
                            </div>
                            <div class='notification_wrap'>
                                <p class='notification notification_02'>출금가능</p>
                                <p class='notification notification_a_02'>221.98 BTC</p>
                              </div>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="coin_inout">
                     <div class="coin_input_outout">

                        <p class="title">출금할 금액</p>

                        <form>
                          <input type="text" placeholder="0" class="send_money" maxlength="10" required><span>BTC</span>


                        <div class="coin_unit">
                          <input type="button" value="10만" class="priceBtn"/>
                          <input type="button" value="50만" class="priceBtn"/>
                          <input type="button" value="100만" class="priceBtn"/>
                          <input type="button" value="1000만" class="priceBtn"/>
                        </div>

                        <p class="input_title">코인출금 주소</p>
                          <input type="text" placeholder="출금할 코인 주소를 입력하세요." class="security_num step" required>
                        <p class="input_title">보안 비밀번호</p>
                          <input type="text" placeholder="보안비밀번호를 입력하세요." class="security_num step" maxlength="4" required>
                        <p class="input_title">OTP 인증번호</p>
                          <input type="text" placeholder="OTP 인증번호를 입력하세요." class="otp_num step" maxlength="4" required>
                        </form>

                        <ul class="coin_warning_list">
                          <li>- 출금 수수료: 0.0005 BTC</li>
                          <li>- 실제 출금금액: -0.0005 BTC</li>

                        </ul>
                      </div>

                      </div>


                      <div class="coin_bt_area">
                        <input type="button" name='button' onclick="location.href='m_account_coin_out03.php'" value="다음" class="next_bt">
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
