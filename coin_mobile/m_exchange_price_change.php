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
    <link rel="stylesheet" href="css/exchange55.css">
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
                  <img src="img/bell.png" class="alarmBtn" alt="알림버튼"/>
                </div>
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
            </div>
            <!-- content_wrap -->
            <div class="content_wrap content_wrap_margin">
                <ul class="gnb_tab">
                  <li><a href="m_exchange_buy_sell_market.php">주문</a></li>
                  <li class="on"><a href="#">호가</a></li>
                  <li><a href="m_exchange_chart.php">차트</a></li>
                  <li><a href="m_exchange_deal_history.php">전체체결</a></li>
                  <li><a href="m_exchange_info_bitcoin.php">코인정보</a></li>
                </ul>
                <!-- main_content -->
                <div class="content">
                    <div class="box" id='deal_orgin_transaction'>

                      <div class="deal_scroll">
                        <!--bid_price-->
                        <div class="box bid_price">
                          <table>

                              <thead class='thead_deco'>
                                <tr>
                                  <th class="mado_amount">매도잔량</th>
                                  <th colspan="2" class="order_price">주문가</th>
                                  <th colspan="2" class="masu_amount">매수잔량</th>
                                </tr>
                              </thead>

                              <tbody>
                               <tr>
                                 <td class="mado_right mado1 border_right"><div></div>0.100</td>
                                 <td class="orderbg1 upprice">7,000,000</td>
                                 <td class="orderbg1 upprice border_right">+3.58%</td>
                                 <td>전일가격</td>
                                 <td class="center">7,510,000</td>
                               </tr>

                               <tr>
                                 <td class="mado_right mado2 border_right"><div></div>0.100</td>
                                 <td class="orderbg1 upprice">7,000,000</td>
                                 <td class="orderbg1 upprice border_right">+3.58%</td>
                                 <td rowspan="2">고가</td>

                                 <td rowspan="2" class="high upprice">7,624,000 <p class="high upprice">(+3.58%)</p></td>

                               </tr>

                               <tr>
                                 <td class="mado_right mado3 border_right"><div></div>1.001</td>
                                 <td class="orderbg1 upprice">7,000,000</td>
                                 <td class="orderbg1 upprice border_right">+3.58%</td>

                               </tr>

                               <tr>
                                 <td class="mado_right mado4 border_right"><div></div>0.024</td>
                                 <td class="orderbg1 upprice">7,000,000</td>
                                 <td class="orderbg1 upprice border_right">+3.58%</td>
                                 <td rowspan="2">저가</td>

                                 <td rowspan="2" class="low downprice">7,200,000 <p class="high downprice">(-4.13%)</p></td>



                               </tr>

                               <tr>
                                 <td class="mado_right mado5 border_right"><div></div>0.267</td>
                                 <td class="orderbg1">7,000,000</td>
                                 <td class="orderbg1 border_right">0%</td>

                               </tr>

                               <tr>
                                 <td class="mado_right mado6 border_right"><div></div>0.346</td>
                                 <td class="orderbg1">7,000,000</td>
                                 <td class="orderbg1 border_right">0%</td>
                                 <td colspan="2" rowspan="5"></td>

                               </tr>

                               <tr>
                                 <td class="mado_right mado7 border_right"><div></div>1.000</td>
                                 <td class="orderbg1">7,000,000</td>
                                 <td class="orderbg1 border_right">0%</td>

                               </tr>

                               <tr>
                                 <td class="mado_right mado8 border_right"><div></div>0.874</td>
                                 <td class="orderbg1 downprice">7,000,000</td>
                                 <td class="orderbg1 downprice border_right">-0.21%</td>

                               </tr>

                               <tr>
                                 <td class="mado_right mado9 border_right"><div></div>0.108</td>
                                 <td class="orderbg1 downprice">7,000,000</td>
                                 <td class="orderbg1 downprice border_right">-0.21%</td>

                               </tr>

                               <tr>
                                 <td class="mado_right mado10 border_right"><div></div>0.108</td>
                                 <td class="orderbg1 downprice">7,000,000</td>
                                 <td class="orderbg1 downprice border_right">-0.21%</td>

                               </tr>

                               <tr>
                                 <td rowspan="10" class="border_right"></td>
                                 <td class="orderbg2 upprice">7,000,000</td>
                                 <td class="orderbg2 border_right">+3.58%</td>
                                 <td colspan="2" class="masu_left masu1 upprice"><div></div>0.100</td>

                               </tr>

                               <tr>

                                 <td class="orderbg2 upprice">7,000,000</td>
                                 <td class="orderbg2 border_right">+3.58%</td>
                                 <td colspan="2" class="masu_left masu2 upprice"><div></div>0.100</td>

                               </tr>

                               <tr>

                                 <td class="orderbg2 upprice">7,000,000</td>
                                 <td class="orderbg2 border_right">+3.58%</td>
                                 <td colspan="2" class="masu_left masu3 upprice"><div></div>1.001</td>

                               </tr>

                               <tr>

                                 <td class="orderbg2 upprice">7,000,000</td>
                                 <td class="orderbg2 border_right">+3.58%</td>
                                 <td colspan="2" class="masu_left masu4 upprice"><div></div>0.024</td>

                               </tr>

                               <tr>

                                 <td class="orderbg2">7,000,000</td>
                                 <td class="orderbg2 border_right">+3.58%</td>
                                 <td colspan="2" class="masu_left masu5"><div></div>0.267</td>

                               </tr>

                               <tr>

                                 <td class="orderbg2">7,000,000</td>
                                 <td class="orderbg2 border_right">+3.58%</td>
                                 <td colspan="2" class="masu_left masu6"><div></div>0.346</td>

                               </tr>

                               <tr>

                                 <td class="orderbg2">7,000,000</td>
                                 <td class="orderbg2 border_right">+3.58%</td>
                                 <td colspan="2" class="masu_left masu7"><div></div>1.000</td>

                               </tr>

                               <tr>

                                 <td class="orderbg2 downprice">7,000,000</td>
                                 <td class="orderbg2 border_right">-0.21%</td>
                                 <td colspan="2" class="masu_left masu8 downprice"><div></div>0.874</td>

                               </tr>

                               <tr>

                                 <td class="orderbg2 downprice">7,000,000</td>
                                 <td class="orderbg2 border_right">-0.21%</td>
                                 <td colspan="2" class="masu_left masu9 downprice"><div></div>0.108</td>

                               </tr>

                               <tr>

                                 <td class="orderbg2 downprice">7,000,000</td>
                                 <td class="orderbg2 border_right">-0.21%</td>
                                 <td colspan="2" class="masu_left masu10 downprice"><div></div>0.108</td>

                               </tr>

                               <tr>

                                 <td class="mado_right">13,600</td>
                                 <td colspan="2" class="all_amount"><b>표시잔량합계</b></td>
                                 <td colspan="2" class="masu_left">8,000</td>

                               </tr>


                              </tbody>


                          </table>

                        </div><!--bid_price End-->
                      </div><!--deal_scroll End-->

                      <div class="none_box"></div>

                    </div><!-- deal_orgin_transaction End-->
                </div><!-- exchange_content End-->
            </div><!-- content_wrap End-->

            <!-- nav -->
            <?php include "nav.php";?>
            <!-- nav End-->

        </div><!-- container End -->
        <!-- nav_wrap -->
        <!-- nav_wrap End-->
    </div><!-- wrap End -->
</body>
</html>
