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
                <h2 class="header_title">거래소</h2>
                <div class="alarm_area">
                  <img src="img/bell.png" class="alarmBtn" alt="알림버튼" onclick="location.href='m_alarm.php'"/>
                </div>
              </div>
            </div> <!-- header End-->
          </div><!-- header_wrap End-->

            <!-- content_wrap -->
            <div class="main_content_wrap">
                <!-- main_content -->
                <div class="content">
                    <div class="box" id='deal_orgin_transaction'>
                        <ul class='gnb_tab'>
                            <li class='on tab_KRW'><a href="#">KRW</a></li>
                        </ul>
                        <div class="table_scroll">
                        <div class="table_wrap">
                          <select id="look_method" name="look_method">
                              <option value="전체">전체</option>
                              <option value="보유 코인 보기">보유 코인 보기</option>
                              <option value="즐겨찾기 코인 보기">즐겨찾기 코인 보기</option>
                          </select>
                          <table class='deal_table'>
                            <colgroup>
                                <col style="width:33%;"/>
                                <col style="width:23%;"/>
                                <col style="width:22%;"/>
                                <col style="width:22%;"/>
                            </colgroup>
                            <thead class='thead_deco'>
                                <tr>
                                    <th class='coin_kor'>
                                      <a class="coinName">
                                        <span>한글명</span>
                                        <img src="img/side_arrow.png" alt="화살표" class="change_arrow">
                                      </a>
                                    </th>
                                    <th><a><span>현재가</span><img src="img/up_down_default.png" alt="화살표"></a></th>
                                    <th><a><span>전일대비</span><img src="img/up_down_down.png" alt="화살표"></a></th>
                                    <th><a><span>거래대금</span><img src="img/up_down_up.png" alt="화살표"></a></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr onclick="location.href='m_exchange_buy_sell_market.php'">
                                    <td>
                                        <p class="kor_name">비트코인</p>
                                        <p style='display:none;' class="eng_name">Bitcoin</p>
                                        <span class='unit'>BTC/KRW</span>
                                    </td>
                                    <td><span class='up_down_data money_up'>7,500,000</span></td>
                                    <td><span class='up_down_data money_up'>+1.20%</span></td>
                                    <td><span class='up_down_data'>74,000,000</span></td>
                                </tr>
                                <tr>
                                    <td class='coin_kor'>
                                        <p class="kor_name">비트코인캐시</p>
                                        <p style='display:none;' class="eng_name">Bitcoin Cash</p>
                                        <span class='unit'>BCH/KRW</span>
                                    </td>
                                    <td><span class='up_down_data money_up'>599,000</span></td>
                                    <td><span class='up_down_data money_up'>+0.00%</span></td>
                                    <td><span class='up_down_data'>7,000,000</span></td>
                                </tr>
                                <tr>
                                    <td class='coin_kor'>
                                        <p class="kor_name">이더리움</p>
                                        <p style='display:none;' class="eng_name">Ethereum</p>
                                        <span class='unit'>ETH/KRW</span>
                                    </td>
                                    <td><span class='up_down_data money_up'>800,000</span></td>
                                    <td><span class='up_down_data money_up'>+1.20%</span></td>
                                    <td><span class='up_down_data'>700,000</span></td>
                                </tr>
                                <tr>
                                    <td class='coin_kor'>
                                        <p class="kor_name">이더리움클래식</p>
                                        <p style='display:none;' class="eng_name">Ethereum Classic</p>
                                        <span class='unit'>ETC/KRW</span>
                                    </td>
                                    <td><span class='up_down_data money_nochange'>800,000</span></td>
                                    <td><span class='up_down_data'>+0.00%</span></td>
                                    <td><span class='up_down_data'>700,000</span></td>
                                </tr>
                                <tr>
                                    <td class='coin_kor'>
                                        <p class="kor_name">리플</p>
                                        <p style='display:none;' class="eng_name">Ripple</p>
                                        <span class='unit'>XRP/KRW</span>
                                    </td>
                                    <td><span class='up_down_data money_down'>900,000</span></td>
                                    <td><span class='up_down_data money_down'>-1.20%</span></td>
                                    <td><span class='up_down_data'>700,000</span></td>
                                </tr>
                                <tr>
                                    <td class='coin_kor'>
                                        <p class="kor_name">에이다</p>
                                        <p style='display:none;' class="eng_name">Ada</p>
                                        <span class='unit'>ADA/KRW</span>
                                    </td>
                                    <td><span class='up_down_data money_down'>7,500,000</span></td>
                                    <td><span class='up_down_data money_down'>-1.20%</span></td>
                                    <td><span class='up_down_data'>700,000</span></td>
                                </tr>
                                <tr>
                                    <td class='coin_kor'>
                                        <p class="kor_name">이오스</p>
                                        <p style='display:none;' class="eng_name">EOS</p>
                                        <span class='unit'>EOS/KRW</span>
                                    </td>
                                    <td><span class='up_down_data money_down'>600,000</span></td>
                                    <td><span class='up_down_data money_down'>-1.20%</span></td>
                                    <td><span class='up_down_data'>700,000</span></td>
                                </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div><!-- con_410 End-->
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
