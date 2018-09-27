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
    <link rel="stylesheet" href="css/mycoin_sub.css">
    <link rel="stylesheet" href="css/mywallet_input_apply_KRW.css">
    <link rel="stylesheet" href="css/mywallet_input_apply_bitcoin.css">
    <link rel="stylesheet" href="css/mywallet_output_apply_bitcoin.css">
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
                <div class="content mycoin_content con_1290">
                    <!-- 보유코인 시작 --><!-- 보유코인 시작 --><!-- 보유코인 시작 --><!-- 보유코인 시작 --><!-- 보유코인 시작 --><!-- 보유코인 시작 --><!-- 보유코인 시작 --><!-- 보유코인 시작 --><!-- 보유코인 시작 --><!-- 보유코인 시작 -->
                    <div class="box" id='mywallet_havecoin'>
                        <h3 class='mywallet_h3'>보유코인</h3>
                        <form class="" action="#" method="post">
                            <input type="checkbox" id='have_coin' name='have_coin'>
                            <label for='have_coin'>보유코인</label>
                        </form>
                        <!-- deal_table_scroll -->
                        <div class="deal_table_scroll">
                            <table class='deal_table' summary='코인명,보유비중,보유수량,상태 정보를 알 수 있는 창'>
                              <colgroup>
                                  <col width='37%'/>
                                  <col width='16%'/>
                                  <col width='37%'/>
                                  <col width='10%'/>
                              </colgroup>
                              <thead class='thead_deco mywallet_havecoin_thead'>
                                  <tr>
                                      <th class='coin_name'>코인명</th>
                                      <th class='coin_portion'>보유비중</th>
                                      <th class='coin_amount'>보유수량</th>
                                      <th class='coin_condition'>상태</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr class='active'>
                                      <td class='coin_kor'>
                                          <img src="img/won.png" alt="원화아이콘">
                                          <p class='style_bold'>원화</p>
                                          <span class='unit'>KRW</span>
                                      </td>
                                      <td class='amount_content'><span class='up_down_data style_bold'>100.00%</span></td>
                                      <td class='have_coin_amount'>
                                          <p class='up_down_data style_bold'>750,000,000<span class='unit_style'>KRW</span></p>
                                      </td>
                                      <td><a href='#' class='button_hover won_sel'>입출금</a></td>
                                  </tr>
                                  <tr>
                                      <td class='coin_kor'>
                                          <img src="img/bitcoin.png" alt="비트코인아이콘">
                                          <p class='style_bold'>비트코인</p>
                                          <span class='unit'>BTC</span>
                                      </td>
                                      <td class='amount_content'><span class='up_down_data style_bold'>0.00%</span></td>
                                      <td class='have_coin_amount'>
                                          <p class='up_down_data style_bold'>0.00<span class='unit_style'>BTC</span></p>
                                          <p class='up_down_data'>0<span class='unit_style'>KRW</span></p>
                                      </td>
                                      <td><a href="#" class='button_hover coin_sel'>입금</a></td>
                                  </tr>
                                  <tr>
                                      <td class='coin_kor'>
                                          <img src="img/bitcoincash.png" alt="비트코인캐시아이콘">
                                          <p class='style_bold'>비트코인캐시</p>
                                          <span class='unit'>BCH</span>
                                      </td>
                                      <td class='amount_content'><span class='up_down_data style_bold'>0.00%</span></td>
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
                                      <td class='amount_content'><span class='up_down_data style_bold'>0.00%</span></td>
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
                                      <td class='amount_content'><span class='up_down_data style_bold'>0.00%</span></td>
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
                                      <td class='amount_content'><span class='up_down_data style_bold'>0.00%</span></td>
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
                                      <td class='amount_content'><span class='up_down_data style_bold'>0.00%</span></td>
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
                                      <td class='amount_content'><span class='up_down_data style_bold'>0.00%</span></td>
                                      <td class='have_coin_amount'>
                                          <p class='up_down_data style_bold'>0.00<span class='unit_style'>EOS</span></p>
                                          <p class='up_down_data'>0<span class='unit_style'>KRW</span></p>
                                      </td>
                                      <td class='ready_input_output'>입출금<br/>준비중</td>
                                  </tr>
                              </tbody>
                            </table>
                        </div><!-- deal_table_scroll End-->
                    </div><!-- con_410 End-->
                    <!-- 보유코인 끝 --><!-- 보유코인 끝 --><!-- 보유코인 끝 --><!-- 보유코인 끝 --><!-- 보유코인 끝 --><!-- 보유코인 끝 --><!-- 보유코인 끝 --><!-- 보유코인 끝 --><!-- 보유코인 끝 --><!-- 보유코인 끝 --><!-- 보유코인 끝 -->


                  <!--left_mywallet_menu-->
                  <div id="left_mywallet_menu"><!--float:left할 콘텐츠-->

                    <div class="box mycoin_fence">
                  <!--coin탭태두리-->
                    <div class="mycoin_tab" id="mycoin_tab">
                        <ul class="tabs">
                            <li class="active tab_same" rel="tab1">보유코인</li>
                            <li class="tab_same" rel="tab2">거래내역</li>
                            <li class="tab_same" rel='tab3'>입출금</li>
                        </ul>
                    </div><!--coin탭태두리 End-->

                    <!--mycointab_container-->
                    <div class="mycointab_container">

                            <!-- #tab1 보유코인-->
                            <div id="tab1" class="tab_content">
                                <!-- mywallet_tab -->
                                  <div id="mywallet_tab">
                                    <form class="buy_tab_form" action="#" method="post" name='buy_tab_form'>
                                        <!-- buy_tab_content -->
                                      <div class="mycoin_tab_content">
                                          <p class='mycoin_notice'>
                                              * 매수평균가, 평가금액, 평가손익, 수익률은 모두 KRW로 환산한 추정값으로 참고용입니다.
                                              <a href="#" class='question_mark'><img src="img/question.png" alt="question" width="18"></a>
                                          </p>
                                          <div class="mywallet_myinfo cb cf">
                                            <div class="mywallet_box1 fl">
                                              <strong class="user_name">가*다</strong>
                                              <p class="user_mail">abc@naver.com</p>
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
                            </div><!--#tab1 보유코인 End-->

                            <!-- #tab2 거래내역-->
                            <div id="tab2" class="tab_content">

                              <!--tab2_header-->
                              <div class="tab2_header">
                                <ul class="tabs2"><!--che_gyul_tab-->
                                  <li class="active2 chegyeol_bt" rel="chegyeol">체결</li>
                                  <li class="michegyeol_bt" rel="michegyeol">미체결</li>
                                </ul>
                                        <div class="days">
                                          <div>
                                            <input type="date" value="2018-07-29">
                                          </div>
                                          <span>~</span>
                                          <div>
                                            <input type="date" value="2018-08-29">
                                          </div>

                                          <input type="submit" name="search" value="조회" class='search_btn'>
                                        </div>
                              </div><!--tab2_header End-->

                                  <!--체결-->
                                  <div id="chegyeol" class="chegyeol conclu_table">
                                    <table class="chegyeol_table" summary="주무시간,코인,거래종류,거래수량,거래단가,거래금액,수수료,정산금액">
                                      <colgroup>
                                          <col width='12%'/>
                                          <col width='12%'/>
                                          <col width='10%'/>
                                          <col width='13%'/>
                                          <col width='15%'/>
                                          <col width='12%'/>
                                          <col width='13%'/>
                                          <col width='13%'/>
                                      </colgroup>
                                      <thead class='chegyeol_header'>
                                          <tr>
                                              <th>거래시간</th>
                                              <th>코인</th>
                                              <th>
                                                <select title="거래전체" >
                                                    <option value="거래전체" selected="selected">거래전체</option>
                                                    <option value="매수">매수</option>
                                                    <option value="매도">매도</option>
                                                </select>
                                              </th>
                                              <th>거래수량</th>
                                              <th>거래단가</th>
                                              <th>거래금액</th>
                                              <th>수수료</th>
                                              <th>정산금액</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>2018-09-05<br/>
                                            11 : 23 : 45
                                          </br/></td>
                                          <td>비트코인</td>
                                          <td class="buying">매수</td>
                                          <td>0</td>
                                          <td><span>0</span>KRW</td>
                                          <td><span>0</span>KRW</td>
                                          <td><span>0</span>KRW</td>
                                          <td><span>0</span>KRW</td>
                                        </tr>

                                        <tr>
                                          <td>2018-08-31<br/>
                                            08 : 47 : 26</td>
                                          <td>이더리움</td>
                                          <td class="sell">매도</td>
                                          <td>0</td>
                                          <td><span>0</span>KRW</td>
                                          <td><span>0</span>KRW</td>
                                          <td><span>0</span>KRW</td>
                                          <td><span>0</span>KRW</td>
                                        </tr>

                                        <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>

                                        <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>

                                        <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>

                                        <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>

                                        <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>

                                        <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>

                                        <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>

                                        <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>

                                      </tbody>

                                    </table>
                                    </div><!--체결 End-->


                                    <!--미체결-->
                                    <div id="michegyeol" class="michegyeol conclu_table">
                                      <table class="chegyeol_table" summary="주무시간,코인,거래종류,거래수량,거래단가,거래금액,수수료,정산금액">
                                        <colgroup>
                                            <col width='11%'/>
                                            <col width='12%'/>
                                            <col width='10%'/>
                                            <col width='15%'/>
                                            <col width='14%'/>
                                            <col width='14%'/>
                                            <col width='14%'/>
                                            <col width='9%'/>
                                        </colgroup>
                                        <thead class='chegyeol_header'>
                                            <tr>
                                                <th>거래시간</th>
                                                <th>마켓명</th>
                                                <th>
                                                  <select title="거래전체" >
                                                      <option value="거래전체" selected="selected">거래전체</option>
                                                      <option value="매수">매수</option>
                                                      <option value="매도">매도</option>
                                                  </select>
                                                </th>
                                                <th>주문가격</th>
                                                <th>주문수량</th>
                                                <th>체결수량</th>
                                                <th>미체결수량</th>
                                                <th>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>2018-08-31<br/>
                                              09 : 34 : 30</td>
                                            <td>비트코인</td>
                                            <td class="buying">매수</td>
                                            <td>0</td>
                                            <td><span>0</span>KRW</td>
                                            <td><span>0</span>KRW</td>
                                            <td><span>0</span>KRW</td>
                                            <td>
                                              <input type="submit" value="취소" />
                                            </td>
                                          </tr>

                                          <tr>
                                            <td>2018-08-15<br/>
                                              18 : 38 : 24</td>
                                            <td>원화</td>
                                            <td class="sell">매도</td>
                                            <td>0</td>
                                            <td><span>0</span>KRW</td>
                                            <td><span>0</span>KRW</td>
                                            <td><span>0</span>KRW</td>
                                            <td><input type="submit" value="취소" /></td>
                                          </tr>

                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>

                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>

                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>

                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>

                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>

                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>

                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>

                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>

                                        </tbody>

                                      </table>

                                    </div><!--미체결 End-->


                                    <div class="contentBottom">
                                        <div class="paging">
                                            <a href="#" title="prev"><img src="img/p_first.png"></a>
                                            <a href="#" title="prev"><img src="img/p_prev.png"></a>

                                            <a href="#" title="1page" class="selected">1</a>
                                            <a href="#" title="2page">2</a>
                                            <a href="#" title="3page">3</a>
                                            <a href="#" title="4page">4</a>
                                            <a href="#" title="5page">5</a>

                                            <a href="#" title="next"><img src="img/p_next.png"></a>
                                            <a href="#" title="next"><img src="img/p_end.png"></a>
                                        </div>
                                    </div><!-- 페이징 -->


                            </div><!--#tab2 거래내역 End-->


