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
                <input type="button" class="back" onclick="location.href='m_account_coin_main.php'"/>
                <h2 class="header_title">비트코인(BTC) 출금 (1/3)</h2>
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
                    <div class="account_area my_assets my_assets_coin01">
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
                        <p>BTC 출금</p>
                        <table class="coin_in_table">
                          <tbody>

                            <tr>
                              <th>1회 출금한도</th>
                              <td>30.00100000 BTC</td>
                            </tr>

                            <tr>
                              <th>1일 잔여한도</th>
                              <td>500 BTC</td>
                            </tr>

                            <tr>
                              <th>나의 코인주소</th>
                              <td>adlkjlwlqrkrhtlveki@sdaasd</td>
                            </tr>

                          </tbody>

                        </table>


                        <div class="coin_warning">
                          <p><img src="img/m_check.png" alt="체크아이콘">출금신청 주의사항</p>
                          <ul>
                            <li>- 출금 신청시 심사가 진행되며, 최대 72시간 지연될 수 있습니다. 부정거래가 의심될 경우 출금이 제한될 수 있습니다.</li>
                            <li>- 출금 수수료 : 0.001 BTC / 출금 최소 금액 : 0.002 BTC</li>
                            <li>- 실제 전송되는 수량은 총 출금 암호화폐에서 출금수수료를 제외한 수량이 전송됩니다.</li>
                            <li>- 각 암호화폐의 입출금 이후 과정은 블록체인 네트워크에서 자동으로 처리 되므로 The Alls에서 별도의 조취를 취할 수 없습니다.</li>
                            <li>- 암호화폐의 지갑 주소 오기재로 인한 출금의 경우 The Alls에서 책임지지 않습니다. 지갑주소를 반드시 확인하시기 바랍니다.</li>
                          </ul>
                        </div>
                      </div>

                      <div class="coin_bt_area">
                        <input type="button" name='button' onclick="location.href='m_account_coin_out02.php'" value="다음" class="next_bt">
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
