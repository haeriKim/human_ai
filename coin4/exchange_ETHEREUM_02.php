<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script><!--//배너 슬라이더-->
    <title>The Alls</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/exchange_02.css">
    <link rel="stylesheet" href="css/sub_menu.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="shortcut icon" href="img/favicon-16.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon-16.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon-32.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon-32.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon-16.png" type="image/x-icon">
    <link rel="icon" href="img/favicon-16.png" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon-32.png" type="image/x-icon">
    <link rel="icon" href="img/favicon-32.png" type="image/x-icon">

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

          <!-- nav_wrap -->
          <?php include "nav.php";?>
                    <!-- nav_wrap End-->


          <!-- header_wrap -->
          <?php include "header.php";?>
          <!-- header_wrap End-->

            <!-- content_wrap -->
            <div class="content_wrap">
                <!-- main_content -->
                <div class="content exchange_content con_1290">

                  <!--left_coin_menu-->
                  <div id="left_coin_menu">

            <!--coin_money-->
              <div class="box coin_money">

                <div class="coin_money_inner">
                  <div class="img_area">
                      <img src="img/eth_big.png" alt="이더리움" class="bitcoin_icon">
                  </div>
                  <ul>
                    <li>
                        <strong>이더리움</strong>
                        <b class="coin_word">ETH/KRW</b>
                    </li>
                    <li>
                      <span class="price">224,450<b class="won">KRW</b>
                      </span>
                    </li>
                    <li class="coin_prepare">
                      <strong>전일대비</strong>
                      <span class="prepare"><b>-0.20</b>%</span>
                      <span class="updownarrow"><img src="img/arrow_down_blue.png" class="ud" alt='하락'>450</span>
                    </li>
                  </ul>
                  <span class="question2">&#63;</span>
                </div>

                <ul class="coin_money_prepare">

                  <li class="hl_price">
                    <span class="hl_title">고가</span>
                    <p><span class="price_up">224,450</span><b class="won">KRW</b></p>
                  </li>
                  <li class="hl_price">
                    <span class="hl_title">저가</span>
                    <p><span class="price_down">223,850</span><b class="won">KRW</b></p>
                  </li>

                </ul>

                <ul class="coin_money_volume">

                  <li class="hl_volume">
                    <span class="hl_title">거래량<small>(24H)</small></span>
                      <p><span class="volume">28,205.483</span><b class="unit BTC">ETH</b></p>
                  </li>
                  <li class="hl_volume">
                    <span class="hl_title">거래대금<small>(24H)</small></span>
                      <p><span class="volume">6,318,260,353</span><b class="unit won">KRW</b></p>
                  </li>

                </ul>

              </div><!--coin_money End-->


<!-- 코인상세보기 시작 ------------------------------------------------------------------------------------------------------------------------------->
<!-- 코인상세보기 시작 ------------------------------------------------------------------------------------------------------------------------------->
<!-- 코인상세보기 시작 ------------------------------------------------------------------------------------------------------------------------------->


          <!--coin_money_detail / coin_money_ethurium-->

          <div class="box coin_money_detail coin_money_ethurium">
            <div class="coin_name"><h4>Ethereum</h4></div>
          <div id="detail_all">
            <p>(정보기준일:2018.08.28)</p>
            <!-- left_thick_table -->
            <table class='left_thick_table coinInfo_table'>
              <thead>

              </thead>
                <tbody>
                    <tr>
                        <th>최초발행</th>
                        <td>2015년 7월</td>
                    </tr>
                    <tr>
                        <th>코인/토큰</th>
                        <td>코인</td>
                    </tr>
                    <tr>
                        <th>시총순위</th>
                        <td>2위</td>
                    </tr>
                    <tr>
                        <th>시가총액</th>
                        <td>21.7조원(18.08.27 기준)</td>
                    </tr>
                    <tr>
                        <th>블록생성기</th>
                        <td>12초</td>
                    </tr>
                    <tr>
                        <th>유통량</th>
                        <td>90,000,000</td>
                    </tr>
                    <tr>
                        <th>총발행한도</th>
                        <td>제한없음</td>
                    </tr>
                    <tr>
                        <th>채굴보상량</th>
                        <td>5 ETH</td>
                    </tr>
                    <tr>
                        <th>국가</th>
                        <td>스위스</td>
                    </tr>
                    <tr>
                        <th>공식홈페이지</th>
                        <td><a href="https://www.ethereum.org/" target="_blank">www.ethereum.org/</a></td>
                    </tr>
                </tbody>
            </table><!-- left_thick_table End-->
              <span><a href="coin_info_ethurium.php">상세보기</a></span>
          </div>



        </div><!--coin_money_detail / coin_money_ethurium End-->

<!-- 코인상세보기 끝 ------------------------------------------------------------------------------------------------------------------------------->
<!-- 코인상세보기 끝 ------------------------------------------------------------------------------------------------------------------------------->
<!-- 코인상세보기 끝 ------------------------------------------------------------------------------------------------------------------------------->


