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
    <link rel="stylesheet" href="css/mycoin_sub.css">
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
                            <li rel="tab3">입출금</li>
                        </ul>
                    </div><!--coin탭태두리 End-->

                    <!--mycointab_container-->
                    <div class="mycointab_container">
<!----------------------------------------------------------------------------------------------------------------------------------------------->
                            <!-- #tab1 보유코인-->
                            <div id="tab1" class="tab_content">

                            </div><!--#tab1 보유코인 End-->
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

</body>
</html>
