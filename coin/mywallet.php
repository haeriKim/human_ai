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
    <link rel="stylesheet" href="css/mywallet.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/sub_menu.css">
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
          <!--right_all_menu-->
          <div id="left_all_menu">
            <!--right_coin_menu2-->
            <div id="left_coin_menu2">

            <!-- mywallet_tab -->
              <div id="mywallet_tab">
                <form class="buy_tab_form" action="#" method="post" name='buy_tab_form'>
                  <ul class='mywallet_tab_title'>
                      <li class='mycoin_tab'>
                          <h3><a href='#'>보유코인</a></h3>
                      </li>
                      <li class='trans-info'>
                          <h3><a href='#'>거래내역</a></h3>
                      </li>
                      <li class='ledger_tab'>
                          <h3><a href='#'>입출금내역</a></h3>
                      </li>
                  </ul>
                    <!-- buy_tab_content -->
                  <div class="mycoin_tab_content box">
                      <p class='mycoin_notice'>
                          * 매수평균가, 평가금액, 평가손익, 수익률은 모두 KRW로 환산한 추정값으로 참고용입니다.
                          <a href="#" class='question_mark'><img src="img/question.png" alt="question" width="18"></a>
                      </p>
                      <div class="mywallet_myinfo cb cf">
                        <div class="mywallet_box1 fl">
                          <strong class="user_name">가*다</strong>
                          <p class="user_email">abc@naver.com</p>
                        </div>
                        <div class='mywallet_box2'>
                          <ul class='list_1 fl'>
                            <li>
                                <p class='mywallet_title'>원화 잔고</p>
                                <p class="up_down_data mywallet_amount">1,000<span>KRW</span></p>
                            </li>
                            <li>
                                <p class='mywallet_title'>총 평가금액</p>
                                <p class="up_down_data mywallet_amount">1,000<span>KRW</span></p>
                            </li>
                            <li class='border_bottom_none'>
                                <p class='mywallet_title'>총 보유자산</p>
                                <p class="up_down_data mywallet_amount">1,000<span>KRW</span></p>
                            </li>
                          </ul>

                          <ul class='list_2 fl'>
                            <li>
                                <p class='mywallet_title'>총 매수금액</p>
                                <p class="up_down_data mywallet_amount">1,000<span>KRW</span></p>
                            </li>
                            <li>
                                <p class='mywallet_title'>총 평가손익</p>
                                <p class="up_down_data mywallet_amount">1,000<span>KRW</span></p>
                            </li>
                            <li class='border_bottom_none'>
                                <p class='mywallet_title'>총 수익률</p>
                                <p class="up_down_data mywallet_amount">0</p>
                            </li>
                          </ul>

                        </div>

                      </div>

                      <table class='mycoin_table' summary='보유코인,보유수량,매수평균가,매수금액,평가금액,평가손익,입출금 버튼,준비중 상태확인 '>
                        <colgroup>
                            <col width='20%'/>
                            <col width='9%'/>
                            <col width='12%'/>
                            <col width='9%'/>
                            <col width='10%'/>
                            <col width='10%'/>
                            <col width='14%'/>
                        </colgroup>
                        <thead class='mycoin_thead_deco'>
                            <tr>
                                <th class='mycoin_kor fl first_chart_icon'><a href="#">보유코인</a></th>
                                <th class='mycoin_eng' style='display:none;'><a href="#">영문명</a></th>
                                <th class="second_chart_icon"><a href="#">보유수량</a></th>
                                <th class="third_chart_icon"><a href="#">매수평균가</a></th>
                                <th class="fourth_chart_icon"><a href="#">매수금액</a></th>
                                <th class="fifth_chart_icon"><a href="#">평가금액</a></th>
                                <th class="sixth_chart_icon"><a href="#">평가손익</a></th>
                                <th class="seventh_chart_icon"><a href="#">&nbsp;</a></th>
                            </tr>
                        </thead>
                        <tbody class="mycoin_tbody_deco">
                          <tr>
                            <td class="mycoin_name">
                              <img src="img/won.png" alt="원화아이콘">
                              <p>
                                <strong class="color_bk fl">원화</strong><br />
                                <span style='display:none;'>Korean Won</span>
                                <span class='color_bk fl'>KRW</span>
                              </p>
                            </td>
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0.00</span>%</p></td>
                            <td><p class='mycoin_data '><input type="submit" value='입금' class="btn_small"/><span class='mycoin_deposit'><input type="submit" value='출금' class="btn_small"/></td>
                          </tr>
                          <tr>
                            <td class="mycoin_name">
                              <img src="img/bitcoin.png" alt="비트코인아이콘">
                              <p>
                                <strong class="color_bk fl">비트코인</strong><br />
                                <span style='display:none;'>Bitcoin</span>
                                <span class='color_bk fl'>BTC</span>
                              </p>
                            </td>
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0.00</span>%</p></td>
                            <td><span class='mycoin_data '><input type="submit" value='입금' class="btn_small"/><span class='mycoin_deposit'><input type="submit" value='출금' class="btn_small"/></td>
                          </tr>
                          <tr>
                            <td class="mycoin_name">
                              <img src="img/bitcoincash.png" alt="비트코인캐시아이콘">
                              <p>
                                <strong class="color_bk fl">비트코인캐시</strong><br />
                                <span style='display:none;'>bitcoincash</span>
                                <span class='color_bk fl'>BCH</span>
                              </p>
                            </td>
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0.00</span>%</p></td>
                              <td><span class='mycoin_data'>

                                <input type="submit" value='입금' class="btn_small " />
                                <span class='mycoin_deposit'></td>
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
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0.00</span>%</p></td>
                            <td><span class='mycoin_data'><input type="submit" value='출금' class="btn_small"/><span class='mycoin_data'></td>
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
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0.00</span>%</p></td>
                            <td><span class='ready_data'>입출금 준비중</span></td>
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
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0.00</span>%</p></td>
                            <td><span class='ready_data'>입출금 준비중</span></td>
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
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0.00</span>%</p></td>
                            <td><span class='ready_data'>입출금 준비중</span></td>
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
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0</span>KRW</p></td>
                            <td><p class='mycoin_data fr'><span>0.00</span>%</p></td>
                            <td><span class='ready_data'>입출금 준비중</span></td>
                          </tr>
                        </tbody>
                      </table>

                  </div><!-- buy_tab_content End-->
                </form>
              </div><!-- mywallet_tab End-->
            </div><!--left_coin_menu2 End-->
          </div><!--left_all_menu-->

          <!--left_coin_menu-->
          <div id="right_coin_menu">
              <div class="box" id='deal_orgin_transaction'>
                  <h3 class='exchange_h3'>원화거래</h3>
                  <table class='deal_table' summary='코인명,현재가,전일대비,거래대금 정보를 알 수 있는 창'>
                    <colgroup>
                        <col width='34%'/>
                        <col width='24%'/>
                        <col width='21%'/>
                        <col width='20%'/>
                    </colgroup>
                    <thead class='thead_deco'>
                        <tr>
                            <th class='coin_kor'><a href="#">코인명</a></th>
                            <th class='coin_eng' style='display:none;'><a href="#">영문명</a></th>
                            <th><a href="#">현재가</a></th>
                            <th><a href="#">전일대비</a></th>
                            <th><a href="#">거래대금</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>비트코인</p>
                                <p style='display:none;'>Bitcoin</p>
                                <span class='unit'>BTC/KRW</span>
                            </td>
                            <td><span class='up_down_data money_up'>7,500,000</td>
                            <td><span class='up_down_data money_up'>+1.20%</td>
                            <td><span class='up_down_data'>74,000,000</td>
                        </tr>
                        <tr>
                            <td class='coin_kor'>
                                <p>비트코인캐시</p>
                                <p style='display:none;'>Bitcoin Cash</p>
                                <span class='unit'>BCH/KRW</span>
                            </td>
                            <td><span class='up_down_data money_up'>599,000</td>
                            <td><span class='up_down_data money_up'>+0.00%</td>
                            <td><span class='up_down_data'>7,000,000</td>
                        </tr>
                        <tr>
                            <td class='coin_kor'>
                                <p>이더리움</p>
                                <p style='display:none;'>Ethereum</p>
                                <span class='unit'>ETH/KRW</span>
                            </td>
                            <td><span class='up_down_data money_up'>800,000</td>
                            <td><span class='up_down_data money_up'>+1.20%</td>
                            <td><span class='up_down_data'>700,000</td>
                        </tr>
                        <tr>
                            <td class='coin_kor'>
                                <p>이더리움클래식</p>
                                <p style='display:none;'>Ethereum Classic</p>
                                <span class='unit'>ETC/KRW</span>
                            </td>
                            <td><span class='up_down_data money_nochange'>800,000</td>
                            <td><span class='up_down_data'>+0.00%</span></td>
                            <td><span class='up_down_data'>700,000</td>
                        </tr>
                        <tr>
                            <td class='coin_kor'>
                                <p>리플</p>
                                <p style='display:none;'>Ripple</p>
                                <span class='unit'>XRP/KRW</span>
                            </td>
                            <td><span class='up_down_data money_down'>900,000</td>
                            <td><span class='up_down_data money_down'>-1.20%</td>
                            <td><span class='up_down_data'>700,000</td>
                        </tr>
                        <tr>
                            <td class='coin_kor'>
                                <p>에이다</p>
                                <p style='display:none;'>Ada</p>
                                <span class='unit'>ADA/KRW</span>
                            </td>
                            <td><span class='up_down_data money_down'>7,500,000</td>
                            <td><span class='up_down_data money_down'>-1.20%</td>
                            <td><span class='up_down_data'>700,000</td>
                        </tr>
                        <tr>
                            <td class='coin_kor'>
                                <p>이오스</p>
                                <p style='display:none;'>EOS</p>
                                <span class='unit'>EOS/KRW</span>
                            </td>
                            <td><span class='up_down_data money_down'>600,000</td>
                            <td><span class='up_down_data money_down'>-1.20%</td>
                            <td><span class='up_down_data'>700,000</td>
                        </tr>
                    </tbody>
                  </table>
              </div><!-- con_410 End-->
          </div><!--right_coin_menu End-->
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
  <div id="qustion_mark_active_full">
          <!-- question_mark_active -->
          <div id="question_mark_active">
              <div class="question_mark_active_inner">
                  <h2>보유코인 유의사항</h2>
                  <p>
                    1. 보유코인의 매수평균가, 평가금액, 평가손익, 수익률 은 모두 KRW로 환산한 추정값으로 참고용입니다.<br><br>

                    CCE에서는 4가지의 기초화폐(KRW, BTC, ETH, USDT)로 암호화폐를 거래할 수 있습니다.<br>
                    4가지 기초화폐 중 어떤 것으로 거래하는가에 따라서 매수가격의 단위가 달라지며, 하나의 코인을 2가지 이상의 기초화폐로 거래하게 되면 현재 수익률을 확인하는 것이 어려워지게 됩니다.<br>
                    이를 위한 보완책으로 모든 가격의 단위를 KRW로 환산해 현재 추정 수익률을 참고용으로 확인하실 수 있도록 제공합니다.<br><br>

                    2. 보유코인의 매수/매도 및 입금/출금 내역을 모두 반영합니다. 입금 내역의 매수평균가는 입금 시점의 시세를 반영해 계산합니다.<br><br>

                    3. 계산 방식<br><br>

                    총평가: 보유 암호화폐의 평가금액 합계<br>
                    총 보유자산: 총평가 + 보유KRW<br>
                    매수평균가: 매수(입금) 체결 시 직전 매수평균가와 평균, 매도(출금) 체결 시 직전 매수평균가 유지 BTC 마켓의 매수가격은 BTC/KRW<br>
                    가격을 반영해 KRW로 환산(같은 방식으로 ETH 마켓과 USDT 마켓 가격도 KRW로 환산)<br>
                    매수금액: 보유수량 x 매수평균가<br>
                    평가금액: 보유수량 x 현재가 보유코인이 KRW마켓에 상장되어 있으면 KRW 마켓 현재가 기준, 그렇지 않으면 BTC 마켓의 현재가를<br>
                    KRW로 환산해서 평가금액 계산<br>
                    평가손익: 평가금액 – 매수금액<br>
                    수익률: 평가손익 ÷ 매수금액<br><br>

                    ※ 보유코인을 어떤 마켓에서 매매한 것인지에 따라서, 혹은 입출금이 빈번이 발생하는 경우 수익률이 과대 혹은 과소평가되어 보일 수 있습니다. (고객님의 보유 수량에는 영향을 미치지 않습니다.) 이는 고객님의 수익평가에 대한 참고자료로, CCE는 제공된 편의정보를 기반으로 한 투자결과에 대한책임을 지지 않습니다.
                  </p>
                  <a href="#" class='close_btn'>닫기</a>
              </div>
          </div><!-- question_mark_active End-->
          <div id="shadow"></div>
  </div>  <!-- full End-->
</body>
</html>