<div class="box" id='deal_orgin_transaction'>

  <ul class="tab">
    <li data-tab="tab1" class="current" >KRW</li>
    <li data-tab="tab2" class=''>USDT</li>
  </ul>

  <!--tab1--><!--tab1--><!--tab1-->
  <div id="tab1" class="tabcontent current">
    <table class='deal_table'>
      <!-- <colgroup>
          <col style="width:33%;"/>
          <col style="width:23%;"/>
          <col style="width:22%;"/>
          <col style="width:22%;"/>
      </colgroup> -->
      <thead class='thead_deco'>
          <tr>
              <th class='coin_kor'>
                <a class="coinName">
                  <span>한글명</span>
                  <img src="img/side_arrow.png" alt="화살표" class="change_arrow">
                </a>
              </th>
              <th><a>현재가<img src="img/up_down_default.png" alt="화살표"></a></th>
              <th><a>전일대비<img src="img/up_down_down.png" alt="화살표"></a></th>
              <th><a>거래대금<img src="img/up_down_up.png" alt="화살표"></a></th>
          </tr>
      </thead>
      <tbody>
          <tr onclick="location.href='exchange_BITCOIN_02.php'">
              <td>
                  <p class="kor_name">비트코인</p>
                  <p style='display:none;' class="eng_name">Bitcoin</p>
                  <span class='unit'>BTC/KRW</span>
              </td>
              <td><span class='up_down_data money_up'>7,500,000</span></td>
              <td><span class='up_down_data money_up'>+1.20%</span></td>
              <td><span class='up_down_data'>74,000,000</span></td>
          </tr>
          <tr onclick="location.href='exchange_BITCOINCASH_02.php'">
              <td class='coin_kor'>
                  <p class="kor_name">비트코인캐시</p>
                  <p style='display:none;' class="eng_name">Bitcoin Cash</p>
                  <span class='unit'>BCH/KRW</span>
              </td>
              <td><span class='up_down_data money_up'>599,000</span></td>
              <td><span class='up_down_data money_up'>+0.00%</span></td>
              <td><span class='up_down_data'>7,000,000</span></td>
          </tr>
          <tr onclick="location.href='exchange_ETHEREUM_02.php'">
              <td class='coin_kor'>
                  <p class="kor_name">이더리움</p>
                  <p style='display:none;' class="eng_name">Ethereum</p>
                  <span class='unit'>ETH/KRW</span>
              </td>
              <td><span class='up_down_data money_up'>800,000</span></td>
              <td><span class='up_down_data money_up'>+1.20%</span></td>
              <td><span class='up_down_data'>700,000</span></td>
          </tr>
          <tr onclick="location.href='exchange_ETHEREUMCLASSIC_02.php'">
              <td class='coin_kor'>
                  <p class="kor_name">이더리움클래식</p>
                  <p style='display:none;' class="eng_name">Ethereum Classic</p>
                  <span class='unit'>ETC/KRW</span>
              </td>
              <td><span class='up_down_data money_nochange'>800,000</span></td>
              <td><span class='up_down_data'>+0.00%</span></td>
              <td><span class='up_down_data'>700,000</span></td>
          </tr>
          <tr onclick="location.href='exchange_RIPPLE_02.php'">
              <td class='coin_kor'>
                  <p class="kor_name">리플</p>
                  <p style='display:none;' class="eng_name">Ripple</p>
                  <span class='unit'>XRP/KRW</span>
              </td>
              <td><span class='up_down_data money_down'>900,000</span></td>
              <td><span class='up_down_data money_down'>-1.20%</span></td>
              <td><span class='up_down_data'>700,000</span></td>
          </tr>
          <tr onclick="location.href='exchange_ADA_02.php'">
              <td class='coin_kor'>
                  <p class="kor_name">에이다</p>
                  <p style='display:none;' class="eng_name">Ada</p>
                  <span class='unit'>ADA/KRW</span>
              </td>
              <td><span class='up_down_data money_down'>7,500,000</span></td>
              <td><span class='up_down_data money_down'>-1.20%</span></td>
              <td><span class='up_down_data'>700,000</span></td>
          </tr>
          <tr onclick="location.href='exchange_EOS_02.php'">
              <td class='coin_kor'>
                  <p class="kor_name">이오스</p>
                  <p style='display:none;' class="eng_name">EOS</p>
                  <span class='unit'>EOS/KRW</span>
              </td>
              <td><span class='up_down_data money_down'>600,000</span></td>
              <td><span class='up_down_data money_down'>-1.20%</span></td>
              <td><span class='up_down_data'>700,000</span></td>
          </tr>
          <tr onclick="location.href='exchange_RAC_02.php'">
              <td class='coin_kor'>
                  <p class="kor_name">레드엔젤</p>
                  <p style='display:none;' class="eng_name">RedAngel</p>
                  <span class='unit'>RAC/KRW</span>
              </td>
              <td><span class='up_down_data money_down'>600,000</span></td>
              <td><span class='up_down_data money_down'>-1.20%</span></td>
              <td><span class='up_down_data'>700,000</span></td>
          </tr>
      </tbody>
    </table>
  </div>
  <!--tab1--><!--tab1--><!--tab1끝-->



  <!--tab2--><!--tab2--><!--tab2-->
  <div id="tab2" class="tabcontent">

    <table class='deal_table'>
      <!-- <colgroup>
          <col style="width:33%;"/>
          <col style="width:23%;"/>
          <col style="width:22%;"/>
          <col style="width:22%;"/>
      </colgroup> -->
      <thead class='thead_deco'>
          <tr>
              <th class='coin_kor'>
                <a class="coinName">
                  <span>한글명</span>
                  <img src="img/side_arrow.png" alt="화살표" class="change_arrow">
                </a>
              </th>
              <th><a>현재가<img src="img/up_down_default.png" alt="화살표"></a></th>
              <th><a>전일대비<img src="img/up_down_down.png" alt="화살표"></a></th>
              <th><a>거래대금<img src="img/up_down_up.png" alt="화살표"></a></th>
          </tr>
      </thead>
      <tbody>
          <tr onclick="location.href='exchange_BITCOIN_02.php'">
              <td>
                  <p class="kor_name">비트코인</p>
                  <p style='display:none;' class="eng_name">Bitcoin</p>
                  <span class='unit'>BTC/USDT</span>
              </td>
              <td><span class='up_down_data money_up'>7,500,000</span></td>
              <td><span class='up_down_data money_up'>+1.20%</span></td>
              <td><span class='up_down_data'>74,000,000</span></td>
          </tr>
          <tr onclick="location.href='exchange_BITCOINCASH_02.php'">
              <td class='coin_kor'>
                  <p class="kor_name">비트코인캐시</p>
                  <p style='display:none;' class="eng_name">Bitcoin Cash</p>
                  <span class='unit'>BCH/USDT</span>
              </td>
              <td><span class='up_down_data money_up'>599,000</span></td>
              <td><span class='up_down_data money_up'>+0.00%</span></td>
              <td><span class='up_down_data'>7,000,000</span></td>
          </tr>
          <tr onclick="location.href='exchange_ETHEREUM_02.php'">
              <td class='coin_kor'>
                  <p class="kor_name">이더리움</p>
                  <p style='display:none;' class="eng_name">Ethereum</p>
                  <span class='unit'>ETH/USDT</span>
              </td>
              <td><span class='up_down_data money_up'>800,000</span></td>
              <td><span class='up_down_data money_up'>+1.20%</span></td>
              <td><span class='up_down_data'>700,000</span></td>
          </tr>
          <tr onclick="location.href='exchange_ETHEREUMCLASSIC_02.php'">
              <td class='coin_kor'>
                  <p class="kor_name">이더리움클래식</p>
                  <p style='display:none;' class="eng_name">Ethereum Classic</p>
                  <span class='unit'>ETC/USDT</span>
              </td>
              <td><span class='up_down_data money_nochange'>800,000</span></td>
              <td><span class='up_down_data'>+0.00%</span></td>
              <td><span class='up_down_data'>700,000</span></td>
          </tr>
          <tr onclick="location.href='exchange_RIPPLE_02.php'">
              <td class='coin_kor'>
                  <p class="kor_name">리플</p>
                  <p style='display:none;' class="eng_name">Ripple</p>
                  <span class='unit'>XRP/USDT</span>
              </td>
              <td><span class='up_down_data money_down'>900,000</span></td>
              <td><span class='up_down_data money_down'>-1.20%</span></td>
              <td><span class='up_down_data'>700,000</span></td>
          </tr>
          <tr onclick="location.href='exchange_ADA_02.php'">
              <td class='coin_kor'>
                  <p class="kor_name">에이다</p>
                  <p style='display:none;' class="eng_name">Ada</p>
                  <span class='unit'>ADA/USDT</span>
              </td>
              <td><span class='up_down_data money_down'>7,500,000</span></td>
              <td><span class='up_down_data money_down'>-1.20%</span></td>
              <td><span class='up_down_data'>700,000</span></td>
          </tr>
          <tr onclick="location.href='exchange_EOS_02.php'">
              <td class='coin_kor'>
                  <p class="kor_name">이오스</p>
                  <p style='display:none;' class="eng_name">EOS</p>
                  <span class='unit'>EOS/USDT</span>
              </td>
              <td><span class='up_down_data money_down'>600,000</span></td>
              <td><span class='up_down_data money_down'>-1.20%</span></td>
              <td><span class='up_down_data'>700,000</span></td>
          </tr>
          <tr onclick="location.href='exchange_RAC_02.php'">
              <td class='coin_kor'>
                  <p class="kor_name">레드엔젤</p>
                  <p style='display:none;' class="eng_name">RedAngel</p>
                  <span class='unit'>RAC/USDT</span>
              </td>
              <td><span class='up_down_data money_down'>600,000</span></td>
              <td><span class='up_down_data money_down'>-1.20%</span></td>
              <td><span class='up_down_data'>700,000</span></td>
          </tr>
      </tbody>
      </table>

  </div>
  <!--tab2--><!--tab2--><!--tab2끝-->




  <!--tab3--><!--tab3--><!--tab3-->
  <div id="tab3" class="tabcontent">
    <table class='deal_table'>
      <!-- <colgroup>
          <col style="width:33%;"/>
          <col style="width:23%;"/>
          <col style="width:22%;"/>
          <col style="width:22%;"/>
      </colgroup> -->
      <thead class='thead_deco'>
          <tr>
              <th class='coin_kor'>
                <a class="coinName">
                  <span>한글명</span>
                  <img src="img/side_arrow.png" alt="화살표" class="change_arrow">
                </a>
              </th>
              <th><a>현재가<img src="img/up_down_default.png" alt="화살표"></a></th>
              <th><a>전일대비<img src="img/up_down_down.png" alt="화살표"></a></th>
              <th><a>거래대금<img src="img/up_down_up.png" alt="화살표"></a></th>
          </tr>
      </thead>
      <tbody>
          <tr onclick="location.href='exchange_BITCOIN_02.php'">
              <td>
                  <p class="kor_name">비트코인</p>
                  <p style='display:none;' class="eng_name">Bitcoin</p>
                  <span class='unit'>BTC/KRW</span>
              </td>
              <td><span class='up_down_data money_up'>7,500,000</span></td>
              <td><span class='up_down_data money_up'>+1.20%</span></td>
              <td><span class='up_down_data'>74,000,000</span></td>
          </tr>
          <tr onclick="location.href='exchange_BITCOINCASH_02.php'">
              <td class='coin_kor'>
                  <p class="kor_name">비트코인캐시</p>
                  <p style='display:none;' class="eng_name">Bitcoin Cash</p>
                  <span class='unit'>BCH/KRW</span>
              </td>
              <td><span class='up_down_data money_up'>599,000</span></td>
              <td><span class='up_down_data money_up'>+0.00%</span></td>
              <td><span class='up_down_data'>7,000,000</span></td>
          </tr>
          <tr onclick="location.href='exchange_ETHEREUM_02.php'">
              <td class='coin_kor'>
                  <p class="kor_name">이더리움</p>
                  <p style='display:none;' class="eng_name">Ethereum</p>
                  <span class='unit'>ETH/KRW</span>
              </td>
              <td><span class='up_down_data money_up'>800,000</span></td>
              <td><span class='up_down_data money_up'>+1.20%</span></td>
              <td><span class='up_down_data'>700,000</span></td>
          </tr>
          <tr onclick="location.href='exchange_ETHEREUMCLASSIC_02.php'">
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
              <td class='coin_kor'><span>&nbsp;</span></td>
              <td><span>&nbsp;</span></td>
              <td><span>&nbsp;</span></td>
              <td><span>&nbsp;</span></td>
          </tr>
          <tr>
              <td class='coin_kor'><span>&nbsp;</span></td>
              <td><span>&nbsp;</span></td>
              <td><span>&nbsp;</span></td>
              <td><span>&nbsp;</span></td>
          </tr>
          <tr>
              <td class='coin_kor'><span>&nbsp;</span></td>
              <td><span>&nbsp;</span></td>
              <td><span>&nbsp;</span></td>
              <td><span>&nbsp;</span></td>
          </tr>

        </tbody>
      </table>
  </div>
  <!--tab3--><!--tab3--><!--tab3끝-->

