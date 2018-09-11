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
    <link rel="stylesheet" href="css/popup.css">
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
                  <!--left_mywallet_menu-->
                  <div id="left_mywallet_menu"><!--float:left할 콘텐츠-->

                    <div class="box mycoin_fence">
                  <!--coin탭태두리-->
                    <div class="mycoin_tab" id="mycoin_tab">
                        <ul class="tabs">
                            <li class="active" rel="tab1">보유코인</li>
                            <li rel="tab2">거래내역</li>
                            <li><a href='mywallet_input_apply_KRW.php'>입출금</a></li>
                        </ul>
                    </div><!--coin탭태두리 End-->

                    <!--mycointab_container-->
                    <div class="mycointab_container">
<!----------------------------------------------------------------------------------------------------------------------------------------------->
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
                                  </div><!-- mywallet_tab End-->                            </div><!--#tab1 보유코인 End-->
<!----------------------------------------------------------------------------------------------------------------------------------------------->
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
                                            <a href="#" title="6page" class="m_hide">6</a>
                                            <a href="#" title="7page" class="m_hide">7</a>

                                            <a href="#" title="next"><img src="img/p_next.png"></a>
                                            <a href="#" title="next"><img src="img/p_end.png"></a>
                                        </div>
                                    </div><!-- 페이징 -->


                            </div><!--#tab2 거래내역 End-->
<!---------------------------------------------------------------------------------------------------------------------------------------------->
                            <!-- #tab3 입출금-->
                            <div id="tab3" class="tab_content">

                            </div><!--#tab3 입출금 End-->

                  </div><!--mycointab_container End-->

                </div>
                </div><!--left_mywallet End-->

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
            </div><!-- exchange_content End-->
          </div><!-- content_wrap End-->

          <!-- footer_wrap -->
          <?php include "footer.php";?>
          <!-- footer_wrap End-->

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
