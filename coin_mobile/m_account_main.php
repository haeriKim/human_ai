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
    <link rel="stylesheet" href="css/account_main.css">
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
                <h2 class="header_title">입출금</h2>
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
                    <div class="account_area my_assets">
                      <div class="box">

                        <div class="assetBox">
                          <ul class="asset all_assets">
                            <li class='border_bottom_none'>
                                <p class='mywallet_title'>총 보유자산</p>
                                <p class="up_down_data mywallet_amount">8,123.60<span>KRW</span></p>
                            </li>
                          </ul>

                        </div>
                      </div>

                      <div class="coin_table">
                        <div class="table_title">
                          <input type="radio" name="chk" value="chk" id='chk' class='square'>
                          <label for="chk" class='text'>보유 코인만</label>
                        </div>

                        <table class='mycoin_table' summary='보유코인,보유수량,매수평균가,매수금액,평가금액,평가손익,입출금 버튼,준비중 상태확인 '>
                          <colgroup>
                              <col style="width:40%;"/>
                              <col style="width:60%;"/>

                          </colgroup>
                          <thead class='mycoin_thead_deco'>
                            <tr>
                                <th class='mycoin_kor first_chart_icon' rowspan="2"><span>코인명</span></th>
                                <th class="second_chart_icon" rowspan="2"><Span>보유수량</span></th>

                            </tr>
                          </thead>
                          <tbody class="mycoin_tbody_deco">
                            <tr onclick="location.href='m_account_KRW_main.php'">
                              <td class="mycoin_name">
                                <img src="img/won.png" alt="원화아이콘">
                                <p>
                                  <strong class="color_bk fl">원화</strong><br />
                                  <span class='color_bk fl'>KRW</span>
                                </p>
                              </td>
                              <td><p class='mycoin_data fr'><span>110,00,000</span> KRW</p></td>

                            </tr>
                            <tr onclick="location.href='m_account_coin_main.php'">
                              <td class="mycoin_name">
                                <img src="img/bitcoin.png" alt="비트코인아이콘">
                                <p>
                                  <strong class="color_bk fl">비트코인</strong><br />
                                  <span class='color_bk fl'>BTC</span>
                                </p>
                              </td>
                              <td><p class='mycoin_data fr'><span>150.000000</span> BTC</p></td>

                            </tr>
                            <tr>
                              <td class="mycoin_name">
                                <img src="img/bitcoincash.png" alt="비트코인캐시아이콘">
                                <p>
                                  <strong class="color_bk fl">비트코인캐시</strong><br />
                                  <span class='color_bk fl'>BCH</span>
                                </p>
                              </td>
                              <td><p class='mycoin_data fr'><span>24000.00</span> BCH</p></td>

                            </tr>
                            <tr>
                              <td class="mycoin_name">
                                <img src="img/eth.png" alt="이더리움아이콘">
                                <p>
                                  <strong class="color_bk fl">이더리움</strong><br />
                                  <span style='display:none;'>Ethereum</span>
                                  <span class='color_bk fl'>ETH</span>
                                </p>
                              </td>
                              <td><p class='mycoin_data fr'><span>0</span>ETH</p></td>

                            </tr>
                            <tr>
                              <td class="mycoin_name">
                                <img src="img/etc.png" alt="이더리움 클래식 아이콘">
                                <p>
                                  <strong class="color_bk fl">이더리움 클래식</strong><br />
                                  <span style='display:none;'>Ethereum Classic</span>
                                  <span class='color_bk fl'>ETC</span>
                                </p>
                              </td>
                              <td><p class='mycoin_data fr'><span>0</span>ETC</p></td>

                            </tr>
                            <tr>
                              <td class="mycoin_name">
                                <img src="img/reaple.png" alt="리플 아이콘">
                                <p>
                                  <strong class="color_bk fl">리플</strong><br />
                                  <span style='display:none;'>Ripple</span>
                                  <span class='color_bk fl'>XRP</span>
                                </p>
                              </td>
                              <td><p class='mycoin_data fr'><span>0</span>XRP</p></td>

                            </tr>
                            <tr>
                              <td class="mycoin_name">
                                <img src="img/ada.png" alt="에이다 아이콘">
                                <p>
                                  <strong class="color_bk fl">에이다</strong><br />
                                  <span style='display:none;'>Ada</span>
                                  <span class='color_bk fl'>ADA</span>
                                </p>
                              </td>
                              <td><p class='mycoin_data fr'><span>0</span>ADA</p></td>

                            </tr>
                            <tr>
                              <td class="mycoin_name">
                                <img src="img/eos.png" alt="이오스 아이콘">
                                <p>
                                  <strong class="color_bk fl">이오스</strong><br />
                                  <span style='display:none;'>EOS</span>
                                  <span class='color_bk fl'>EOS</span>
                                </p>
                              </td>
                              <td><p class='mycoin_data fr'><span>0</span>EOS</p></td>

                            </tr>
                          </tbody>
                        </table>
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