</div><!-- con_410 End-->

            </div><!--left_coin_menu End-->


          <!--right_all_menu-->
          <div id="right_all_menu">
            <!--right_coin_menu1-->
            <div id="right_coin_menu1">
              <!--chart_graf-->
              <div class="box chart">
                <div class="tradingview-widget-container">
    <div id="tradingview_6f622"></div>
    <div class="tradingview-widget-copyright">TradingView 제공 <a href="https://kr.tradingview.com/symbols/KORBIT-BTCKRW/" rel="noopener" target="_blank"><span class="blue-text">BTCKRW 차트</span></a></div>
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript">
    new TradingView.widget(
    {
      "width": 905,
     "height": 465,
    "symbol": "KORBIT:BTCKRW",
    "interval": "120",
    "timezone": "Etc/UTC",
    "theme": "Light",
    "style": "1",
    "locale": "kr",
    "toolbar_bg": "#f1f3f6",
    "enable_publishing": false,
    "hide_legend": true,
    "studies": [
      "MAWeighted@tv-basicstudies",
      "Volume@tv-basicstudies",
      "MAVolumeWeighted@tv-basicstudies",
      "DoubleEMA@tv-basicstudies",
      "MOM@tv-basicstudies"
    ],
    "container_id": "tradingview_6f622"
  }
    );
    </script>
  </div>

              </div><!--chart_graf End-->
            </div><!--right_coin_menu1 End-->



            <!--right_coin_menu2-->
            <div id="right_coin_menu2">
            <!--bid_price-->
            <div class="box bid_price">
              <h3 class="exchange_h3">일반호가</h3>
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
                     <td class="mado_right mado1"><div></div>0.100</td>
                     <td class="orderbg1 upprice">224,450</td>
                     <td class="orderbg1 upprice">+2.05%</td>
                     <td>전일가격</td>
                     <td class="center">224,450</td>
                   </tr>

                   <tr>
                     <td class="mado_right mado2"><div></div>0.100</td>
                     <td class="orderbg1 upprice">224,450</td>
                     <td class="orderbg1 upprice">+2.05%</td>
                     <td rowspan="2">고가</td>

                     <td rowspan="2" class="high upprice">226,250 <p>(+2.01%)</p></td>

                   </tr>

                   <tr>
                     <td class="mado_right mado3"><div></div>1.001</td>
                     <td class="orderbg1 upprice">224,450</td>
                     <td class="orderbg1 upprice">+2.05%</td>

                   </tr>

                   <tr>
                     <td class="mado_right mado4"><div></div>0.024</td>
                     <td class="orderbg1 upprice">224,450</td>
                     <td class="orderbg1 upprice">+2.05%</td>
                     <td rowspan="2">저가</td>

                     <td rowspan="2" class="low downprice">223,850 <p>(-2.01%)</p></td>



                   </tr>

                   <tr>
                     <td class="mado_right mado5"><div></div>0.267</td>
                     <td class="orderbg1">224,450</td>
                     <td class="orderbg1">0%</td>

                   </tr>

                   <tr>
                     <td class="mado_right mado6"><div></div>0.346</td>
                     <td class="orderbg1">224,450</td>
                     <td class="orderbg1">0%</td>
                     <td colspan="2" rowspan="5"></td>

                   </tr>

                   <tr>
                     <td class="mado_right mado7"><div></div>1.000</td>
                     <td class="orderbg1">224,450</td>
                     <td class="orderbg1">0%</td>

                   </tr>

                   <tr>
                     <td class="mado_right mado8"><div></div>0.874</td>
                     <td class="orderbg1 downprice">225,850</td>
                     <td class="orderbg1 downprice">-0.02%</td>

                   </tr>

                   <tr>
                     <td class="mado_right mado9"><div></div>0.108</td>
                     <td class="orderbg1 downprice">225,850</td>
                     <td class="orderbg1 downprice">-0.02%</td>

                   </tr>

                   <tr>
                     <td class="mado_right mado10"><div></div>0.108</td>
                     <td class="orderbg1 downprice">225,850</td>
                     <td class="orderbg1 downprice">-0.11%</td>

                   </tr>

                   <tr>
                     <td rowspan="10"></td>
                     <td class="orderbg2 upprice">225,850</td>
                     <td class="orderbg2">+5.04%</td>
                     <td colspan="2" class="masu_left masu1 upprice"><div></div>0.100</td>

                   </tr>

                   <tr>

                     <td class="orderbg2 upprice">241,070</td>
                     <td class="orderbg2">+0.09%</td>
                     <td colspan="2" class="masu_left masu2 upprice"><div></div>0.100</td>

                   </tr>

                   <tr>

                     <td class="orderbg2 upprice">241,070</td>
                     <td class="orderbg2">+2.01%</td>
                     <td colspan="2" class="masu_left masu3 upprice"><div></div>1.001</td>

                   </tr>

                   <tr>

                     <td class="orderbg2 upprice">241,070</td>
                     <td class="orderbg2">+2.38%</td>
                     <td colspan="2" class="masu_left masu4 upprice"><div></div>0.024</td>

                   </tr>

                   <tr>

                     <td class="orderbg2">241,070</td>
                     <td class="orderbg2">+2.38%</td>
                     <td colspan="2" class="masu_left masu5"><div></div>0.267</td>

                   </tr>

                   <tr>

                     <td class="orderbg2">241,070</td>
                     <td class="orderbg2">+2.38%</td>
                     <td colspan="2" class="masu_left masu6"><div></div>0.346</td>

                   </tr>

                   <tr>

                     <td class="orderbg2">241,090</td>
                     <td class="orderbg2">+5.58%</td>
                     <td colspan="2" class="masu_left masu7"><div></div>1.000</td>

                   </tr>

                   <tr>

                     <td class="orderbg2 downprice">241,090</td>
                     <td class="orderbg2">-0.11%</td>
                     <td colspan="2" class="masu_left masu8 downprice"><div></div>0.874</td>

                   </tr>

                   <tr>

                     <td class="orderbg2 downprice">241,090</td>
                     <td class="orderbg2">-0.05%</td>
                     <td colspan="2" class="masu_left masu9 downprice"><div></div>0.108</td>

                   </tr>

                   <tr>

                     <td class="orderbg2 downprice">241,090</td>
                     <td class="orderbg2">-0.11%</td>
                     <td colspan="2" class="masu_left masu10 downprice"><div></div>0.108</td>

                   </tr>

                   <tr>

                     <td class="mado_right">241,090</td>
                     <td colspan="2" class="all_amount"><b>표시잔량합계</b></td>
                     <td colspan="2" class="masu_left">3,000</td>

                   </tr>


                  </tbody>


              </table>

            </div><!--bid_price End-->

            <!-- buy_sell_tab -->
            <div id="buy_sell_tab">
              <form class="buy_tab_form" action="#" method="post" name='buy_tab_form'>
                  <ul class='buy_sell_tab_title'>
                      <li class='buy_tab'>
                          <h3><a href='#'>매수</a></h3>
                      </li>
                      <li class='sell_tab'>
                          <h3><a href='#'>매도</a></h3>
                      </li>
                  </ul>
                  <!-- buy_tab_content -->
                  <div class="buy_tab_content box">
                      <dl class="">
                          <div class="buy_tab_content_row">
                              <dt>주문가능</dt>
                              <dd>
                                  <strong class='up_down_data'>0</strong>
                                  <span>KRW</span>
                              </dd>
                          </div>
                          <div class="buy_tab_content_row">
                              <dt>매수가격(KRW)</dt>
                              <dd>
                                  <input type='text' class='buy_price'  value='' autocomplete="off" required onchange="getNumber(this);" onkeyup="getNumber(this);"/>
                                  <a href="#" class='minus_btn'>-</a>
                                  <a href="#" class='plus_btn'>+</a>
                              </dd>
                          </div>
                          <div class="buy_tab_content_row">
                              <dt>매수수량(ETH)</dt>
                              <dd>
                                  <input type='text' class='buy_amount'  value='' autocomplete="off" required onchange="getNumber(this);" onkeyup="getNumber(this);"/>
                                  <div class="amount_dropbox">
                                      <label for='percentage1'></label>
                                      <select id="percentage1" name="percentage1">
                                          <option value="">최대</option>
                                          <option value="">75%</option>
                                          <option value="">50%</option>
                                          <option value="">25%</option>
                                          <option value="">10%</option>
                                      </select>
                                  </div>
                              </dd>
                          </div>
                          <div class='buy_tab_content_row total_price'>
                              <dt>
                                  <strong class='buy_all_amount_title'>주문총액</strong>
                              </dt>
                              <dd class='buy_all_amount'>
                                  <p><span class='up_down_data'>11,000,000</span>KRW</p>
                              </dd>
                          </div>
                      </dl>
                      <div class="mini_sub_info">
                          <span class='sub_text minimum_order_price'>최소주문수량 : 0.001 ETH</span>
                          <span class='sub_text charge'>수수료 : 0.25%</span>
                      </div>
                      <div class="buy_tab_button">
                          <input type="reset" name="reset" value="초기화" class='reset reset_buy'>
                          <input type="submit" name="submit" value="매수" class='buy_big_btn'>
                      </div>
                  </div><!-- buy_tab_content End-->

                  <!-- sell_tab_content -->
                  <div class="sell_tab_content box">
                      <dl class="">
                          <div class="sell_tab_content_row">
                              <dt>주문가능</dt>
                              <dd>
                                  <strong class='up_down_data'>0</strong>
                                  <span>ETH</span>
                              </dd>
                          </div>
                          <div class="sell_tab_content_row">
                              <dt>매도가격(KRW)</dt>
                              <dd>
                                  <input type='text' class='sell_price'  value='' autocomplete="off" required onchange="getNumber(this);" onkeyup="getNumber(this);"/>
                                  <a href="#" class='minus_btn'>-</a>
                                  <a href="#" class='plus_btn'>+</a>
                              </dd>
                          </div>
                          <div class="sell_tab_content_row">
                              <dt>매도수량(ETH)</dt>
                              <dd>
                                  <input type='text' class='sell_amount'  value='' autocomplete="off" required onchange="getNumber(this);" onkeyup="getNumber(this);"/>
                                  <div class="amount_dropbox">
                                      <label for='percentage2'></label>
                                      <select id="percentage2" name="percentage2">
                                          <option value="">최대</option>
                                          <option value="">75%</option>
                                          <option value="">50%</option>
                                          <option value="">25%</option>
                                          <option value="">10%</option>
                                      </select>
                                  </div>
                              </dd>
                          </div>
                          <div class='sell_tab_content_row'>
                              <dt>
                                  <strong class='buy_all_amount_title'>주문총액</strong>
                              </dt>
                              <dd class='buy_all_amount'>
                                  <p><span class='up_down_data blue_color'>11,000,000</span>KRW</p>
                              </dd>
                          </div>
                      </dl>
                      <div class="mini_sub_info">
                          <span class='sub_text minimum_order_price'>최소주문수량 : 0.001 ETH</span>
                          <span class='sub_text charge'>수수료 : 0.25%</span>
                      </div>

                      <div class="buy_tab_button">
                          <input type="reset" name="reset" value="초기화" class='reset reset_sell'>
                          <input type="submit" name="submit" value="매도" class='sell_big_btn'>
                      </div>
                  </div><!-- sell_tab_content End-->
              </form>
            </div><!-- buy_sell_tab End-->

            <!--deal_all-->
            <div class="box con_435" id='deal_all'>
                <h3 class='exchange_h3'>전체체결</h3>
                <div class="deal_table_scroll">
                  <table class='deal_table'>
                      <!-- <colgroup>
                          <col width='24%'/>
                          <col width='27%'/>
                          <col width='22%'/>
                          <col width='27%'/>
                      </colgroup> -->
                      <thead class='thead_deco deal_all_thead'>
                        <tr>
                            <th class='deal_time'>체결시간</th>
                            <th class='deal_price_KRW'>체결가격(KRW)</th>
                            <th>체결량(BCH)</th>
                            <th>체결금액(KRW)</th>
                        </tr>
                    </thead>
                    <tbody class='deal_table_tbody ie_deal_table_tbody'>
                        <tr>
                            <td class='deal_time'>
                                <p>08.27 <span>14:27</span></p>
                            </td>
                            <td class='deal_price_KRW_data'><span class='up_down_data'>225,850</span></td>
                            <td class='deal_amount_data'><span class='up_down_data money_down'>0.00200000</span></td>
                            <td><span class='up_down_data'>700,000</span></td>
                        </tr>
                        <tr>
                            <td class='deal_time'>
                                <p>08.27 <span>14:27</span></p>
                            </td>
                            <td class='deal_price_KRW_data'><span class='up_down_data money_up'>225,850</span></td>
                            <td class='deal_amount_data'><span class='up_down_data money_up'>0.00200000</span></td>
                            <td><span class='up_down_data'>56,000</span></td>
                        </tr>
                        <tr>
                            <td class='deal_time'>
                                <p>08.27 <span>14:27</span></p>
                            </td>
                            <td class='deal_price_KRW_data'><span class='up_down_data money_up'>225,850</span></td>
                            <td class='deal_amount_data'><span class='up_down_data money_up'>0.00200000</span></td>
                            <td><span class='up_down_data'>40,000</span></td>
                        </tr>
                        <tr>
                            <td class='deal_time'>
                                <p>08.27 <span>14:27</span></p>
                            </td>
                            <td class='deal_price_KRW_data'><span class='up_down_data money_up'>225,850</span></td>
                            <td class='deal_amount_data'><span class='up_down_data money_up'>0.7810000</span></td>
                            <td><span class='up_down_data'>5,000</span></td>
                        </tr>
                        <tr>
                            <td class='deal_time'>
                                <p>08.27 <span>14:27</span></p>
                            </td>
                            <td class='deal_price_KRW_data'><span class='up_down_data money_down'>225,850</span></td>
                            <td class='deal_amount_data'><span class='up_down_data money_down'>0.2800000</span></td>
                            <td><span class='up_down_data'>5,000</span></td>
                        </tr>
                        <tr>
                            <td class='deal_time'>
                                <p>08.27 <span>14:27</span></p>
                            </td>
                            <td class='deal_price_KRW_data'><span class='up_down_data money_down'>225,850</span></td>
                            <td class='deal_amount_data'><span class='up_down_data money_down'>0.2800000</span></td>
                            <td><span class='up_down_data'>5,000</span></td>
                        </tr>
                        <tr>
                            <td class='deal_time'>
                                <p>08.27 <span>14:27</span></p>
                            </td>
                            <td class='deal_price_KRW_data'><span class='up_down_data money_down'>225,850</span></td>
                            <td class='deal_amount_data'><span class='up_down_data money_down'>0.40200000</span></td>
                            <td><span class='up_down_data'>5,000</span></td>
                        </tr>
                        <tr>
                            <td class='deal_time'>
                                <p>08.27 <span>14:28</span></p>
                            </td>
                            <td class='deal_price_KRW_data'><span class='up_down_data money_down'>236,750</span></td>
                            <td class='deal_amount_data'><span class='up_down_data money_down'>0.40200000</span></td>
                            <td><span class='up_down_data'>5,000</span></td>
                        </tr>
                        <tr>
                            <td class='deal_time'>
                                <p>08.27 <span>14:28</span></p>
                            </td>
                            <td class='deal_price_KRW_data'><span class='up_down_data'>236,750</span></td>
                            <td class='deal_amount_data'><span class='up_down_data money_down'>0.40200000</span></td>
                            <td><span class='up_down_data'>5,000</span></td>
                        </tr>
                        <tr>
                            <td class='deal_time'>
                                <p>08.27 <span>14:28</span></p>
                            </td>
                            <td class='deal_price_KRW_data'><span class='up_down_data'>236,750</span></td>
                            <td class='deal_amount_data'><span class='up_down_data money_down'>0.40200000</span></td>
                            <td><span class='up_down_data'>5,000</span></td>
                        </tr>
                        <tr>
                            <td class='deal_time'>
                                <p>08.27 <span>14:28</span></p>
                            </td>
                            <td class='deal_price_KRW_data'><span class='up_down_data'>236,750</span></td>
                            <td class='deal_amount_data'><span class='up_down_data money_down'>0.40200000</span></td>
                            <td><span class='up_down_data'>5,000</span></td>
                        </tr>
                    </tbody>
                  </table>
                </div>
            </div><!-- deal_all End-->

            </div><!--right_coin_menu2 End-->
          </div><!--right_all_menu-->


                </div><!-- exchange_content End-->
              </div><!-- content_wrap End-->

              <!-- footer_wrap -->
              <?php include "footer.php";?>
              <!-- footer_wrap End-->

              <!--sub_menu-->
              <?php include "sub_menu.php";?>
              <!--sub_menu End-->

        </div><!-- container End -->
    </div><!-- wrap End -->

    <div id="full_second">
        <div id="success_buy_popup"  class='popup box'>
            <div class="full_inner">
                <h2>매수주문 접수</h2>
                <p>매수주문이 정상 접수되었습니다.</p>
                <input type="button" name="confirm" value="확인" class='popupbt end_ok'>
            </div>
        </div>
        <div id="fail_buy_popup"  class='popup box'>
            <div class="full_inner">
                <h2>매수주문 실패</h2>
                <p>주문가능 금액이 부족합니다.</p>
                <input type="button" name="confirm" value="확인" class='popupbt end_ok'>
            </div>
        </div>
        <div id="success_sell_popup" class='popup box'>
            <div class="full_inner">
                <h2>매도주문 접수</h2>
                <p>매도주문이 정상 접수되었습니다.</p>
                <input type="button" name="confirm" value="확인" class='popupbt end_ok'>
            </div>
        </div>
        <div id='fail_sell_popup' class='popup box'>
            <div class="full_inner">
                <h2>매도주문 실패</h2>
                <p>주문가능 수량이 부족합니다.</p>
                <input type="button" name="confirm" value="확인" class='popupbt end_ok'>
            </div>
        </div>
        <div id='apply_buy_popup' class='popup box'>
            <div class="full_inner">
                <h2>매수주문</h2>
                <table class='left_thick_table deal_check_table'>
                    <tbody>
                        <tr>
                            <th>거래자산</th>
                            <td>ETH / KRW</td>
                        </tr>
                        <tr>
                            <th>주문구분</th>
                            <td>지정가 / <span class='buy_color'>매수</span></td>
                        </tr>
                        <tr>
                            <th>매수가격</th>
                            <td>1,000 KRW</td>
                        </tr>
                        <tr>
                            <th>매수수량</th>
                            <td>10 ETH</td>
                        </tr>
                        <tr>
                            <th>수수료</th>
                            <td>0.025 ETH</td>
                        </tr>
                        <tr>
                            <th>정산금액</th>
                            <td>10,000 KRW</td>
                        </tr>
                    </tbody>
                </table>
                <input type="button" name="confirm" value="취소" class='popupbt cancel'>
                <input type="button" name="confirm" value="매수주문" class='popupbt ok'>
            </div>
        </div>
        <div id='apply_sell_popup' class='popup box'>
            <div class="full_inner">
                <h2>매도주문</h2>
                <table class='left_thick_table deal_check_table'>
                    <tbody>
                        <tr>
                            <th>거래자산</th>
                            <td>ETH / KRW</td>
                        </tr>
                        <tr>
                            <th>주문구분</th>
                            <td>지정가 / <span class='sell_color'>매도</span></td>
                        </tr>
                        <tr>
                            <th>매도가격</th>
                            <td>1,000 KRW</td>
                        </tr>
                        <tr>
                            <th>매도수량</th>
                            <td>10 ETH</td>
                        </tr>
                        <tr>
                            <th>수수료</th>
                            <td>25 KRW</td>
                        </tr>
                        <tr>
                            <th>정산금액</th>
                            <td>9,975 KRW</td>
                        </tr>
                    </tbody>
                </table>
                <input type="button" name="confirm" value="취소" class='popupbt cancel'>
                <input type="button" name="confirm" value="매도주문" class='popupbt ok'>
            </div>
        </div>
        <div id="shadow_second"></div>
    </div>
    <!---반응형 마크업---------------------------------------------------------------------------------------------------------------------------------->
    <!---반응형 마크업---------------------------------------------------------------------------------------------------------------------------------->
    <!---반응형 마크업---------------------------------------------------------------------------------------------------------------------------------->
    <!---반응형 마크업---------------------------------------------------------------------------------------------------------------------------------->
    <!---반응형 마크업---------------------------------------------------------------------------------------------------------------------------------->
    <!---반응형 마크업---------------------------------------------------------------------------------------------------------------------------------->
    <!---반응형 마크업---------------------------------------------------------------------------------------------------------------------------------->
    <!---반응형 마크업---------------------------------------------------------------------------------------------------------------------------------->
    <!---반응형 마크업---------------------------------------------------------------------------------------------------------------------------------->

    <!-- wrap -->
    <div id="app_wrap">
        <!-- container -->
        <div id="container">

          <!-- m_nav-->
          <?php include "m_nav.php";?>
          <!-- m_nav End-->

          <!-- m_header-->
          <?php include "m_header.php";?>
          <!-- m_header End-->

            <!-- content_wrap -->
            <div class="content_wrap">
                <!-- main_content -->
                <div class="content exchange_content con_1290">

                  <!--left_coin_menu-->
                  <div class="box" id='deal_orgin_transaction'>

                    <ul class="tab">
                      <li data-tab="app_tab1" class="current">KRW</li>
                      <li data-tab="app_tab2" class=''>USDT</li>
                    </ul>

                    <!--tab1--><!--tab1--><!--tab1-->
                    <div id="app_tab1" class="tabcontent current">
                      <table class='deal_table'>
                        <!-- <colgroup>
                            <col style="width:33%;"/>
                            <col style="width:23%;"/>
                            <col style="width:22%;"/>
                            <col style="width:22%;"/>
                        </colgroup> -->
                        <thead class='thead_deco'>
                            <tr>
                                <th class='coin_kor'>
                                  <a class="coinName">
                                    <span>한글명</span>
                                    <img src="img/side_arrow.png" alt="화살표" class="change_arrow">
                                  </a>
                                </th>
                                <th><a>현재가<img src="img/up_down_default.png" alt="화살표"></a></th>
                                <th><a>전일대비<img src="img/up_down_down.png" alt="화살표"></a></th>
                                <th><a>거래대금<img src="img/up_down_up.png" alt="화살표"></a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr onclick="location.href='exchange_BITCOIN_02.php'">
                                <td>
                                    <p class="kor_name">비트코인</p>
                                    <p style='display:none;' class="eng_name">Bitcoin</p>
                                    <span class='unit'>BTC/KRW</span>
                                </td>
                                <td><span class='up_down_data money_up'>7,500,000</span></td>
                                <td><span class='up_down_data money_up'>+1.20%</span></td>
                                <td><span class='up_down_data'>74,000,000</span></td>
                            </tr>
                            <tr onclick="location.href='exchange_BITCOINCASH_02.php'">
                                <td class='coin_kor'>
                                    <p class="kor_name">비트코인캐시</p>
                                    <p style='display:none;' class="eng_name">Bitcoin Cash</p>
                                    <span class='unit'>BCH/KRW</span>
                                </td>
                                <td><span class='up_down_data money_up'>599,000</span></td>
                                <td><span class='up_down_data money_up'>+0.00%</span></td>
                                <td><span class='up_down_data'>7,000,000</span></td>
                            </tr>
                            <tr onclick="location.href='exchange_ETHEREUM_02.php'">
                                <td class='coin_kor'>
                                    <p class="kor_name">이더리움</p>
                                    <p style='display:none;' class="eng_name">Ethereum</p>
                                    <span class='unit'>ETH/KRW</span>
                                </td>
                                <td><span class='up_down_data money_up'>800,000</span></td>
                                <td><span class='up_down_data money_up'>+1.20%</span></td>
                                <td><span class='up_down_data'>700,000</span></td>
                            </tr>
                            <tr onclick="location.href='exchange_ETHEREUMCLASSIC_02.php'">
                                <td class='coin_kor'>
                                    <p class="kor_name">이더리움클래식</p>
                                    <p style='display:none;' class="eng_name">Ethereum Classic</p>
                                    <span class='unit'>ETC/KRW</span>
                                </td>
                                <td><span class='up_down_data money_nochange'>800,000</span></td>
                                <td><span class='up_down_data'>+0.00%</span></td>
                                <td><span class='up_down_data'>700,000</span></td>
                            </tr>
                            <tr onclick="location.href='exchange_RIPPLE_02.php'">
                                <td class='coin_kor'>
                                    <p class="kor_name">리플</p>
                                    <p style='display:none;' class="eng_name">Ripple</p>
                                    <span class='unit'>XRP/KRW</span>
                                </td>
                                <td><span class='up_down_data money_down'>900,000</span></td>
                                <td><span class='up_down_data money_down'>-1.20%</span></td>
                                <td><span class='up_down_data'>700,000</span></td>
                            </tr>
                            <tr onclick="location.href='exchange_ADA_02.php'">
                                <td class='coin_kor'>
                                    <p class="kor_name">에이다</p>
                                    <p style='display:none;' class="eng_name">Ada</p>
                                    <span class='unit'>ADA/KRW</span>
                                </td>
                                <td><span class='up_down_data money_down'>7,500,000</span></td>
                                <td><span class='up_down_data money_down'>-1.20%</span></td>
                                <td><span class='up_down_data'>700,000</span></td>
                            </tr>
                            <tr onclick="location.href='exchange_EOS_02.php'">
                                <td class='coin_kor'>
                                    <p class="kor_name">이오스</p>
                                    <p style='display:none;' class="eng_name">EOS</p>
                                    <span class='unit'>EOS/KRW</span>
                                </td>
                                <td><span class='up_down_data money_down'>600,000</span></td>
                                <td><span class='up_down_data money_down'>-1.20%</span></td>
                                <td><span class='up_down_data'>700,000</span></td>
                            </tr>
                            <tr onclick="location.href='exchange_RAC_02.php'">
                                <td class='coin_kor'>
                                    <p class="kor_name">레드엔젤</p>
                                    <p style='display:none;' class="eng_name">RedAngel</p>
                                    <span class='unit'>RAC/KRW</span>
                                </td>
                                <td><span class='up_down_data money_down'>600,000</span></td>
                                <td><span class='up_down_data money_down'>-1.20%</span></td>
                                <td><span class='up_down_data'>700,000</span></td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                    <!--tab1--><!--tab1--><!--tab1끝-->



                    <!--tab2--><!--tab2--><!--tab2-->
                    <div id="app_tab2" class="tabcontent">

                      <table class='deal_table'>
                        <!-- <colgroup>
                            <col style="width:33%;"/>
                            <col style="width:23%;"/>
                            <col style="width:22%;"/>
                            <col style="width:22%;"/>
                        </colgroup> -->
                        <thead class='thead_deco'>
                            <tr>
                                <th class='coin_kor'>
                                  <a class="coinName">
                                    <span>한글명</span>
                                    <img src="img/side_arrow.png" alt="화살표" class="change_arrow">
                                  </a>
                                </th>
                                <th><a>현재가<img src="img/up_down_default.png" alt="화살표"></a></th>
                                <th><a>전일대비<img src="img/up_down_down.png" alt="화살표"></a></th>
                                <th><a>거래대금<img src="img/up_down_up.png" alt="화살표"></a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr onclick="location.href='exchange_BITCOIN_02.php'">
                                <td>
                                    <p class="kor_name">비트코인</p>
                                    <p style='display:none;' class="eng_name">Bitcoin</p>
                                    <span class='unit'>BTC/USDT</span>
                                </td>
                                <td><span class='up_down_data money_up'>7,500,000</span></td>
                                <td><span class='up_down_data money_up'>+1.20%</span></td>
                                <td><span class='up_down_data'>74,000,000</span></td>
                            </tr>
                            <tr onclick="location.href='exchange_BITCOINCASH_02.php'">
                                <td class='coin_kor'>
                                    <p class="kor_name">비트코인캐시</p>
                                    <p style='display:none;' class="eng_name">Bitcoin Cash</p>
                                    <span class='unit'>BCH/USDT</span>
                                </td>
                                <td><span class='up_down_data money_up'>599,000</span></td>
                                <td><span class='up_down_data money_up'>+0.00%</span></td>
                                <td><span class='up_down_data'>7,000,000</span></td>
                            </tr>
                            <tr onclick="location.href='exchange_ETHEREUM_02.php'">
                                <td class='coin_kor'>
                                    <p class="kor_name">이더리움</p>
                                    <p style='display:none;' class="eng_name">Ethereum</p>
                                    <span class='unit'>ETH/USDT</span>
                                </td>
                                <td><span class='up_down_data money_up'>800,000</span></td>
                                <td><span class='up_down_data money_up'>+1.20%</span></td>
                                <td><span class='up_down_data'>700,000</span></td>
                            </tr>
                            <tr onclick="location.href='exchange_ETHEREUMCLASSIC_02.php'">
                                <td class='coin_kor'>
                                    <p class="kor_name">이더리움클래식</p>
                                    <p style='display:none;' class="eng_name">Ethereum Classic</p>
                                    <span class='unit'>ETC/USDT</span>
                                </td>
                                <td><span class='up_down_data money_nochange'>800,000</span></td>
                                <td><span class='up_down_data'>+0.00%</span></td>
                                <td><span class='up_down_data'>700,000</span></td>
                            </tr>
                            <tr onclick="location.href='exchange_RIPPLE_02.php'">
                                <td class='coin_kor'>
                                    <p class="kor_name">리플</p>
                                    <p style='display:none;' class="eng_name">Ripple</p>
                                    <span class='unit'>XRP/USDT</span>
                                </td>
                                <td><span class='up_down_data money_down'>900,000</span></td>
                                <td><span class='up_down_data money_down'>-1.20%</span></td>
                                <td><span class='up_down_data'>700,000</span></td>
                            </tr>
                            <tr onclick="location.href='exchange_ADA_02.php'">
                                <td class='coin_kor'>
                                    <p class="kor_name">에이다</p>
                                    <p style='display:none;' class="eng_name">Ada</p>
                                    <span class='unit'>ADA/USDT</span>
                                </td>
                                <td><span class='up_down_data money_down'>7,500,000</span></td>
                                <td><span class='up_down_data money_down'>-1.20%</span></td>
                                <td><span class='up_down_data'>700,000</span></td>
                            </tr>
                            <tr onclick="location.href='exchange_EOS_02.php'">
                                <td class='coin_kor'>
                                    <p class="kor_name">이오스</p>
                                    <p style='display:none;' class="eng_name">EOS</p>
                                    <span class='unit'>EOS/USDT</span>
                                </td>
                                <td><span class='up_down_data money_down'>600,000</span></td>
                                <td><span class='up_down_data money_down'>-1.20%</span></td>
                                <td><span class='up_down_data'>700,000</span></td>
                            </tr>
                            <tr onclick="location.href='exchange_RAC_02.php'">
                                <td class='coin_kor'>
                                    <p class="kor_name">레드엔젤</p>
                                    <p style='display:none;' class="eng_name">RedAngel</p>
                                    <span class='unit'>RAC/USDT</span>
                                </td>
                                <td><span class='up_down_data money_down'>600,000</span></td>
                                <td><span class='up_down_data money_down'>-1.20%</span></td>
                                <td><span class='up_down_data'>700,000</span></td>
                            </tr>
                        </tbody>
                        </table>

                    </div>
                    <!--tab2--><!--tab2--><!--tab2끝-->




                    <!--tab3--><!--tab3--><!--tab3-->
                    <div id="app_tab3" class="tabcontent">
                      <table class='deal_table'>
                        <!-- <colgroup>
                            <col style="width:33%;"/>
                            <col style="width:23%;"/>
                            <col style="width:22%;"/>
                            <col style="width:22%;"/>
                        </colgroup> -->
                        <thead class='thead_deco'>
                            <tr>
                                <th class='coin_kor'>
                                  <a class="coinName">
                                    <span>한글명</span>
                                    <img src="img/side_arrow.png" alt="화살표" class="change_arrow">
                                  </a>
                                </th>
                                <th><a>현재가<img src="img/up_down_default.png" alt="화살표"></a></th>
                                <th><a>전일대비<img src="img/up_down_down.png" alt="화살표"></a></th>
                                <th><a>거래대금<img src="img/up_down_up.png" alt="화살표"></a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr onclick="location.href='exchange_BITCOIN_02.php'">
                                <td>
                                    <p class="kor_name">비트코인</p>
                                    <p style='display:none;' class="eng_name">Bitcoin</p>
                                    <span class='unit'>BTC/KRW</span>
                                </td>
                                <td><span class='up_down_data money_up'>7,500,000</span></td>
                                <td><span class='up_down_data money_up'>+1.20%</span></td>
                                <td><span class='up_down_data'>74,000,000</span></td>
                            </tr>
                            <tr onclick="location.href='exchange_BITCOINCASH_02.php'">
                                <td class='coin_kor'>
                                    <p class="kor_name">비트코인캐시</p>
                                    <p style='display:none;' class="eng_name">Bitcoin Cash</p>
                                    <span class='unit'>BCH/KRW</span>
                                </td>
                                <td><span class='up_down_data money_up'>599,000</span></td>
                                <td><span class='up_down_data money_up'>+0.00%</span></td>
                                <td><span class='up_down_data'>7,000,000</span></td>
                            </tr>
                            <tr onclick="location.href='exchange_ETHEREUM_02.php'">
                                <td class='coin_kor'>
                                    <p class="kor_name">이더리움</p>
                                    <p style='display:none;' class="eng_name">Ethereum</p>
                                    <span class='unit'>ETH/KRW</span>
                                </td>
                                <td><span class='up_down_data money_up'>800,000</span></td>
                                <td><span class='up_down_data money_up'>+1.20%</span></td>
                                <td><span class='up_down_data'>700,000</span></td>
                            </tr>
                            <tr onclick="location.href='exchange_ETHEREUMCLASSIC_02.php'">
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
                                <td class='coin_kor'><span>&nbsp;</span></td>
                                <td><span>&nbsp;</span></td>
                                <td><span>&nbsp;</span></td>
                                <td><span>&nbsp;</span></td>
                            </tr>
                            <tr>
                                <td class='coin_kor'><span>&nbsp;</span></td>
                                <td><span>&nbsp;</span></td>
                                <td><span>&nbsp;</span></td>
                                <td><span>&nbsp;</span></td>
                            </tr>
                            <tr>
                                <td class='coin_kor'><span>&nbsp;</span></td>
                                <td><span>&nbsp;</span></td>
                                <td><span>&nbsp;</span></td>
                                <td><span>&nbsp;</span></td>
                            </tr>

                          </tbody>
                        </table>
                    </div>
                    <!--tab3--><!--tab3--><!--tab3끝-->

                  </div><!-- con_410 End-->
            <!--coin_money-->
            <div class="box coin_money">

              <div class="coin_money_inner">
                <div class="img_area">
                    <img src="img/eth_big.png" alt="이더리움" class="bitcoin_icon">
                </div>
                <ul>
                  <li>
                      <strong>이더리움</strong>
                      <b class="coin_word">ETH/KRW</b>
                  </li>
                  <li>
                    <span class="price">224,450<b class="won">KRW</b>
                    </span>
                  </li>
                  <li class="coin_prepare">
                    <strong>전일대비</strong>
                    <span class="prepare"><b>-0.20</b>%</span>
                    <span class="updownarrow"><img src="img/arrow_down_blue.png" class="ud" alt='하락'>450</span>
                  </li>
                </ul>
                <span class="question2">&#63;</span>
              </div>

              <ul class="coin_money_prepare">

                <li class="hl_price">
                  <span class="hl_title">고가</span>
                  <p><span class="price_up">224,450</span><b class="won">KRW</b></p>
                </li>
                <li class="hl_price">
                  <span class="hl_title">저가</span>
                  <p><span class="price_down">223,850</span><b class="won">KRW</b></p>
                </li>

              </ul>

              <ul class="coin_money_volume">

                <li class="hl_volume">
                  <span class="hl_title">거래량<small>(24H)</small></span>
                    <p><span class="volume">28,205.483</span><b class="unit BTC">ETH</b></p>
                </li>
                <li class="hl_volume">
                  <span class="hl_title">거래대금<small>(24H)</small></span>
                    <p><span class="volume">6,318,260,353</span><b class="unit won">KRW</b></p>
                </li>

              </ul>

            </div><!--coin_money End-->