<!-- 입출금 탭 시작 --><!-- 입출금 탭 시작 --><!-- 입출금 탭 시작 --><!-- 입출금 탭 시작 --><!-- 입출금 탭 시작 --><!-- 입출금 탭 시작 --><!-- 입출금 탭 시작 --><!-- 입출금 탭 시작 --><!-- 입출금 탭 시작 --><!-- 입출금 탭 시작 -->
                            <!-- #tab3 입출금-->
                            <div id="tab3" class="tab_content tab_content_input_output">
                                            <!-- KRW_input_output --><!-- 원화입출금 시작-->
                                            <div id='KRW_input_output'>
                                            <!--tab3_header-->
                                            <div class="tab3_header">
                                              <ul class="tabs3">
                                                <li class="active2 input_KRW_btn" rel="input_KRW">
                                                  <a href='#'>입금</a>
                                                </li>
                                                <li class="output_KRW_btn" rel="output_KRW">
                                                  <a href='#'>출금</a>
                                                </li>
                                                <li class="io_list" rel="io_list">
                                                  <a href='#'>입출금내역</a>
                                                </li>
                                              </ul>
                                            </div><!--tab3_header End-->
                                            <!-- input_KRW -->
                                            <div id='input_KRW' class='KRW_conclu_table input_KRW '>
                                                <p class='recharge_coin'>원화(KRW) 입금</p>
                                                <div class="my_coin_state">
                                                    <ul>
                                                        <li class='my_coin_li_01'>
                                                            <p class='my_coin_state_title'>보유금액</p>
                                                            <p class='up_down_data my_coin_state_amount'>0<span>KRW</span></p>
                                                        </li>
                                                        <li>
                                                            <p class='my_coin_state_title'>출금가능</p>
                                                            <p class='up_down_data my_coin_state_amount'>0<span>KRW</span></p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <form class="" action="#" method="post">
                                                    <!-- account_table_wrap -->
                                                    <div class="account_table_wrap">
                                                        <!-- send_account -->
                                                        <div class="send_account">
                                                            <p>입금할 은행 계좌정보</p>
                                                            <table class='left_thick_table'>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>은행</th>
                                                                        <td><span class='bankName'>○○은행</span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>계좌번호</th>
                                                                        <td><span class='user_account'>1234-567-8910-11-123</span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>예금주</th>
                                                                        <td>(주)코인거래소</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div><!-- send_account End-->
                                                        <!-- your_account -->
                                                        <div class="your_account">
                                                            <p>등록한 은행 계좌정보</p>
                                                            <table class='left_thick_table'>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>은행</th>
                                                                        <td><span class='bankName'>○○은행</span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>계좌번호</th>
                                                                        <td>
                                                                            <p class='user_account'>1234-<span class='no_look'>567-8910</span>-11-123</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>예금주</th>
                                                                        <td><span class='user_name'>가나다</span></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div><!-- your_account End-->
                                                    </div><!-- account_table_wrap End-->

                                                    <div class="send_info_01">
                                                        <p class='person_name'>입금자명</p>
                                                        <p class='temporary_name'><span class='user_name'>가나다</span>1234</p>
                                                        <span class='caution'>반드시 발급된 입금자명으로 입금해주세요</span>
                                                    </div>

                                                    <div class="send_info_02">
                                                        <label for="send_money">입금금액</label>
                                                        <input type="text" name="send_money" id='send_money' placeholder="0" required>
                                                            <span class='unit_KRW_fixed'>KRW</span>
                                                        </input>
                                                        <span class='caution'>최소 입금 금액 : 5,000원</span>
                                                        <span class='caution sub_02'>입금 수수료 : 무료</span>
                                                        <span class='caution'>최대 입금 금액 : 무제한</span>
                                                        <span class='caution sub_04'>최초 입금 후 출금시간 : 72시간</span>
                                                    </div>

                                                    <!-- before_send_money_wrap -->
                                                    <div class="before_send_money_wrap before_send_money_01">
                                                        <p>입금신청 주의사항</p>
                                                        <div class="checkbox_list">
                                                            <input type="checkbox" id='number_01' class="agree_check_01">
                                                            <label for='number_01'>토스, 카카오페이, 폰뱅킹으로는 입금하지 않습니다.</label>
                                                            <input type="checkbox" id='number_02' class="agree_check_01">
                                                            <label for='number_02'>입금금액과 충전요청 금액이 동일합니다.</label>
                                                            <input type="checkbox" id='number_03' class="agree_check_01">
                                                            <label for='number_03'>환금계좌로 등록한 나의 은행계좌에서 입금합니다.</label>
                                                            <input type="checkbox" id='number_04' class="agree_check_01">
                                                            <label for='number_04'>위사항 미준수 시 환급은 주말/휴일 제외 1주일 이상 걸림을 알고 있습니다.</label>
                                                            <input type="checkbox" id='number_05' class="agree_check_01">
                                                            <label for='number_05'>원화 입금 후 첫 출금은 주말 제외 72시간 이후 가능함을 알고 있습니다.</label>

                                                            <input type="checkbox" id='number_06' class="allAgree_01">
                                                            <label for='number_06' class='all_agree_01'>위의 입금시 주의사항에 모두 동의합니다.</label>
                                                            <p id="malpungsun">입금시 주의사항에 모두 동의해주셔야 입금신청이 진행됩니다.</p>
                                                        </div>

                                                        <div class="cancel_or_apply">
                                                            <input type="reset" name="reset" value="취소" class='cancel_btn'/>
                                                            <span class='agree_btn if_you_not_all_agree'>입금신청</span>
                                                            <input type="submit" name="submit" value="입금신청" class='agree_btn if_you_all_agree'/>
                                                        </div>
                                                    </div><!-- before_send_money_wrap End-->
                                                </form>
                                            </div><!-- input_KRW End-->
                                            <div id='output_KRW' class='KRW_conclu_table output_KRW'>
                                                <p class='recharge_coin'>원화(KRW) 출금</p>
                                                <div class="my_coin_state">
                                                    <ul>
                                                        <li class='my_coin_li_01'>
                                                            <p class='my_coin_state_title'>보유금액</p>
                                                            <p class='up_down_data my_coin_state_amount'>0<span>KRW</span></p>
                                                        </li>
                                                        <li>
                                                            <p class='my_coin_state_title'>출금가능</p>
                                                            <p class='up_down_data my_coin_state_amount'>0<span>KRW</span></p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <form class="" action="#" method="post">
                                                    <!-- account_table_wrap -->
                                                    <div class="account_table_wrap">
                                                        <!-- send_account -->
                                                        <div class="send_account">
                                                            <p>출금정보</p>
                                                            <table class='left_thick_table'>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>출금은행</th>
                                                                        <td><span class='bankName'>○○은행</span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>계좌번호</th>
                                                                        <td><span class='user_account'>1234-1564-68789</span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>예금주</th>
                                                                        <td><span class='user_name'>가나다</span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>KRW 잔고</th>
                                                                        <td><span class='up_down_data'>100,000,000 KRW</span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>1회 출금한도</th>
                                                                        <td>100,000,000 KRW</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>1일 잔여한도</th>
                                                                        <td>
                                                                            <p>200,000,000 KRW</p>
                                                                            <input type="button" value="인증레벨설정">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>출금요청액</th>
                                                                        <td>
                                                                            <input class='withdrawal_price' type="text" name="" value="" placeholder="0" required>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>수수료</th>
                                                                        <td>1,000 KRW</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>보안 비밀번호</th>
                                                                        <td>
                                                                            <input type="password" class='user_security' name="" value="" placeholder="보안 비밀번호를 입력하세요." required maxlength="4" minlength='4'>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>OTP 인증번호</th>
                                                                        <td>
                                                                            <input type="text" class='user_otpNum' name="" value="" placeholder="OTP 번호를 입력하세요." required maxlength="6" minlength="6">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>휴대폰 SMS 인증</th>
                                                                        <td>
                                                                            <input type="text" name="" value="" placeholder="휴대폰으로 전송된 인증번호를 입력하세요." required>
                                                                            <input type="button" value="인증번호요청">
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div><!-- send_account End-->
                                                    </div><!-- account_table_wrap End-->

                                                    <!-- before_send_money_wrap -->
                                                    <div class="before_send_money_wrap before_send_money_02">
                                                        <p>출금신청 주의사항</p>
                                                        <div class="checkbox_list">
                                                            <input type="checkbox" id='number_07' class="agree_check_02">
                                                            <label for='number_07'>토스, 카카오페이, 폰뱅킹으로는 출금하지 않습니다.</label>
                                                            <input type="checkbox" id='number_08' class="agree_check_02">
                                                            <label for='number_08'>출금 수수료는 1,000원이며 5,000원 이상부터 출금이 가능합니다.</label>
                                                            <input type="checkbox" id='number_09' class="agree_check_02">
                                                            <label for='number_09'>환금계좌로 등록한 나의 은행계좌에서 출금합니다.</label>
                                                            <input type="checkbox" id='number_10' class="agree_check_02">
                                                            <label for='number_10'>위 사항 미준수 시 환급은 주말/휴일 제외 1주일 이상 걸림을 알고 있습니다.</label>
                                                            <input type="checkbox" id='number_11' class="agree_check_02">
                                                            <label for='number_11'>원화 입금 후 첫 출금은 주말 제외 72시간 이후 가능함을 알고 있습니다.</label>

                                                            <input type="checkbox" id='number_12' class="allAgree_02">
                                                            <label for='number_12' class='all_agree_02'>위의 출금시 주의사항에 모두 동의합니다.</label>
                                                        </div>

                                                        <div class="cancel_or_apply">
                                                            <input type="reset" name="reset" value="취소" class='cancel_btn'/>
                                                            <span class='agree_btn if_you_not_all_agree'>출금신청</span>
                                                            <input type="submit" name="submit" value="출금신청" class='agree_btn if_you_all_agree'/>
                                                        </div>

                                                    </div><!-- before_send_money_wrap End-->
                                                </form>
                                            </div><!-- output_KRW End-->

                                            <!-- 입출금 내역 -->
                                            <div id='io_list' class='KRW_conclu_table io_list'>
                                              <form class="report_form" action="#" method="post" name='report_form'>
                                                  <!-- buy_tab_content -->
                                                <div class="table_top cf">
                                                    <div class="selectAll days fl">
                                                        <select title="전체">
                                                            <option value="전체" selected="selected">전체</option>
                                                            <option value="원화">원화</option>
                                                            <option value="비트코인">비트코인</option>
                                                            <option value="비트코인 캐시">비트코인 캐시</option>
                                                            <option value="이더리움">이더리움</option>
                                                            <option value="이더리움 클래식">이더리움 클래식</option>
                                                            <option value="리플">리플</option>
                                                            <option value="에이다">에이다</option>
                                                            <option value="이오스">이오스</option>
                                                        </select>
                                                    </div>
                                                <!--tab2_header-->
                                                    <div class="tab2_header fr">
                                                        <div class="days">
                                                          <div class="fl">
                                                            <input type="date" value="2018-07-29">
                                                          </div>
                                                        <span>~</span>
                                                        <div class="fl">
                                                            <input type="date" value="2018-08-29">
                                                          </div>
                                                          <input type="submit" name="search" value="조회" class='search_btn'>
                                                        </div>
                                                    </div>
                                                <!--tab2_header End-->
                                                </div>
                                                  <table class='mycoin_table' summary='코인, 요청일시, 금액(수량), 수수료, 입금은행, 계좌번호, 상세보기 버튼, 입금자명, 진행전체, 해당버튼 '>
                                                    <colgroup>
                                                        <col width=''/>
                                                        <col width=''/>
                                                        <col width=''/>
                                                        <col width=''/>
                                                        <col width=''/>
                                                        <col width=''/>
                                                        <col width=''/>
                                                        <col width=''/>
                                                        <col width=''/>
                                                        <col width=''/>
                                                        <col width=''/>
                                                    </colgroup>
                                                    <thead class='mycoin_thead_deco'>
                                                    <tr>
                                                      <th>
                                                        <select title="전체" >
                                                            <option value="거래전체" selected="selected">전체</option>
                                                            <option value="입금">입금</option>
                                                            <option value="출금">출금</option>
                                                        </select>
                                                      </th>
                                                      <th>코인</th>
                                                      <th class='apply_date_th'>요청일시</th>
                                                      <th>금액(수량)</th>
                                                      <th>수수료</th>
                                                      <th>입금은행</th>
                                                      <th colspan="2" class='account_number_th'>계좌번호</th>
                                                      <th>입금자명</th>
                                                      <th>
                                                        <select title="진행전체" >
                                                            <option value="진행전체" selected="selected">진행전체</option>
                                                            <option value="대기중">대기중</option>
                                                            <option value="처리완료">처리완료</option>
                                                        </select>
                                                            </th>
                                                      <th><a href="#">&nbsp;</a></th>
                                                    </tr>
                                                  </thead>
                                                    <tbody class="mycoin_tbody_deco">
                                                      <tr>
                                                        <td><p class="red">입금</p></td>
                                                        <td>원화</td>
                                                        <td class='apply_date_td'><p>2018-09-21</p><span>19:00:01</span></td>
                                                        <td><p class='mycoin_data red'>100,000</p></td>
                                                        <td><p class='mycoin_data'>0</p></td>
                                                        <td><p class='bankName'>OO은행</p></td>
                                                        <td style="overflow:hidden; text-overflow:ellipsis;">
                                                                        <p class='user_account fl'><nobr>123-456789-320-01</nobr></p>
                                                                    </td>
                                                                    <td><p class='mycoin_data'>&nbsp;</p></td>
                                                        <td><p class='mycoin_data fr'><span class='user_name'>가나다</span>1234</td>
                                                        <td><p class='mycoin_data'>대기중</td>
                                                        <td><p class='mycoin_data '><span class='mycoin_deposit'><input type="submit" value='취소' class="btn_small2"/></td>
                                                      </tr>
                                                              <tr>
                                                        <td><p class="bl">출금</p></td>
                                                        <td>원화</td>
                                                        <td class='apply_date_td'><p>2018-09-21</p><span>19:00:01</span></td>
                                                        <td><p class='mycoin_data bl'>6,000</p></td>
                                                        <td><p class='mycoin_data'>1,000</p></td>
                                                        <td><p class='bankName'>OO은행</p></td>
                                                        <td style="overflow:hidden; text-overflow:ellipsis;">
                                                                        <p class='user_account fl'><nobr>123-456789-320-01</nobr></p>
                                                                    </td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                        <td><p class='mycoin_data'>&nbsp;</td>
                                                        <td><p class='mycoin_data'>처리완료</td>
                                                        <td><p class='mycoin_data'>&nbsp;</td>
                                                    </tr>
                                                          <tr>
                                                      <td><p class="red">입금</p></td>
                                                      <td>이더리움<br/>클래식</td>
                                                      <td class='apply_date_td'><p>2018-09-21</p><span>19:00:01</span></td>
                                                      <td><p class='mycoin_data red'>20</p></td>
                                                      <td><p class='mycoin_data'>0</p></td>
                                                      <td><p class='bankName'>&nbsp;</p></td>
                                                      <td style=" overflow:hidden; text-overflow:ellipsis;">
                                                                <p class='user_account fl'><nobr>9i57j0l5.3880rceid=ch...</nobr></p>
                                                            </td>
                                                            <td class="coin_td">
                                                              <p class='mycoin_data'><input type="button" value='상세보기' class="btn_small2"/>
                                                              <span class="temporary_address_click">ewearch&sm=top_hty&fbm=1%ie-itf8query1654848468654564=</span>
                                                              </td>
                                                      <td><p class='mycoin_data'>&nbsp;</td>
                                                      <td><p class='mycoin_data'>처리완료</td>
                                                      <td><p class='mycoin_data'>&nbsp;</td>
                                                    </tr>
                                                    <tr class="mycoin_name">
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td style=" overflow:hidden; text-overflow:ellipsis;">
                                                                        <p class='mycoin_data'><nobr></nobr></p>
                                                                    </td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                </tr>
                                                    <tr class="mycoin_name">
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td style=" overflow:hidden; text-overflow:ellipsis;">
                                                                        <p class='mycoin_data'><nobr></nobr></p>
                                                                    </td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                </tr>
                                                    <tr class="mycoin_name">
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td style=" overflow:hidden; text-overflow:ellipsis;">
                                                                        <p class='mycoin_data'><nobr></nobr></p>
                                                                    </td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                </tr>
                                                    <tr class="mycoin_name">
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td style=" overflow:hidden; text-overflow:ellipsis;">
                                                                        <p class='mycoin_data'><nobr></nobr></p>
                                                                    </td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                                    <td><p class='mycoin_data'>&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                </table>
                                                <div class="contentBottom">
                                                  <div class="paging">
                                                    <a href="#" title="prev"><img src="img/p_first.png"></a>
                                                    <a href="#" title="prev"><img src="img/p_prev.png"></a>
                                                    <a href="#" title="1page" class="selected">1</a>
                                                    <a href="#" title="2page">2</a>
                                                    <a href="#" title="3page">3</a>
                                                    <a href="#" title="4page">4</a>
                                                    <a href="#" title="5page">5</a>
                                                    <a href="#" title="next"><img src="img/p_next.png"></a>
                                                    <a href="#" title="next"><img src="img/p_end.png"></a>
                                                  </div>
                                                </div>
                                            </form>
                                          </div><!-- mywallet_tab End-->
                                      </div><!-- KRW_input_output End--><!-- 원화 입출금 끝-->
                                      <div id='bitcoin_input_output'>
                                                 <!--tab3_header-->
                                                 <div class="tab3_header">
                                                   <ul class="tabs4">
                                                       <li class="active2 input_KRW_btn" rel="input_bitcoin"><a href='#'>입금</a></li>
                                                       <li class="output_KRW_btn" rel="output_bitcoin"><a href='#'>출금</a></li>
                                                       <li class="input_output_history_btn" rel="io_history"><a href='#'>입출금내역</a></li>
                                                   </ul>
                                                 </div><!--tab3_header End-->
                                                 <!-- input_bitcoin -->
                                                 <div id='input_bitcoin' class='bitcoin_conclu_table input_bitcoin conclu_table'>
                                                     <p class='recharge_coin'>비트코인(BTC) 입금</p>
                                                     <div class="my_coin_state">
                                                         <ul class='my_coin_ul'>
                                                             <li class='my_coin_li_01'>
                                                                 <p class='my_coin_state_title'>보유금액</p>
                                                                 <p class='up_down_data my_coin_state_amount'>750<span>BTC</span></p>
                                                             </li>
                                                             <li class='my_coin_li_02'>
                                                                 <div class="">
                                                                     <p class='my_coin_state_title'>거래대기</p>
                                                                     <p class='up_down_data my_coin_state_amount'>100<span>BTC</span></p>
                                                                 </div>
                                                             </li>
                                                             <li class='my_coin_li_03'>
                                                                 <p class='my_coin_state_title'>출금가능</p>
                                                                 <p class='up_down_data my_coin_state_amount'>100<span>BTC</span></p>
                                                             </li>
                                                         </ul>
                                                     </div>
                                                     <form class="" action="#" method="post">
                                                         <!-- BTC_input_address_wrap -->
                                                         <div class="BTC_input_address_wrap">
                                                             <p>BTC 입금</p>
                                                             <span>회원님에게 할당된 아래의 주소로 비트코인을 입금할 수 있습니다.</span>
                                                             <div class="my_coin_address">
                                                                 <p class='emphasis'>나의 BTC 주소 (입금전용)</p>
                                                                 <p class='up_down_data temporary_address'>ewearch&sm=top_hty&fbm=1%ie-itf8query1654848468654564=
                                                                 </p>

                                                                 <input type="button" name="" value="복사하기" class=''>
                                                                 <img src="img/qr_code.png" alt="qr코드 주소">
                                                             </div>
                                                         </div><!-- BTC_input_address_wrap End-->

                                                     </form>
                                                         <!-- before_send_money_wrap -->
                                                         <div class="before_send_money_wrap">
                                                             <p class='before_send_money_paragraph'>입금신청 주의사항</p>
                                                             <div class="warning_notice_list">
                                                                 <p>생성된 주소로 암호화폐를 입금해 주세요. 해당 지갑주소는 입금 전용 주소입니다.</p>
                                                                 <p>외부 지갑으로부터 아래 주소로 암호화폐를 전송하시면 회원님의 전자지갑에 반영됩니다.</p>
                                                                 <p>반영 시점은 입금거래 후 10~30분 이후 자동으로 반영됩니다.</p>
                                                                 <p>지갑 주소를 반드시 확인하고 전달해 주세요. 주소를 잘못 입력해서 전송된 암호화폐는 기술적으로 입금처리가 불가능할 수 있으니
                                                                 정확한 입금 주소를 다시 한번 확인 후 입금해 주시기 바랍니다.</p>
                                                                 <p>입금확인(confirmation)에 소요되는 시간은 블록체인 네트워크의 혼잡도에 따라 영향을 받을 수 있으며
                                                                 암호화폐별로 혼잡도에 차이가 있을 수 있습니다.</p>
                                                                 <p>KRW를 처음 입금하시는 경우 3 영업일(72시간) 동안 KRW 및 암호화폐의 출금이 제한됩니다.</p>
                                                             </div>
                                                         </div><!-- before_send_money_wrap End-->
                                                 </div><!-- input_bitcoin End-->
                                                 <div id='output_bitcoin' class='bitcoin_conclu_table output_bitcoin conclu_table'>
                                                     <!-- out_put_you_can -->
                                                     <div class="out_put_you_can">
                                                         <p class='recharge_coin'>비트코인(BTC) 출금</p>
                                                         <div class="my_coin_state">
                                                             <ul class='my_coin_ul'>
                                                                 <li class='my_coin_li_01'>
                                                                     <p class='my_coin_state_title'>보유금액</p>
                                                                     <p class='up_down_data my_coin_state_amount'>750<span>BTC</span></p>
                                                                 </li>
                                                                 <li class='my_coin_li_02'>
                                                                     <div class="">
                                                                         <p class='my_coin_state_title'>거래대기</p>
                                                                         <p class='up_down_data my_coin_state_amount'>100<span>BTC</span></p>
                                                                     </div>
                                                                 </li>
                                                                 <li class='my_coin_li_03'>
                                                                     <p class='my_coin_state_title'>출금가능</p>
                                                                     <p class='up_down_data my_coin_state_amount'>100<span>BTC</span></p>
                                                                 </li>
                                                             </ul>
                                                         </div>
                                                         <form class="" action="#" method="post">
                                                             <!-- account_table_wrap -->
                                                             <div class="account_table_wrap">
                                                                 <!-- send_account -->
                                                                 <div class="send_account">
                                                                     <p>BTC 출금</p>
                                                                     <table class='left_thick_table'>
                                                                         <tbody>
                                                                             <tr>
                                                                                 <th>1회 출금한도</th>
                                                                                 <td class='emphasis'>1 BTC</td>
                                                                             </tr>
                                                                             <tr>
                                                                                 <th>나의 잔여한도</th>
                                                                                 <td>3,000 KRW</td>
                                                                             </tr>
                                                                             <tr>
                                                                                 <th>나의 비트코인 주소</th>
                                                                                 <td><span class='up_down_data temporary_address'>asdlkjlqkwasdasdeli@oasdasd1231234</span></td>
                                                                             </tr>
                                                                             <tr>
                                                                                 <th>비트코인 출금 주소</th>
                                                                                 <td>
                                                                                     <input type="text" name="" value="" placeholder="주소를 입력해주세요." required>
                                                                                 </td>
                                                                             </tr>
                                                                             <tr>
                                                                                 <th>출금 신청금액</th>
                                                                                 <td>
                                                                                     <input type="text" class='withdrawal_price' name="" value="" placeholder="0" required>
                                                                                     <input type="button" value="최대">
                                                                                     <input type="button" value="최소">
                                                                                 </td>
                                                                             </tr>
                                                                             <tr>
                                                                                 <th>출금 수수료</th>
                                                                                 <td class='emphasis'>0.0005 BTC</td>
                                                                             </tr>
                                                                             <tr>
                                                                                 <th>실제 출금금액</th>
                                                                                 <td class='reality_won'>-0.0005 BTC</td>
                                                                             </tr>
                                                                             <tr>
                                                                                 <th>보안 비밀번호</th>
                                                                                 <td>
                                                                                     <input type="password" class='user_security' name="" value="" placeholder="보안 비밀번호를 입력하세요." required maxlength="4" minlength='4'>
                                                                                 </td>
                                                                             </tr>
                                                                             <tr>
                                                                                 <th>OTP 인증번호</th>
                                                                                 <td>
                                                                                     <input type="text" class='user_otpNum' name="" value="" placeholder="OTP 번호를 입력하세요." required maxlength="6" minlength="6">
                                                                                 </td>
                                                                             </tr>
                                                                         </tbody>
                                                                     </table>
                                                                 </div><!-- send_account End-->
                                                             </div><!-- account_table_wrap End-->

                                                             <!-- before_send_money_wrap -->
                                                             <div class="before_send_money_wrap before_send_money_03">
                                                                 <p>출금신청 주의사항</p>
                                                                 <div class="checkbox_list">
                                                                     <input type="checkbox" id='number_13' class="agree_check_03">
                                                                     <label for='number_13'>전자지갑으로부터 외부 전자지갑으로 암호화폐를 출금합니다.</label>
                                                                     <input type="checkbox" id='number_14' class="agree_check_03">
                                                                     <label for='number_14'>전송 이후의 과정은 블록체인 네트워크에서 자동으로 처리됩니다.</label>
                                                                     <input type="checkbox" id='number_15' class="agree_check_03">
                                                                     <label for='number_15'>블록체인 네트워크 상에서 발생하는 전송 및 컨펌지연에 대해 CCE에서 별도의 조취를 취할 수 없습니다.</label>
                                                                     <input type="checkbox" id='number_16' class="agree_check_03">
                                                                     <label for='number_16'>위 사항 미준수 시 환급은 주말/휴일 제외 1주일 이상 걸림을 알고 있습니다.</label>
                                                                     <input type="checkbox" id='number_17' class="agree_check_03">
                                                                     <label for='number_17'>실제 전송되는 수량은 총 출금 암호화폐에서 출금수수료를 제외한 수량이 전송됩니다.</label>

                                                                     <input type="checkbox" id='number_18' class="allAgree_03">
                                                                     <label for='number_18' class='all_agree_03'>위의 출금시 주의사항에 모두 동의합니다.</label>
                                                                 </div>

                                                                 <div class="cancel_or_apply">
                                                                     <input type="reset" name="reset" value="취소" class='cancel_btn'/>
                                                                     <span class='agree_btn if_you_not_all_agree'>출금신청</span>
                                                                     <input type="submit" name="submit" value="출금신청" class='agree_btn if_you_all_agree'/>
                                                                 </div>

                                                             </div><!-- before_send_money_wrap End-->
                                                         </form>
                                                     </div><!-- out_put_you_can End-->
                                                      <!-- out_put_you_cannot -->
                                                     <div class="out_put_you_cannot">
                                                        <p class='we_are_ready'>준비중입니다</p>
                                                        <p>불편을 드려 죄송합니다.<br/>빠른 시일내에 준비하도록 하겠습니다.</p>
                                                     </div><!-- out_put_you_cannot End-->
                                                 </div><!-- output_bitcoin End-->
                                                 <div id="io_history" class='bitcoin_conclu_table mywallet_tab'>
                                                     <form class="report_form" action="#" method="post" name='report_form'>
                                                         <!-- buy_tab_content -->
                                                       <div class="table_top cf">
                                                           <div class="selectAll days fl">
                                                               <select title="전체">
                                                                   <option value="전체" selected="selected">전체</option>
                                                                   <option value="원화">원화</option>
                                                                   <option value="비트코인">비트코인</option>
                                                                   <option value="비트코인 캐시">비트코인 캐시</option>
                                                                   <option value="이더리움">이더리움</option>
                                                                   <option value="이더리움 클래식">이더리움 클래식</option>
                                                                   <option value="리플">리플</option>
                                                                   <option value="에이다">에이다</option>
                                                                   <option value="이오스">이오스</option>
                                                               </select>
                                                           </div>
                                                       <!--tab2_header-->
                                                           <div class="tab2_header fr">
                                                               <div class="days">
                                                                 <div class="fl">
                                                                   <input type="date" value="2018-07-29">
                                                                 </div>
                                                               <span>~</span>
                                                               <div class="fl">
                                                                   <input type="date" value="2018-08-29">
                                                                 </div>
                                                                 <input type="submit" name="search" value="조회" class='search_btn'>
                                                               </div>
                                                           </div>
                                                       <!--tab2_header End-->
                                                       </div>
                                                         <table class='mycoin_table' summary='코인, 요청일시, 금액(수량), 수수료, 입금은행, 계좌번호, 상세보기 버튼, 입금자명, 진행전체, 해당버튼 '>
                                                           <colgroup>
                                                               <col width=''/>
                                                               <col width=''/>
                                                               <col width=''/>
                                                               <col width=''/>
                                                               <col width=''/>
                                                               <col width=''/>
                                                               <col width=''/>
                                                               <col width=''/>
                                                               <col width=''/>
                                                               <col width=''/>
                                                               <col width=''/>
                                                           </colgroup>
                                                           <thead class='mycoin_thead_deco'>
                                                           <tr>
                                                             <th>
                                                               <select title="전체" >
                                                                   <option value="거래전체" selected="selected">전체</option>
                                                                   <option value="입금">입금</option>
                                                                   <option value="출금">출금</option>
                                                               </select>
                                                             </th>
                                                             <th>코인</th>
                                                             <th class='apply_date_th'>요청일시</th>
                                                             <th>금액(수량)</th>
                                                             <th>수수료</th>
                                                             <th>입금은행</th>
                                                             <th colspan="2" class='account_number_th'>계좌번호</th>
                                                             <th>입금자명</th>
                                                             <th>
                                                               <select title="진행전체" >
                                                                   <option value="진행전체" selected="selected">진행전체</option>
                                                                   <option value="대기중">대기중</option>
                                                                   <option value="처리완료">처리완료</option>
                                                               </select>
                                                                   </th>
                                                             <th><a href="#">&nbsp;</a></th>
                                                           </tr>
                                                         </thead>
                                                           <tbody class="mycoin_tbody_deco">
                                                             <tr>
                                                               <td><p class="red">입금</p></td>
                                                               <td>원화</td>
                                                               <td class='apply_date_td'><p>2018-09-21</p><span>19:00:01</span></td>
                                                               <td><p class='mycoin_data red'>100,000</p></td>
                                                               <td><p class='mycoin_data'>0</p></td>
                                                               <td><p class='bankName'>OO은행</p></td>
                                                               <td style="overflow:hidden; text-overflow:ellipsis;">
                                                                               <p class='user_account fl'><nobr>123-456789-320-01</nobr></p>
                                                                           </td>
                                                                           <td><p class='mycoin_data'>&nbsp;</p></td>
                                                               <td><p class='mycoin_data fr'><span class='user_name'>가나다</span>1234</td>
                                                               <td><p class='mycoin_data'>대기중</td>
                                                               <td><p class='mycoin_data '><span class='mycoin_deposit'><input type="submit" value='취소' class="btn_small2"/></td>
                                                             </tr>
                                                                     <tr>
                                                               <td><p class="bl">출금</p></td>
                                                               <td>원화</td>
                                                               <td class='apply_date_td'><p>2018-09-21</p><span>19:00:01</span></td>
                                                               <td><p class='mycoin_data bl'>6,000</p></td>
                                                               <td><p class='mycoin_data'>1,000</p></td>
                                                               <td><p class='bankName'>OO은행</p></td>
                                                               <td style="overflow:hidden; text-overflow:ellipsis;">
                                                                               <p class='user_account fl'><nobr>123-456789-320-01</nobr></p>
                                                                           </td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                               <td><p class='mycoin_data'>&nbsp;</td>
                                                               <td><p class='mycoin_data'>처리완료</td>
                                                               <td><p class='mycoin_data'>&nbsp;</td>
                                                           </tr>
                                                                 <tr>
                                                             <td><p class="red">입금</p></td>
                                                             <td>이더리움<br/>클래식</td>
                                                             <td class='apply_date_td'><p>2018-09-21</p><span>19:00:01</span></td>
                                                             <td><p class='mycoin_data red'>20</p></td>
                                                             <td><p class='mycoin_data'>0</p></td>
                                                             <td><p class='bankName'>&nbsp;</p></td>
                                                             <td style=" overflow:hidden; text-overflow:ellipsis;">
                                                                       <p class='user_account fl'><nobr>9i57j0l5.3880rceid=ch...</nobr></p>
                                                                   </td>
                                                                   <td>
                                                                     <p class='mycoin_data'>
                                                                     <input type="button" value='상세보기' class="btn_small2"/>
                                                                      <span class="temporary_address_click">ewearch&sm=top_hty&fbm=1%ie-itf8query1654848468654564=</span>
                                                                    </p>
                                                                   </td>
                                                             <td><p class='mycoin_data'>&nbsp;</td>
                                                             <td><p class='mycoin_data'>처리완료</td>
                                                             <td><p class='mycoin_data'>&nbsp;</td>
                                                           </tr>
                                                           <tr class="mycoin_name">
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td style=" overflow:hidden; text-overflow:ellipsis;">
                                                                               <p class='mycoin_data'><nobr></nobr></p>
                                                                           </td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                       </tr>
                                                           <tr class="mycoin_name">
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td style=" overflow:hidden; text-overflow:ellipsis;">
                                                                               <p class='mycoin_data'><nobr></nobr></p>
                                                                           </td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                       </tr>
                                                           <tr class="mycoin_name">
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td style=" overflow:hidden; text-overflow:ellipsis;">
                                                                               <p class='mycoin_data'><nobr></nobr></p>
                                                                           </td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                       </tr>
                                                           <tr class="mycoin_name">
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td style=" overflow:hidden; text-overflow:ellipsis;">
                                                                               <p class='mycoin_data'><nobr></nobr></p>
                                                                           </td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                           <td><p class='mycoin_data'>&nbsp;</td>
                                                                   </tr>
                                                               </tbody>
                                                       </table>
                                                       <div class="contentBottom">
                                                         <div class="paging">
                                                           <a href="#" title="prev"><img src="img/p_first.png"></a>
                                                           <a href="#" title="prev"><img src="img/p_prev.png"></a>
                                                           <a href="#" title="1page" class="selected">1</a>
                                                           <a href="#" title="2page">2</a>
                                                           <a href="#" title="3page">3</a>
                                                           <a href="#" title="4page">4</a>
                                                           <a href="#" title="5page">5</a>
                                                           <a href="#" title="next"><img src="img/p_next.png"></a>
                                                           <a href="#" title="next"><img src="img/p_end.png"></a>
                                                         </div>
                                                       </div>
                                                   </form>
                                                 </div><!-- mywallet_tab End-->
                                            </div><!-- bitcoin_input_output End--><!-- 비트코인 입출금  끝-->
                            </div><!--#tab3 입출금 End-->
