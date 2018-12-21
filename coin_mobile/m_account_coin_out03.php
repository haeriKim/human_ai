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
                <input type="button" class="back" onclick="location.href='m_account_coin_out02.php'"/>
                <h2 class="header_title">비트코인(BTC) 출금 (3/3)</h2>
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
                    <div class="account_area my_assets my_assets_coin03">
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
                        <p>출금 정보</p>
                        <table class="coin_table">
                          <tbody>

                            <tr class='coin_address'>
                              <th>나의 코인주소</th>
                              <td>3K7pN35WjZf79jfqqx4JmRJ</td>
                            </tr>

                            <tr class='coin_address'>
                              <th>코인 출금주소</th>
                              <td>3K7pN35WjZf79jfqqx4JmRJ</td>
                            </tr>

                            <tr>
                              <th>출금금액</th>
                              <td>11,000,000 BTC</td>
                            </tr>

                            <tr>
                              <th>수수료</th>
                              <td>0.001 BTC</td>
                            </tr>
                        </tbody>

                        </table>


                        <div class="coin_warning">


                        </div>
                      </div>

                      <div class="coin_bt_area">
                        <input type="button" name='button' onclick="location.href='m_account_coin_main.php'" value="취소" class="no_cancel_bt">
                        <input type="button" name='button' onclick="location.href='m_account_coin_main.php'" value="출금신청" class="next_bt">
                      </div>


                    </div><!-- assets_area End-->
                </div><!-- m_mycoin_main End-->
            </div><!-- mycoin_content_wrap End-->

            <div class="none_box"></div>
            <!-- nav -->
            <?php include "nav.php";?>
            <!-- nav End-->

        </div><!-- container End -->
        <!-- nav_wrap -->
        <!-- nav_wrap End-->
    </div><!-- wrap End -->
</body>
</html>