<!-- 코인상세보기 시작 ------------------------------------------------------------------------------------------------------------------------------->
<!-- 코인상세보기 시작 ------------------------------------------------------------------------------------------------------------------------------->
<!-- 코인상세보기 시작 ------------------------------------------------------------------------------------------------------------------------------->

          <!--coin_money_detail / coin_money_ethurium-->

          <div class="box coin_money_detail coin_money_ethurium">
            <div class="coin_name"><h4>Ethurium</h4></div>
          <div id="detail_all">
            <p>(정보기준일:2018.08.28)</p>
            <!-- left_thick_table -->
            <table class='left_thick_table coinInfo_table'>
              <thead>

              </thead>
                <tbody>
                    <tr>
                        <th>최초발행</th>
                        <td>2015년 7월</td>
                    </tr>
                    <tr>
                        <th>코인/토큰</th>
                        <td>코인</td>
                    </tr>
                    <tr>
                        <th>시총순위</th>
                        <td>2위</td>
                    </tr>
                    <tr>
                        <th>시가총액</th>
                        <td>21.7조원(18.08.27 기준)</td>
                    </tr>
                    <tr>
                        <th>블록생성기</th>
                        <td>12초</td>
                    </tr>
                    <tr>
                        <th>유통량</th>
                        <td>90,000,000</td>
                    </tr>
                    <tr>
                        <th>총발행한도</th>
                        <td>제한없음</td>
                    </tr>
                    <tr>
                        <th>채굴봉상량</th>
                        <td>5 ETH</td>
                    </tr>
                    <tr>
                        <th>국가</th>
                        <td>스위스</td>
                    </tr>
                    <tr>
                        <th>공식홈페이지</th>
                        <td><a href="https://www.ethereum.org/" target="_blank">www.ethereum.org/</a></td>
                    </tr>
                </tbody>
            </table><!-- left_thick_table End-->
              <span><a href="coin_info_ethurium.php">상세보기</a></span>
          </div>



        </div><!--coin_money_detail / coin_money_ethurium End-->


