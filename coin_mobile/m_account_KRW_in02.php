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
                <input type="button" class="back" onclick="location.href='m_account_KRW_in01.php'"/>
                <h2 class="header_title">원화(KRW) 입금 (2/3)</h2>
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
                    <div class="account_area my_assets_KRW02 my_assets">

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
                        </div><!-- assetBox End-->
                      </div>


                    <div class="KRW_inout">
                     <div class="KRW_input_outout">

                        <p>입금할 금액</p>

                        <form>
                          <input type="tel" placeholder="0" class="send_money" value="" autocomplete="off" required onchange="getNumber(this);" onkeyup="getNumber(this);"/><span>KRW</span>
                        </form>

                        <div class="KRW_unit">
                          <input type="button" value="+ 10만" class="priceBtn priceBtn_01"/>
                          <input type="button" value="+ 50만" class="priceBtn priceBtn_02"/>
                          <input type="button" value="+ 100만" class="priceBtn priceBtn_03"/>
                          <input type="button" value="+ 1000만" class="priceBtn priceBtn_04"/>
                        </div>

                        <ul class="KRW_warning_list">
                          <li class="text">※ 등록된 계좌로 해당된 금액을 한번에 입금하셔야 합니다.</li>
                          <li>- 최소 입금 금액: 없음</li>
                          <li>- 입금 수수료: 무료</li>
                          <li>- 최대 입금 금액: 무제한</li>
                          <li>- 출금 신청시 대기시간: 최대 72시간</li>
                        </ul>
                      </div>

                      </div>

                      <div class="KRW_bt_area">
                        <input type="button" name='button' onclick="location.href='m_account_KRW_in03.php'" value="다음" class="next_bt">
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
