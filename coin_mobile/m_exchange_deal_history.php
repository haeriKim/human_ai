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
                <div class="headerTop">
                  <input type="button" class="back" onclick="location.href='m_exchange_main.php'"/>
                  <!-- 코인선택 영역 -->
                  <div class="coinSelect_area">
                    <select id="coin_select" name="coin_select">
                        <option value="전체">비트코인 BTC/KRW</option>
                        <option value="비트코인캐시 BCH/KRW">비트코인캐시 BCH/KRW</option>
                        <option value="이더리움 ETH/KRW">이더리움 ETH/KRW</option>
                        <option value="이더리움클래식 ETC/KRW">이더리움클래식 ETC/KRW</option>
                        <option value="이오스 EOS/KRW">이오스 EOS/KRW</option>
                        <option value="리플 XRP/KRW">리플 XRP/KRW</option>
                        <option value="에이다 ADA/KRW">에이다 ADA/KRW</option>
                    </select>
                  </div>
                  <div class="alarm_area">
                    <img src="img/bell.png" class="alarmBtn" alt="알림버튼" onclick="location.href='m_alarm.php'"/>
                  </div>
                </div>
                <div class="current_price">
                  <div class="price">
                    <p>현재가</p>
                    <span><strong>10,650</strong>KRW</span>
                  </div>
                  <div class="percent">
                    <p>전일대비</p>
                    <span><strong>-0.31</strong>%</span>
                    <span><img src="img/arrow_down_blue.png" alt="시세하락">500</span>
                  </div>
                </div>
              </div> <!-- header End-->
            </div><!-- header_wrap End-->
            <!-- content_wrap -->
            <div class="content_wrap">

                <ul class="gnb_tab">
                  <li><a href="m_exchange_buy_sell_market.php">주문</a></li>
                  <li><a href="m_exchange_price_change.php">호가</a></li>
                  <li><a href="m_exchange_chart.php">차트</a></li>
                  <li class="on"><a href="#">전체체결</a></li>
                  <li><a href="m_exchange_info_bitcoin.php">코인정보</a></li>
                </ul>

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

            <div class='none_box'></div>
            <!-- nav_wrap -->
            <?php include "nav.php";?>
            <!-- nav_wrap End-->

        </div><!-- container End -->
    </div><!-- wrap End -->
</body>
</html>