<!-- 코인상세보기 끝 ------------------------------------------------------------------------------------------------------------------------------->
<!-- 코인상세보기 끝 ------------------------------------------------------------------------------------------------------------------------------->
<!-- 코인상세보기 끝 ------------------------------------------------------------------------------------------------------------------------------->

              <!--chart_graf-->

              <div class="box app_chart">
                <div class="tradingview-widget-container">
    <div id="tradingview_6f622"></div>
    <div class="tradingview-widget-copyright">TradingView 제공 <a href="https://kr.tradingview.com/symbols/KORBIT-BTCKRW/" rel="noopener" target="_blank"><span class="blue-text">BTCKRW 차트</span></a></div>
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript">
    new TradingView.widget(
    {
      "width": 100+"%",
     "height": 465,
    "symbol": "KORBIT:BTCKRW",
    "interval": "120",
    "timezone": "Etc/UTC",
    "theme": "Light",
    "style": "1",
    "locale": "kr",
    "toolbar_bg": "#f1f3f6",
    "enable_publishing": false,
    "hide_legend": true,
    "studies": [
      "MAWeighted@tv-basicstudies",
      "Volume@tv-basicstudies",
      "MAVolumeWeighted@tv-basicstudies",
      "DoubleEMA@tv-basicstudies",
      "MOM@tv-basicstudies"
    ],
    "container_id": "tradingview_6f622"
  }
    );
    </script>
  </div>

              </div><!--chart_graf End-->

              <!--bid_price-->
              <div class="box bid_price">
                <h3 class="exchange_h3">일반호가</h3>
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
                       <td class="mado_right mado1">0.100</td>
                       <td class="orderbg1 upprice">7,000,000</td>
                       <td class="orderbg1 upprice">+3.58%</td>
                       <td>전일가격</td>
                       <td class="center">7,510,000</td>
                     </tr>

                     <tr>
                       <td class="mado_right mado2">0.100</td>
                       <td class="orderbg1 upprice">7,000,000</td>
                       <td class="orderbg1 upprice">+3.58%</td>
                       <td rowspan="2">고가</td>

                       <td rowspan="2" class="high upprice">7,624,000 <p>(+3.58%)</p></td>

                     </tr>

                     <tr>
                       <td class="mado_right mado3">1.001</td>
                       <td class="orderbg1 upprice">7,000,000</td>
                       <td class="orderbg1 upprice">+3.58%</td>

                     </tr>

                     <tr>
                       <td class="mado_right mado4">0.024</td>
                       <td class="orderbg1 upprice">7,000,000</td>
                       <td class="orderbg1 upprice">+3.58%</td>
                       <td rowspan="2">저가</td>

                       <td rowspan="2" class="low downprice">7,200,000 <p>(-4.13%)</p></td>



                     </tr>

                     <tr>
                       <td class="mado_right mado5">0.267</td>
                       <td class="orderbg1">7,000,000</td>
                       <td class="orderbg1">0%</td>

                     </tr>

                     <tr>
                       <td class="mado_right mado6">0.346</td>
                       <td class="orderbg1">7,000,000</td>
                       <td class="orderbg1">0%</td>
                       <td colspan="2" rowspan="5"></td>

                     </tr>

                     <tr>
                       <td class="mado_right mado7">1.000</td>
                       <td class="orderbg1">7,000,000</td>
                       <td class="orderbg1">0%</td>

                     </tr>

                     <tr>
                       <td class="mado_right mado8">0.874</td>
                       <td class="orderbg1 downprice">7,000,000</td>
                       <td class="orderbg1 downprice">-0.21%</td>

                     </tr>

                     <tr>
                       <td class="mado_right mado9">0.108</td>
                       <td class="orderbg1 downprice">7,000,000</td>
                       <td class="orderbg1 downprice">-0.21%</td>

                     </tr>

                     <tr>
                       <td class="mado_right mado10">0.108</td>
                       <td class="orderbg1 downprice">7,000,000</td>
                       <td class="orderbg1 downprice">-0.21%</td>

                     </tr>

                     <tr>
                       <td rowspan="10"></td>
                       <td class="orderbg2 upprice">7,000,000</td>
                       <td class="orderbg2">+3.58%</td>
                       <td colspan="2" class="masu_left masu1 upprice">0.100</td>

                     </tr>

                     <tr>

                       <td class="orderbg2 upprice">7,000,000</td>
                       <td class="orderbg2">+3.58%</td>
                       <td colspan="2" class="masu_left masu2 upprice">0.100</td>

                     </tr>

                     <tr>

                       <td class="orderbg2 upprice">7,000,000</td>
                       <td class="orderbg2">+3.58%</td>
                       <td colspan="2" class="masu_left masu3 upprice">1.001</td>

                     </tr>

                     <tr>

                       <td class="orderbg2 upprice">7,000,000</td>
                       <td class="orderbg2">+3.58%</td>
                       <td colspan="2" class="masu_left masu4 upprice">0.024</td>

                     </tr>

                     <tr>

                       <td class="orderbg2">7,000,000</td>
                       <td class="orderbg2">+3.58%</td>
                       <td colspan="2" class="masu_left masu5">0.267</td>

                     </tr>

                     <tr>

                       <td class="orderbg2">7,000,000</td>
                       <td class="orderbg2">+3.58%</td>
                       <td colspan="2" class="masu_left masu6">0.346</td>

                     </tr>

                     <tr>

                       <td class="orderbg2">7,000,000</td>
                       <td class="orderbg2">+3.58%</td>
                       <td colspan="2" class="masu_left masu7">1.000</td>

                     </tr>

                     <tr>

                       <td class="orderbg2 downprice">7,000,000</td>
                       <td class="orderbg2">-0.21%</td>
                       <td colspan="2" class="masu_left masu8 downprice">0.874</td>

                     </tr>

                     <tr>

                       <td class="orderbg2 downprice">7,000,000</td>
                       <td class="orderbg2">-0.21%</td>
                       <td colspan="2" class="masu_left masu9 downprice">0.108</td>

                     </tr>

                     <tr>

                       <td class="orderbg2 downprice">7,000,000</td>
                       <td class="orderbg2">-0.21%</td>
                       <td colspan="2" class="masu_left masu10 downprice">0.108</td>

                     </tr>

                     <tr>

                       <td class="mado_right">13,600</td>
                       <td colspan="2" class="all_amount"><b>표시잔량합계</b></td>
                       <td colspan="2" class="masu_left">8,000</td>

                     </tr>


                    </tbody>


                </table>

              </div><!--bid_price End-->

              <!-- buy_sell_tab -->
              <div id="buy_sell_tab">
                <form class="buy_tab_form" action="#" method="post" name='buy_tab_form'>
                    <ul class='buy_sell_tab_title'>
                        <li class='buy_tab'>
                            <h3><a href='#'>매수</a></h3>
                        </li>
                        <li class='sell_tab'>
                            <h3><a href='#'>매도</a></h3>
                        </li>
                    </ul>
                    <!-- buy_tab_content -->
                    <div class="buy_tab_content box">
                        <dl class="">
                            <div class="buy_tab_content_row">
                                <dt>주문가능</dt>
                                <dd>
                                    <strong class='up_down_data'>0</strong>
                                    <span>KRW</span>
                                </dd>
                            </div>
                            <div class="buy_tab_content_row">
                                <dt>매수가격(KRW)</dt>
                                <dd>
                                    <input type='text' class='buy_price buy_input01'  value='' autocomplete="off" required onchange="getNumber(this);" onkeyup="getNumber(this);"/>
                                    <a href="#" class='minus_btn'>-</a>
                                    <a href="#" class='plus_btn'>+</a>
                                </dd>
                            </div>
                            <div class="buy_tab_content_row">
                                <dt>매수수량(ETH)</dt>
                                <dd>
                                    <input type='text' class='buy_amount buy_input02'  value='' autocomplete="off" required onchange="getNumber(this);" onkeyup="getNumber(this);"/>
                                    <div class="amount_dropbox">
                                        <label for='percentage1'></label>
                                        <select id="percentage1" name="percentage1">
                                            <option value="">최대</option>
                                            <option value="">75%</option>
                                            <option value="">50%</option>
                                            <option value="">25%</option>
                                            <option value="">10%</option>
                                        </select>
                                    </div>
                                </dd>
                            </div>
                            <div class='buy_tab_content_row total_price'>
                                <dt>
                                    <strong class='buy_all_amount_title'>주문총액</strong>
                                </dt>
                                <dd class='buy_all_amount'>
                                    <p><span class='up_down_data'>11,000,000</span>KRW</p>
                                </dd>
                            </div>
                        </dl>
                        <div class="mini_sub_info">
                            <span class='sub_text minimum_order_price'>최소주문수량 : 0.001 ETH</span>
                            <span class='sub_text charge'>수수료 : 0.25%</span>
                        </div>
                        <div class="buy_tab_button">
                            <input type="reset" name="reset" value="초기화" class='reset reset_buy'>
                            <input type="submit" name="submit" value="매수" class='buy_big_btn'>
                        </div>
                    </div><!-- buy_tab_content End-->

                    <!-- sell_tab_content -->
                    <div class="sell_tab_content box">
                        <dl class="">
                            <div class="sell_tab_content_row">
                                <dt>주문가능</dt>
                                <dd>
                                    <strong class='up_down_data'>0</strong>
                                    <span>ETH</span>
                                </dd>
                            </div>
                            <div class="sell_tab_content_row">
                                <dt>매도가격(KRW)</dt>
                                <dd>
                                    <input type='text' class='sell_price buy_input01'  value='' autocomplete="off" required onchange="getNumber(this);" onkeyup="getNumber(this);"/>
                                    <a href="#" class='minus_btn'>-</a>
                                    <a href="#" class='plus_btn'>+</a>
                                </dd>
                            </div>
                            <div class="sell_tab_content_row">
                                <dt>매도수량(ETH)</dt>
                                <dd>
                                    <input type='text' class='sell_amount buy_input02'  value='' autocomplete="off" required onchange="getNumber(this);" onkeyup="getNumber(this);"/>
                                    <div class="amount_dropbox">
                                        <label for='percentage2'></label>
                                        <select id="percentage2" name="percentage2">
                                            <option value="">최대</option>
                                            <option value="">75%</option>
                                            <option value="">50%</option>
                                            <option value="">25%</option>
                                            <option value="">10%</option>
                                        </select>
                                    </div>
                                </dd>
                            </div>
                            <div class='sell_tab_content_row'>
                                <dt>
                                    <strong class='buy_all_amount_title'>주문총액</strong>
                                </dt>
                                <dd class='buy_all_amount'>
                                    <p><span class='up_down_data blue_color'>11,000,000</span>KRW</p>
                                </dd>
                            </div>
                        </dl>
                        <div class="mini_sub_info">
                            <span class='sub_text minimum_order_price'>최소주문수량 : 0.001 ETH</span>
                            <span class='sub_text charge'>수수료 : 0.25%</span>
                        </div>

                        <div class="buy_tab_button">
                            <input type="reset" name="reset" value="초기화" class='reset reset_sell'>
                            <input type="submit" name="submit" value="매도" class='sell_big_btn'>
                        </div>
                    </div><!-- sell_tab_content End-->
                </form>
              </div><!-- buy_sell_tab End-->


              <!--deal_all-->
              <div class="box con_435" id='deal_all'>
                  <h3 class='exchange_h3'>전체체결</h3>
                  <div class="deal_table_scroll">
                    <table class='deal_table'>
                        <!-- <colgroup>
                            <col width='24%'/>
                            <col width='27%'/>
                            <col width='22%'/>
                            <col width='27%'/>
                        </colgroup> -->
                        <thead class='thead_deco deal_all_thead'>
                          <tr>
                              <th class='deal_time'>체결시간</th>
                              <th class='deal_price_KRW'>체결가격(KRW)</th>
                              <th>체결량(BCH)</th>
                              <th>체결금액(KRW)</th>
                          </tr>
                      </thead>
                      <tbody class='deal_table_tbody ie_deal_table_tbody'>
                          <tr>
                              <td class='deal_time'>
                                  <p>08.27 <span>14:27</span></p>
                              </td>
                              <td class='deal_price_KRW_data'><span class='up_down_data'>481,400</span></td>
                              <td class='deal_amount_data'><span class='up_down_data money_down'>0.00500000</span></td>
                              <td><span class='up_down_data'>700,000</span></td>
                          </tr>
                          <tr>
                              <td class='deal_time'>
                                  <p>08.27 <span>14:27</span></p>
                              </td>
                              <td class='deal_price_KRW_data'><span class='up_down_data money_up'>481,400</span></td>
                              <td class='deal_amount_data'><span class='up_down_data money_up'>0.00500000</span></td>
                              <td><span class='up_down_data'>56,000</span></td>
                          </tr>
                          <tr>
                              <td class='deal_time'>
                                  <p>08.27 <span>14:27</span></p>
                              </td>
                              <td class='deal_price_KRW_data'><span class='up_down_data money_up'>481,400</span></td>
                              <td class='deal_amount_data'><span class='up_down_data money_up'>0.00500000</span></td>
                              <td><span class='up_down_data'>40,000</span></td>
                          </tr>
                          <tr>
                              <td class='deal_time'>
                                  <p>08.27 <span>14:27</span></p>
                              </td>
                              <td class='deal_price_KRW_data'><span class='up_down_data money_up'>481,400</span></td>
                              <td class='deal_amount_data'><span class='up_down_data money_up'>0.00500000</span></td>
                              <td><span class='up_down_data'>5,000</span></td>
                          </tr>
                          <tr>
                              <td class='deal_time'>
                                  <p>08.27 <span>14:27</span></p>
                              </td>
                              <td class='deal_price_KRW_data'><span class='up_down_data money_down'>481,400</span></td>
                              <td class='deal_amount_data'><span class='up_down_data money_down'>0.3100000</span></td>
                              <td><span class='up_down_data'>5,000</span></td>
                          </tr>
                          <tr>
                              <td class='deal_time'>
                                  <p>08.27 <span>14:27</span></p>
                              </td>
                              <td class='deal_price_KRW_data'><span class='up_down_data money_down'>481,400</span></td>
                              <td class='deal_amount_data'><span class='up_down_data money_down'>0.3100000</span></td>
                              <td><span class='up_down_data'>5,000</span></td>
                          </tr>
                          <tr>
                              <td class='deal_time'>
                                  <p>08.27 <span>14:27</span></p>
                              </td>
                              <td class='deal_price_KRW_data'><span class='up_down_data money_down'>481,400</span></td>
                              <td class='deal_amount_data'><span class='up_down_data money_down'>0.59500000</span></td>
                              <td><span class='up_down_data'>5,000</span></td>
                          </tr>
                          <tr>
                              <td class='deal_time'>
                                  <p>08.27 <span>14:28</span></p>
                              </td>
                              <td class='deal_price_KRW_data'><span class='up_down_data money_down'>481,450</span></td>
                              <td class='deal_amount_data'><span class='up_down_data money_down'>0.59500000</span></td>
                              <td><span class='up_down_data'>5,000</span></td>
                          </tr>
                          <tr>
                              <td class='deal_time'>
                                  <p>08.27 <span>14:28</span></p>
                              </td>
                              <td class='deal_price_KRW_data'><span class='up_down_data'>481,450</span></td>
                              <td class='deal_amount_data'><span class='up_down_data money_down'>0.59500000</span></td>
                              <td><span class='up_down_data'>5,000</span></td>
                          </tr>
                          <tr>
                              <td class='deal_time'>
                                  <p>08.27 <span>14:28</span></p>
                              </td>
                              <td class='deal_price_KRW_data'><span class='up_down_data'>481,450</span></td>
                              <td class='deal_amount_data'><span class='up_down_data money_down'>0.59500000</span></td>
                              <td><span class='up_down_data'>5,000</span></td>
                          </tr>
                          <tr>
                              <td class='deal_time'>
                                  <p>08.27 <span>14:28</span></p>
                              </td>
                              <td class='deal_price_KRW_data'><span class='up_down_data'>481,450</span></td>
                              <td class='deal_amount_data'><span class='up_down_data money_down'>0.59500000</span></td>
                              <td><span class='up_down_data'>5,000</span></td>
                          </tr>
                      </tbody>
                    </table>
                  </div>
              </div><!-- deal_all End-->


            <!--left_coin_menu End-->


                </div><!-- exchange_content End-->
              </div><!-- content_wrap End-->

              <!-- footer_wrap -->
              <?php include "footer.php";?>
              <!-- footer_wrap End-->

              <!--sub_menu-->
              <?php include "sub_menu.php";?>
              <!--sub_menu End-->

        </div><!-- container End -->
    </div><!-- wrap End -->

</body>
</html>
