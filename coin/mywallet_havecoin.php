<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script><!--//배너 슬라이더-->
    <title>CCE</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/mywallet_havecoin.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/common.js"></script>
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
                    <div class="box con_410" id='mywallet_havecoin'>
                        <h3 class='mywallet_h3'>보유코인</h3>
                        <form class="" action="#" method="post">
                            <input type="checkbox" id='have_coin' name='have_coin'>
                            <label for='have_coin'>보유코인</label>
                        </form>
                        <!-- deal_table_scroll -->
                        <div class="deal_table_scroll">
                            <table class='deal_table' summary='코인명,보유비중,보유수량,상태 정보를 알 수 있는 창'>
                              <colgroup>
                                  <col width='36%'/>
                                  <col width='17%'/>
                                  <col width='33%'/>
                                  <col width='14%'/>
                              </colgroup>
                              <thead class='thead_deco mywallet_havecoin_thead'>
                                  <tr>
                                      <th class='coin_name'>코인명</th>
                                      <th>보유비중</th>
                                      <th>보유수량</th>
                                      <th class='coin_condition'>상태</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td class='coin_kor'>
                                          <img src="img/won.png" alt="원화아이콘">
                                          <p class='style_bold'>원화</p>
                                          <span class='unit'>KRW</span>
                                      </td>
                                      <td><span class='up_down_data style_bold'>100.00%</span></td>
                                      <td class='have_coin_amount'>
                                          <p class='up_down_data style_bold'>750,000,000<span class='unit_style'>KRW</span></p>
                                      </td>
                                      <td><a href='#' class='button_hover'>KRW변환</a></td>
                                  </tr>
                                  <tr>
                                      <td class='coin_kor'>
                                          <img src="img/bitcoin.png" alt="비트코인아이콘">
                                          <p class='style_bold'>비트코인</p>
                                          <span class='unit'>BTC</span>
                                      </td>
                                      <td><span class='up_down_data style_bold'>0.00%</span></td>
                                      <td class='have_coin_amount'>
                                          <p class='up_down_data style_bold'>0.00<span class='unit_style'>BTC</span></p>
                                          <p class='up_down_data'>0<span class='unit_style'>KRW</span></p>
                                      </td>
                                      <td><a href="#" class='button_hover'>입금</a></td>
                                  </tr>
                                  <tr>
                                      <td class='coin_kor'>
                                          <img src="img/bitcoincash.png" alt="비트코인캐시아이콘">
                                          <p class='style_bold'>비트코인캐시</p>
                                          <span class='unit'>BCH</span>
                                      </td>
                                      <td><span class='up_down_data style_bold'>0.00%</span></td>
                                      <td class='have_coin_amount'>
                                          <p class='up_down_data style_bold'>0.00<span class='unit_style'>BCH</span></p>
                                          <p class='up_down_data'>0<span class='unit_style'>KRW</span></p>
                                      </td>
                                      <td><a href="#" class='button_hover'>출금</a></td>
                                  </tr>
                                  <tr>
                                      <td class='coin_kor'>
                                          <img src="img/eth.png" alt="이더리움아이콘">
                                          <p class='style_bold'>이더리움</p>
                                          <span class='unit'>ETH</span>
                                      </td>
                                      <td><span class='up_down_data style_bold'>0.00%</span></td>
                                      <td class='have_coin_amount'>
                                          <p class='up_down_data style_bold'>0.00<span class='unit_style'>ETH</span></p>
                                          <p class='up_down_data'>0<span class='unit_style'>KRW</span></p>
                                      </td>
                                      <td><a href="#" class='button_hover'>입출금</a></td>
                                  </tr>
                                  <tr>
                                      <td class='coin_kor'>
                                          <img src="img/etc.png" alt="이더리움클래식아이콘">
                                          <p class='style_bold'>이더리움클래식</p>
                                          <span class='unit'>ETC</span>
                                      </td>
                                      <td><span class='up_down_data style_bold'>0.00%</span></td>
                                      <td class='have_coin_amount'>
                                          <p class='up_down_data style_bold'>0.00<span class='unit_style'>ETC</span></p>
                                          <p class='up_down_data'>0<span class='unit_style'>KRW</span></p>
                                      </td>
                                      <td><a href="#" class='button_hover'>입출금</a></td>
                                  </tr>
                                  <tr>
                                      <td class='coin_kor'>
                                          <img src="img/reaple.png" alt="리플아이콘">
                                          <p class='style_bold'>리플</p>
                                          <span class='unit'>XRP</span>
                                      </td>
                                      <td><span class='up_down_data style_bold'>0.00%</span></td>
                                      <td class='have_coin_amount'>
                                          <p class='up_down_data style_bold'>0.00<span class='unit_style'>XRP</span></p>
                                          <p class='up_down_data'>0<span class='unit_style'>KRW</span></p>
                                      </td>
                                      <td><a href="#" class='button_hover'>입출금</a></td>
                                  </tr>
                                  <tr>
                                      <td class='coin_kor'>
                                          <img src="img/ada.png" alt="에이다아이콘">
                                          <p class='style_bold'>에이다</p>
                                          <span class='unit'>ADA</span>
                                      </td>
                                      <td><span class='up_down_data style_bold'>0.00%</span></td>
                                      <td class='have_coin_amount'>
                                          <p class='up_down_data style_bold'>0.00<span class='unit_style'>ADA</span></p>
                                          <p class='up_down_data'>0<span class='unit_style'>KRW</span></p>
                                      </td>
                                      <td><a href="#" class='button_hover'>입출금</a></td>
                                  </tr>
                                  <tr>
                                      <td class='coin_kor'>
                                          <img src="img/eos.png" alt="이오스아이콘">
                                          <p class='style_bold'>이오스</p>
                                          <span class='unit'>EOS</span>
                                      </td>
                                      <td><span class='up_down_data style_bold'>0.00%</span></td>
                                      <td class='have_coin_amount'>
                                          <p class='up_down_data style_bold'>0.00<span class='unit_style'>EOS</span></p>
                                          <p class='up_down_data'>0<span class='unit_style'>KRW</span></p>
                                      </td>
                                      <td><a href="#" class='button_hover'>입출금</a></td>
                                  </tr>
                              </tbody>
                            </table>
                        </div><!-- deal_table_scroll End-->
                    </div><!-- con_410 End-->

                </div><!-- exchange_content End-->
              </div><!-- content_wrap End-->

              <!-- footer_wrap -->
              <?php include "footer.php";?>
              <!-- footer_wrap End-->

        </div><!-- container End -->
    </div><!-- wrap End -->

</body>
</html>
