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
                <h2 class="header_title">비트코인(BTC) 입금 (1/3)</h2>
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
                        <div class="qr_code">
                          <img src="img/qr_code.png" alt="qr코드">
                        </div>

                        <p>입금할 BTC 주소(입금전용)</p>
                        <table class="coin_in_table">
                          <tbody>

                            <tr>
                              <td>ewercwsd02s8rch&sm=top_hty&fbm=18564=@os</td>
                            </tr>

                          </tbody>

                        </table>

                        <div class="copy_bt">
                          <input type="button" value="복사하기">
                        </div>


                        <div class="coin_warning">
                          <p><img src="img/m_check.png" alt="체크아이콘">입금신청 주의사항</p>
                          <ul>
                            <li>KRW를 처음 입금하시는 경우 3영업일(72시간) 동안 KRW 및 암호화폐의 출금이 제한됩니다.</li>
                            <li>외부 지갑으로부터 위의 주소로 암호화폐를 전송하게되면 회원님의 전자지갑에 반영됩니다.</li>
                            <li>입금받는 지갑에서 입금내역을 확인하기까지 30분~1시간 정도의 시간이 소요되며, 상황에 따라 지연이 발생할 수 있습니다.</li>
                            <li>다른 거래소 지갑으로 송금하는 경우, 해당 거래소 정책의 영향을 받을 수 있습니다.</li>
                            <li>암호화폐는 전송 후 되돌릴 수 없기 때문에 지갑 주소를 반드시 확인하고 전달해 주세요. 지갑 주소 혼동으로 발생하는 문제나 손실에 대해서는 Tha Alls는 책임지지 않습니다.</li>
                          </ul>
                        </div>
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
