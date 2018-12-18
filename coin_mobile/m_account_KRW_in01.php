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
                <input type="button" class="back" onclick="location.href='m_account_KRW_main.php'"/>
                <h2 class="header_title">원화(KRW) 입금 (1/3)</h2>
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
                    <div class="account_area my_assets_KRW01 my_assets">

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
                          </ul>
                        </div>
                      </div>

                      <div class="KRW_inout">
                        <p>등록한 계좌정보</p>
                        <table class="KRW_table">
                          <tbody>

                            <tr>
                              <th>은행</th>
                              <td>국민은행</td>
                            </tr>

                            <tr>
                              <th>계좌번호</th>
                              <td>12*********123</td>
                            </tr>

                            <tr>
                              <th>예금주</th>
                              <td>홍길동</td>
                            </tr>

                          </tbody>

                        </table>


                        <div class="KRW_warning">
                          <p><img src="img/m_check.png" alt="체크아이콘"/>입금신청 주의사항</p>
                          <ul>
                            <li>- 인증하신 계좌에서만 입금이 가능합니다. 또한, 인증하신 계좌로 입금하더라도 입금자명을 다르게 입력하면 처리가 되지 않을 수 있으니 주의하시기 바랍니다.</li>
                            <li>- 인터넷 뱅킹, 모바일 뱅킹, ATM기기를 통해 입금이 가능합니다.(ATM기기의 경우 체크카드로만 거래가 가능합니다.)</li>
                            <li>- 은행 창구, 텔레뱅킹, 토스 및 카카오페이 등을 통한 입금은 불가능합니다.</li>
                            <li>- 입금시 KRW는 1:1 비율로 입금됩니다. (100,000원 입금 → 100,000KRW 입금)</li>
                            <li>- 출금 신청시 심사가 진행되며, 최대 72시간 지연될 수 있습니다. 부정거래가 의심될 경우 출금이 제한될 수 있습니다.</li>
                          </ul>
                        </div>
                      </div>

                      <div class="KRW_bt_area">
                        <input type="button" name='button' onclick="location.href='m_account_KRW_in02.php'" value="다음" class="next_bt">
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