<!-- 입출금 탭 끝 --><!-- 입출금 탭 끝 --><!-- 입출금 탭 끝 --><!-- 입출금 탭 끝 --><!-- 입출금 탭 끝 --><!-- 입출금 탭 끝 --><!-- 입출금 탭 끝 --><!-- 입출금 탭 끝 --><!-- 입출금 탭 끝 --><!-- 입출금 탭 끝 --><!-- 입출금 탭 끝 -->


                  </div><!--mycointab_container End-->

                </div>
                </div><!--left_mywallet End-->

              <!-- 원화거래 시작--> <!-- 원화거래 시작--> <!-- 원화거래 시작--> <!-- 원화거래 시작--> <!-- 원화거래 시작--> <!-- 원화거래 시작--> <!-- 원화거래 시작--> <!-- 원화거래 시작--> <!-- 원화거래 시작--> <!-- 원화거래 시작-->
              <!--Right_mywallet-->
              <div id="right_mywallet">

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

              </div><!--Right_mywallet End-->
              <!-- 원화거래 끝 --><!-- 원화거래 끝 --><!-- 원화거래 끝 --><!-- 원화거래 끝 --><!-- 원화거래 끝 --><!-- 원화거래 끝 --><!-- 원화거래 끝 --><!-- 원화거래 끝 --><!-- 원화거래 끝 --><!-- 원화거래 끝 --><!-- 원화거래 끝 --><!-- 원화거래 끝 -->
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

            <div id="popupbox" class='box popup copy_pop'>
                <div class="full_inner">
                    <h2>복사 완료</h2>
                    <div class="popupbox_text">
                      <p>주소가 복사되었습니다.</p>
                      <b>
                        <img src="img/icon_ex.png" alt="주의 아이콘"/>
                        주소를 붙여넣기를 하신 후,<br />
                        현재 복사 된 주소와 동일한지 다시 한번 꼭 확인해주세요.
                      </b>
                    </div>
                    <div class="btn_area">
                      <input type="button" name="" value="닫기" class="popupbt ok close_btn"/>
                    </div>
                </div>
            </div><!-- full_content End-->

            <div id="coin_withdrawal_box" class='box popup coin_withdrawal_box'>
                <div class="full_inner">
                    <form class="" action="#" method="post">
                        <h2>출금신청</h2>
                        <p><b class='check_your_money_again'><span class="withdrawal_price">20 </span> BTC</b>를</p>
                        <table class='left_thick_table'>
                            <tbody>
                                <tr>
                                    <th>나의 비트코인 주소</th>
                                    <td>
                                        <span>3BBd8dUrMTRypA4kbTXTCH7tkP6QsPHsHtaQ56p</span>
                                        <div class='plus_more_btn plus_more_btn_01'>
                                            <img src="img/plus.png" alt="자세히보기">
                                            <div class='more_coin_address_01'>3BBd8dUrMTRypA4kbTXTCH7tkP6QsPHsHtaQ56p</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>비트코인 출금 주소</th>
                                    <td>
                                        <span>233SdifjKKajsfjadsEasdj123KWQEJfsakjsadja</span>
                                        <div class='plus_more_btn plus_more_btn_02'>
                                            <img src="img/plus.png" alt="자세히보기">
                                            <div class='more_coin_address_02'>233SdifjKKajsfjadsEasdj123KWQEJfsakjsadja</div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p>현재 비트코인 지갑에서 출금하시겠습니까?</p>
                        <div class="cancel_or_apply">
                            <input type="button" name="cancel" value="취소" class='cancel_btn'>
                            <input type="button" name="submit" value="출금신청" class='agree_btn' onclick="location.href='mywallet_output_complete_bitcoin.php'">
                        </div>
                    </form>
                </div>
            </div>

            <div id="shadow"></div>
    </div>  <!-- full End-->

</body>
</html>
