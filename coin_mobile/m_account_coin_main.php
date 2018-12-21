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
    <link rel="stylesheet" href="css/account_money_main.css">
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
                <h2 class="header_sub_title">비트코인(BTC) 입출금</h2>
                <div class="alarm_area">
                  <img src="img/bell.png" class="alarmBtn" alt="알림버튼" onclick="location.href='m_alarm.php'"/>
                </div>
              </div>
            </div> <!-- header End-->
          </div><!-- header_wrap End-->

            <!-- mycoin_content_wrap -->
            <div class="mycoin_content_wrap">
                <!-- content -->
                <div class="content">
                    <!-- my_assets -->
                    <div class="account_area my_assets">
                      <!-- box -->
                      <div class="box">
                        <!-- assetBox -->
                        <div class="assetBox">
                          <ul class="asset all_assets">
                            <li class='border_bottom_none'>
                                <p class='mywallet_title'>총 보유자산</p>
                                <p class="up_down_data mywallet_amount">37,492.60<span>BTC</span></p>
                                <div class='notification_wrap'>
                                    <p class='notification notification_01'>거래대기</p>
                                    <p class='notification notification_a_01'>1,002.32 BTC</p>
                                </div>
                                <div class='notification_wrap'>
                                    <p class='notification notification_02'>출금가능</p>
                                    <p class='notification notification_a_02'>221.98 BTC</p>
                                </div>
                            </li>
                            <li class='button_li'>
                                <a href="m_account_coin_in01.php">입금하기</a>
                                <a href="m_account_coin_out01.php">출금하기</a>
                            </li>
                          </ul>
                        </div><!-- assetBox End-->
                      </div> <!-- box End-->
                    </div><!-- my_assets End-->

                    <!-- input_output_list -->
                    <div class="input_output_list">
                        <ul class='list_ul'>
                            <li onclick="location.href='m_account_coin_detail.php'">
                                <div class="list_li_row">
                                    <p class='list_condition'>출금 <span class='waiting'>대기중</span></p>
                                    <p class='list_amount'>10 BTC</p>
                                </div>
                                <div class="list_li_row">
                                    <p class='list_time'>2018-09-06 23:11:11</p>
                                    <p class='list_charge'>수수료 0.001 BTC</p>
                                </div>
                                <img src="img/more_view4.png" alt="자세히" width="20px" height="20px">
                            </li>
                            <li onclick="location.href='m_account_coin_detailF.php'">
                                <div class="list_li_row">
                                    <p class='list_condition'>출금 <span class='fail'>실패</span></p>
                                    <p class='list_amount'>0.003 BTC</p>
                                </div>
                                <div class="list_li_row">
                                    <p class='list_time'>2018-09-05 11:23:45</p>
                                    <p class='list_charge'>수수료 0.001 BTC</p>
                                </div>
                                <img src="img/more_view4.png" alt="자세히" width="20px" height="20px">
                            </li>
                            <li onclick="location.href='m_account_coin_detailS.php'">
                                <div class="list_li_row">
                                    <p class='list_condition'>입금 <span class='success'>완료</span></p>
                                    <p class='list_amount'>0.1 BTC</p>
                                </div>
                                <div class="list_li_row">
                                    <p class='list_time'>2018-09-05 11:23:45</p>
                                    <p class='list_charge'>수수료 0 BTC</p>
                                </div>
                                <img src="img/more_view4.png" alt="자세히" width="20px" height="20px">
                            </li>
                        </ul>
                    </div><!-- input_output_list End-->

                </div><!-- content End-->
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
