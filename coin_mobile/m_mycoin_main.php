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
    <link rel="stylesheet" href="css/mycoin_main.css">
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
                <h2 class="header_title">자산관리</h2>
                <div class="alarm_area">
                  <img src="img/bell.png" class="alarmBtn" alt="알림버튼"/>
                </div>
              </div>
            </div> <!-- header End-->
          </div><!-- header_wrap End-->

            <!-- mycoin_content_wrap -->
            <div class="mycoin_content_wrap">

              <ul class="gnb_tab2">
                <li class="on"><a href="#">자산현황</a></li>
                <li><a href="">거래내역</a></li>
                <li><a href="">입출금내역</a></li>

              </ul>

                <!-- m_mycoin_main -->
                <div class="content">
                    <div class="assets_area my_assets">
                      <div class="box">
                        <p class='mycoin_notice'>
                          * 모두 KRW로 환산한 추정값으로 참고용입니다.
                          <a href="#" class='question_mark'><img src="img/m_question_15.png" alt="question"></a>
                        </p>
                        <div class="assetBox">
                          <ul class="asset all_assets">
                            <li>
                                <p class='mywallet_title'>원화 잔고</p>
                                <p class="up_down_data mywallet_amount">3,374.01<span>KRW</span></p>
                            </li>
                            <li class='border_bottom_none'>
                                <p class='mywallet_title'>총 보유자산</p>
                                <p class="up_down_data mywallet_amount">8,123.60<span>KRW</span></p>
                            </li>
                          </ul>
                          <div class="asset aseet_list">
                            <ul class='assets_1'>
                              <li>
                                  <p class='mywallet_title'>총 평가금액</p>
                                  <p class="up_down_data mywallet_amount">4,892.21<span>KRW</span></p>
                              </li>
                              <li>
                                  <p class='mywallet_title'>총 매수금액</p>
                                  <p class="up_down_data mywallet_amount">4,892.21<span>KRW</span></p>
                              </li>
                            </ul>

                            <ul class='assets_2'>
                              <li>
                                  <p class='mywallet_title'>총 평가손익</p>
                                  <p class="up_down_data mywallet_amount">-142.62<span>KRW</span></p>
                              </li>
                              <li class='border_bottom_none'>
                                  <p class='mywallet_title'>총 수익률</p>
                                  <p class="up_down_data mywallet_amount">-2.92<span>%</span></p>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <div class="coin_table">
                        <div class="table_title">
                          <input type="radio" name="chk" value="chk" id='chk' class='square'>
                          <label for="chk" class='text'>보유 코인만</label>
                          <p class="unit_text">단위 : KRW</p>
                        </div>

                        <table class='mycoin_table' summary='보유코인,보유수량,매수평균가,매수금액,평가금액,평가손익,입출금 버튼,준비중 상태확인 '>
                          <colgroup>
                              <col style="width:33%;"/>
                              <col style="width:23%;"/>
                              <col style="width:22%;"/>
                              <col style="width:22%;"/>
                          </colgroup>
                          <thead class='mycoin_thead_deco'>
                            <tr>
                                <th class='mycoin_kor first_chart_icon' rowspan="2"><span>코인명</span></th>
                                <th class="second_chart_icon" rowspan="2"><Span>보유수량</span></th>
                                <th class="third_chart_icon"><span>매수평균가</span></th>
                                <th class="fourth_chart_icon"><span>매수금액</span></th>
                            </tr>
                            <tr>
                              <th class="fifth_chart_icon"><span>평가금액</span></th>
                              <th class="sixth_chart_icon"><span>평가손익</span></th>
                            </tr>
                          </thead>
                          <tbody class="mycoin_tbody_deco">
                            <tr>
                              <td class="mycoin_name" rowspan="2">
                                <img src="img/won.png" alt="원화아이콘">
                                <p>
                                  <strong class="color_bk fl">원화</strong><br />
                                  <span class='color_bk fl'>KRW</span>
                                </p>
                              </td>
                              <td rowspan="2"><p class='mycoin_data fr'><span>0</span></p></td>
                              <td><p class='mycoin_data fr'><span>0</span></p></td>
                              <td><p class='mycoin_data fr'><span>0</span></p></td>
                            </tr>
                            <tr>
                              <td><p class='mycoin_data fr'><span>0</span></p></td>
                              <td><p class='mycoin_data fr'><span>0.00</span>%</p></td>
                            </tr>
                            <tr>
                              <td class="mycoin_name" rowspan="2">
                                <img src="img/bitcoin.png" alt="비트코인아이콘">
                                <p>
                                  <strong class="color_bk fl">비트코인</strong><br />
                                  <span class='color_bk fl'>BTC</span>
                                </p>
                              </td>
                              <td rowspan="2"><p class='mycoin_data fr'><span>0</span></p></td>
                              <td><p class='mycoin_data fr'><span>0</span></p></td>
                              <td><p class='mycoin_data fr'><span>0</span></p></td>
                            </tr>
                            <tr>
                              <td><p class='mycoin_data fr'><span>0</span></p></td>
                              <td><p class='mycoin_data fr'><span>0.00</span>%</p></td>
                            </tr>
                            <tr>
                              <td class="mycoin_name" rowspan="2">
                                <img src="img/bitcoincash.png" alt="비트코인캐시아이콘">
                                <p>
                                  <strong class="color_bk fl">비트코인캐시</strong><br />
                                  <span style='display:none;'>bitcoincash</span>
                                  <span class='color_bk fl'>BCH</span>
                                </p>
                              </td>
                              <td rowspan="2"><p class='mycoin_data fr'><span>0</span></p></td>
                              <td><p class='mycoin_data fr'><span>0</span></p></td>
                              <td><p class='mycoin_data fr'><span>0</span></p></td>
                            </tr>
                            <tr>
                              <td><p class='mycoin_data fr'><span>0</span></p></td>
                              <td><p class='mycoin_data fr'><span>0.00</span>%</p></td>
                            </tr>
                            <tr>
                              <td class="mycoin_name" rowspan="2">
                                <img src="img/eth.png" alt="이더리움아이콘">
                                <p>
                                  <strong class="color_bk fl">이더리움</strong><br />
                                  <span style='display:none;'>Ethereum</span>
                                  <span class='color_bk fl'>ETH</span>
                                </p>
                              </td>
                              <td rowspan="2"><p class='mycoin_data fr'><span>0</span></p></td>
                              <td><p class='mycoin_data fr'><span>0</span></p></td>
                              <td><p class='mycoin_data fr'><span>0</span></p></td>
                            </tr>
                            <tr>
                              <td><p class='mycoin_data fr'><span>0</span></p></td>
                              <td><p class='mycoin_data fr'><span>0.00</span>%</p></td>
                            </tr>
                            <tr>
                              <td class="mycoin_name" rowspan="2">
                                <img src="img/etc.png" alt="이더리움 클래식 아이콘">
                                <p>
                                  <strong class="color_bk fl">이더리움 클래식</strong><br />
                                  <span style='display:none;'>Ethereum Classic</span>
                                  <span class='color_bk fl'>ETC</span>
                                </p>
                              </td>
                              <td rowspan="2"><p class='mycoin_data fr'><span>0</span></p></td>
                              <td><p class='mycoin_data fr'><span>0</span></p></td>
                              <td><p class='mycoin_data fr'><span>0</span></p></td>
                            </tr>
                            <tr>
                              <td><p class='mycoin_data fr'><span>0</span></p></td>
                              <td><p class='mycoin_data fr'><span>0.00</span>%</p></td>
                            </tr>
                            <tr>
                              <td class="mycoin_name" rowspan="2">
                                <img src="img/reaple.png" alt="리플 아이콘">
                                <p>
                                  <strong class="color_bk fl">리플</strong><br />
                                  <span style='display:none;'>Ripple</span>
                                  <span class='color_bk fl'>XRP</span>
                                </p>
                              </td>
                              <td rowspan="2"><p class='mycoin_data fr'><span>0</span></p></td>
                              <td><p class='mycoin_data fr'><span>0</span></p></td>
                              <td><p class='mycoin_data fr'><span>0</span></p></td>
                            </tr>
                            <tr>
                              <td><p class='mycoin_data fr'><span>0</span></p></td>
                              <td><p class='mycoin_data fr'><span>0.00</span>%</p></td>
                            </tr>
                            <tr>
                              <td class="mycoin_name" rowspan="2">
                                <img src="img/ada.png" alt="에이다 아이콘">
                                <p>
                                  <strong class="color_bk fl">에이다</strong><br />
                                  <span style='display:none;'>Ada</span>
                                  <span class='color_bk fl'>ADA</span>
                                </p>
                              </td>
                              <td rowspan="2"><p class='mycoin_data fr'><span>0</span></p></td>
                              <td><p class='mycoin_data fr'><span>0</span></p></td>
                              <td><p class='mycoin_data fr'><span>0</span></p></td>
                            </tr>
                            <tr>
                              <td><p class='mycoin_data fr'><span>0</span></p></td>
                              <td><p class='mycoin_data fr'><span>0.00</span>%</p></td>
                            </tr>
                            <tr>
                              <td class="mycoin_name" rowspan="2">
                                <img src="img/eos.png" alt="이오스 아이콘">
                                <p>
                                  <strong class="color_bk fl">이오스</strong><br />
                                  <span style='display:none;'>EOS</span>
                                  <span class='color_bk fl'>EOS</span>
                                </p>
                              </td>
                              <td rowspan="2"><p class='mycoin_data fr'><span>0</span></p></td>
                              <td><p class='mycoin_data fr'><span>0</span></p></td>
                              <td><p class='mycoin_data fr'><span>0</span></p></td>
                            </tr>
                            <tr>
                              <td><p class='mycoin_data fr'><span>0</span></p></td>
                              <td><p class='mycoin_data fr'><span>0.00</span>%</p></td>
                            </tr>
                          </tbody>
                        </table>
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
