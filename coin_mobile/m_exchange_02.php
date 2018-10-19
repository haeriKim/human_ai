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
    <link rel="stylesheet" href="css/exchange.css">
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
              <div id="header">
                <h2 class="header_title">거래소</h2>
                <div class="alarm_area">
                  <img src="img/bell.png" class="alarmBtn" alt="알림버튼"/>
                </div>
              </div> <!-- header End-->
            </div><!-- header_wrap End-->
            <!-- content_wrap -->
            <div class="content_wrap">
                <!-- main_content -->
                <div class="content">
                    <div class="box" id='deal_all'>
                        <div class="deal_table_scroll">
                          <table class='deal_table'>
                              <!-- <colgroup>
                              <col style="width:16%;"/>
                              <col style="width:26%;"/>
                              <col style="width:21%;"/>
                              <col style="width:27%;"/>
                              </colgroup> -->
                              <thead class='thead_deco deal_all_thead'>
                                <tr>
                                    <th class='deal_time'>체결시간</th>
                                    <th class='deal_price_KRW'>체결가격(KRW)</th>
                                    <th class='deal_amount'>체결량(BTC)</th>
                                    <th class='deal_money'>체결금액(KRW)</th>
                                </tr>
                            </thead>
                            <tbody class='deal_table_tbody'>
                                <tr>
                                    <td class='deal_time'>
                                        <p>08.27 <span>14:27</span></p>
                                    </td>
                                    <td class='deal_price_KRW_data'><span class='up_down_data'>7,400,000</span></td>
                                    <td class='deal_amount_data'><span class='up_down_data money_down'>0.59500000</span></td>
                                    <td class='deal_money_data'><span class='up_down_data'>3,700,000</span></td>
                                </tr>
                                <tr>
                                    <td class='deal_time'>
                                        <p>08.27 <span>14:27</span></p>
                                    </td>
                                    <td class='deal_price_KRW_data'><span class='up_down_data money_up'>7,400,000</span></td>
                                    <td class='deal_amount_data'><span class='up_down_data money_up'>0.00400000</span></td>
                                    <td class='deal_money_data'><span class='up_down_data'>754,000</span></td>
                                </tr>
                                <tr>
                                    <td class='deal_time'>
                                        <p>08.27 <span>14:27</span></p>
                                    </td>
                                    <td class='deal_price_KRW_data'><span class='up_down_data money_up'>7,400,000</span></td>
                                    <td class='deal_amount_data'><span class='up_down_data money_up'>0.00400000</span></td>
                                    <td class='deal_money_data'><span class='up_down_data'>230,000</span></td>
                                </tr>
                                <tr>
                                    <td class='deal_time'>
                                        <p>08.27 <span>14:27</span></p>
                                    </td>
                                    <td class='deal_price_KRW_data'><span class='up_down_data money_up'>7,400,000</span></td>
                                    <td class='deal_amount_data'><span class='up_down_data money_up'>0.00400000</span></td>
                                    <td class='deal_money_data'><span class='up_down_data'>75,000</span></td>
                                </tr>
                                <tr>
                                    <td class='deal_time'>
                                        <p>08.27 <span>14:27</span></p>
                                    </td>
                                    <td class='deal_price_KRW_data'><span class='up_down_data money_down'>7,005,000</span></td>
                                    <td class='deal_amount_data'><span class='up_down_data money_down'>0.59500000</span></td>
                                    <td class='deal_money_data'><span class='up_down_data'>75,000</span></td>
                                </tr>
                                <tr>
                                    <td class='deal_time'>
                                        <p>08.27 <span>14:27</span></p>
                                    </td>
                                    <td class='deal_price_KRW_data'><span class='up_down_data money_down'>7,005,000</span></td>
                                    <td class='deal_amount_data'><span class='up_down_data money_down'>0.59500000</span></td>
                                    <td class='deal_money_data'><span class='up_down_data'>75,000</span></td>
                                </tr>
                                <tr>
                                    <td class='deal_time'>
                                        <p>08.27 <span>14:27</span></p>
                                    </td>
                                    <td class='deal_price_KRW_data'><span class='up_down_data money_down'>7,005,000</span></td>
                                    <td class='deal_amount_data'><span class='up_down_data money_down'>0.59500000</span></td>
                                    <td class='deal_money_data'><span class='up_down_data'>75,000</span></td>
                                </tr>
                                <tr>
                                    <td class='deal_time'>
                                        <p>08.27 <span>14:27</span></p>
                                    </td>
                                    <td class='deal_price_KRW_data'><span class='up_down_data money_down'>7,005,000</span></td>
                                    <td class='deal_amount_data'><span class='up_down_data money_down'>0.59500000</span></td>
                                    <td class='deal_money_data'><span class='up_down_data'>75,000</span></td>
                                </tr>
                                <tr>
                                    <td class='deal_time'>
                                        <p>08.27 <span>14:27</span></p>
                                    </td>
                                    <td class='deal_price_KRW_data'><span class='up_down_data'>7,400,000</span></td>
                                    <td class='deal_amount_data'><span class='up_down_data money_down'>0.59500000</span></td>
                                    <td class='deal_money_data'><span class='up_down_data'>75,000</span></td>
                                </tr>
                                <tr>
                                    <td class='deal_time'>
                                        <p>08.27 <span>14:27</span></p>
                                    </td>
                                    <td class='deal_price_KRW_data'><span class='up_down_data'>7,400,000</span></td>
                                    <td class='deal_amount_data'><span class='up_down_data money_down'>0.59500000</span></td>
                                    <td class='deal_money_data'><span class='up_down_data'>75,000</span></td>
                                </tr>
                                <tr>
                                    <td class='deal_time'>
                                        <p>08.27 <span>14:27</span></p>
                                    </td>
                                    <td class='deal_price_KRW_data'><span class='up_down_data'>7,400,000</span></td>
                                    <td class='deal_amount_data'><span class='up_down_data money_down'>0.59500000</span></td>
                                    <td class='deal_money_data'><span class='up_down_data'>75,000</span></td>
                                </tr>
                            </tbody>
                          </table>
                        </div>
                    </div><!-- con_410 End-->
                </div><!-- exchange_content End-->
            </div><!-- content_wrap End-->

            <!-- nav_wrap -->
            <?php include "nav.php";?>
            <!-- nav_wrap End-->

        </div><!-- container End -->
    </div><!-- wrap End -->
</body>
</html>
