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
    <link rel="stylesheet" href="css/exchange.css">
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

                  <div class="box coin_select">
                    <!-- 코인선택 영역 -->
                    <div class="coinSelect_area">
                        <dl class="coinSelect">
                            <dt><a href="#" title="비트코인"><img src="img/bitcoin.png" alt="비트코인"/></a><span>비트코인 BTC/KRW</span></dt>
                            <dd><a href="#" title="비트코인"><img src="img/bitcoin.png" alt="비트코인"/></a><span>비트코인 BTC/KRW</span></dd>
                            <dd><a href="#" title="비트코인캐시"><img src="img/bitcoincash.png" alt="비트코인캐시"/></a><span>비트코인캐시 BCH/KRW</span></dd>
                            <dd><a href="#" title="이더리움"><img src="img/eth.png" alt="이더리움"/></a><span>이더리움 ETH/KRW</span></dd>
                            <dd><a href="#" title="이더리움클래식"><img src="img/etc.png" alt="이더리움클래식"/></a><span>이더리움클래식 ETC/KRW</span></dd>
                            <dd><a href="#" title="이오스"><img src="img/eos.png" alt="이오스"/></a><span>이오스 EOS/KRW</span></dd>
                            <dd><a href="#" title="리플"><img src="img/reaple.png" alt="리플"/></a><span>리플 XRP/KRW</span></dd>
                            <dd><a href="#" title="에이다"><img src="img/ada.png" alt="에이다"/></a><span>에이다 ADA/KRW</span></dd>
                        </dl>
                    </div>
                  </div>



            <!--coin_money-->
              <div class="box coin_money">

                <div class="coin_money_inner">
                  <div class="img_area">
                      <img src="img/bitcoincash_big.png" alt="비트코인캐시아이콘" class="bitcoin_icon">
                  </div>
                  <ul>
                    <li>
                        <strong><img src="img/usa-31-cir.png" alt="국기">비트코인캐시</strong>
                        <b class="coin_word">BCH/KRW</b>
                    </li>
                    <li>
                      <span class="price">481,400<b class="won">KRW</b>
                      </span>
                    </li>
                    <li class="coin_prepare">
                      <strong>전일대비</strong>
                      <span class="prepare"><b>-0.11</b>%</span>
                      <span class="updownarrow"><img src="img/arrow_down_blue.png" class="ud" alt='하락'>4,280</span>
                    </li>
                  </ul>
                  <span class="question">&#63;</span>
                </div>

                <ul class="coin_money_prepare">

                  <li class="hl_price">
                    <span class="hl_title">고가</span>
                    <p><span class="price_up">481,400</span><b class="won">KRW</b></p>
                  </li>
                  <li class="hl_price">
                    <span class="hl_title">저가</span>
                    <p><span class="price_down">2,82,000</span><b class="won">KRW</b></p>
                  </li>

                </ul>

                <ul class="coin_money_volume">

                  <li class="hl_volume">
                    <span class="hl_title">거래량<small>(24H)</small></span>
                      <p><span class="volume">1,930.800</span><b class="unit BTC">BCH</b></p>
                  </li>
                  <li class="hl_volume">
                    <span class="hl_title">거래대금<small>(24H)</small></span>
                      <p><span class="volume">9,560,000</span><b class="unit won">KRW</b></p>
                  </li>

                </ul>

              </div><!--coin_money End-->


<!-- 코인상세보기 시작 ------------------------------------------------------------------------------------------------------------------------------->
<!-- 코인상세보기 시작 ------------------------------------------------------------------------------------------------------------------------------->
<!-- 코인상세보기 시작 ------------------------------------------------------------------------------------------------------------------------------->

              <!--coin_money_detail / coin_money_bitcoin-->

              <div class="box coin_money_detail coin_money_bitcoin">
                <div class="coin_name"><h4>Bitcoin</h4></div>
              <div id="detail_all">
                <p>(정보기준일:2018.08.28)</p>
                <!-- left_thick_table -->
                <table class='left_thick_table coinInfo_table'>
                  <thead>

                  </thead>
                    <tbody>
                        <tr>
                            <th>최초발행</th>
                            <td>2009년 1월</td>
                        </tr>
                        <tr>
                            <th>코인/토큰</th>
                            <td>코인</td>
                        </tr>
                        <tr>
                            <th>시총순위</th>
                            <td>1위</td>
                        </tr>
                        <tr>
                            <th>시가총액</th>
                            <td>48.8조원(18.08.27 기준)</td>
                        </tr>
                        <tr>
                            <th>블록생성기</th>
                            <td>10분</td>
                        </tr>
                        <tr>
                            <th>유통량</th>
                            <td>각 코인정보기재</td>
                        </tr>
                        <tr>
                            <th>총발행한도</th>
                            <td>21,000,000</td>
                        </tr>
                        <tr>
                            <th>채굴봉상량</th>
                            <td>각 코인 정보 기재</td>
                        </tr>
                        <tr>
                            <th>국가</th>
                            <td>각 코인 정보 기재</td>
                        </tr>
                        <tr>
                            <th>공식홈페이지</th>
                            <td><a href="http://www.bitcoin.com" target="_blank">http://www.bitcoin.com</a></td>
                        </tr>
                    </tbody>
                </table><!-- left_thick_table End-->
                  <span><a href="coin_info_bitcoin.php">상세보기</a></span>
              </div>



            </div><!--coin_money_detail / coin_money_bitcoinCash End-->

            <!--coin_money_detail / coin_money_bitcoinCash-->

            <div class="box coin_money_detail coin_money_bitcoinCash">
              <div class="coin_name"><h4>BitcoinCash</h4></div>
            <div id="detail_all">
              <p>(정보기준일:2018.08.28)</p>
              <!-- left_thick_table -->
              <table class='left_thick_table coinInfo_table'>
                <thead>

                </thead>
                  <tbody>
                      <tr>
                          <th>최초발행</th>
                          <td>2017년 8월</td>
                      </tr>
                      <tr>
                          <th>코인/토큰</th>
                          <td>코인</td>
                      </tr>
                      <tr>
                          <th>시총순위</th>
                          <td>4위</td>
                      </tr>
                      <tr>
                          <th>시가총액</th>
                          <td>8.6조원(18.10.01 기준)</td>
                      </tr>
                      <tr>
                          <th>블록생성기</th>
                          <td>10분</td>
                      </tr>
                      <tr>
                          <th>유통량</th>
                          <td>17,057,825</td>
                      </tr>
                      <tr>
                          <th>총발행한도</th>
                          <td>21,000,000</td>
                      </tr>
                      <tr>
                          <th>채굴봉상량</th>
                          <td>6 BTC</td>
                      </tr>
                      <tr>
                          <th>국가</th>
                          <td>일본</td>
                      </tr>
                      <tr>
                          <th>공식홈페이지</th>
                          <td><a href="http://www.bitcoincash.org/ko/" target="_blank">http://www.bitcoincash.org/ko/</a></td>
                      </tr>
                  </tbody>
              </table><!-- left_thick_table End-->
                <span><a href="coin_info_bitcoincash.php">상세보기</a></span>
            </div>



          </div><!--coin_money_detail / coin_money_bitcoinCash End-->

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
                        <td><a href="http://www.ethurium.org" target="_blank">http://www.ethurium.org</a></td>
                    </tr>
                </tbody>
            </table><!-- left_thick_table End-->
              <span><a href="coin_info_ethurium.php">상세보기</a></span>
          </div>



        </div><!--coin_money_detail / coin_money_ethurium End-->

        <!--coin_money_detail / coin_money_ethuriumClassic-->

        <div class="box coin_money_detail coin_money_ethuriumClassic">
          <div class="coin_name"><h4>Ethurium Classic</h4></div>
        <div id="detail_all">
          <p>(정보기준일:2018.08.28)</p>
          <!-- left_thick_table -->
          <table class='left_thick_table coinInfo_table'>
            <thead>

            </thead>
              <tbody>
                  <tr>
                      <th>최초발행</th>
                      <td>2016년 7월</td>
                  </tr>
                  <tr>
                      <th>코인/토큰</th>
                      <td>코인</td>
                  </tr>
                  <tr>
                      <th>시총순위</th>
                      <td>15위</td>
                  </tr>
                  <tr>
                      <th>시가총액</th>
                      <td>1.3조원(18.08.27 기준)</td>
                  </tr>
                  <tr>
                      <th>블록생성기</th>
                      <td>15초</td>
                  </tr>
                  <tr>
                      <th>유통량</th>
                      <td>101,000,000</td>
                  </tr>
                  <tr>
                      <th>총발행한도</th>
                      <td>21,000,000</td>
                  </tr>
                  <tr>
                      <th>채굴봉상량</th>
                      <td>현재 약 5 ETC</td>
                  </tr>
                  <tr>
                      <th>국가</th>
                      <td>스위스</td>
                  </tr>
                  <tr>
                      <th>공식홈페이지</th>
                      <td><a href="https://ethereumclassic.github.io/" target="_blank">https://ethereumclassic.github.io/</a></td>
                  </tr>
              </tbody>
          </table><!-- left_thick_table End-->
            <span><a href="coin_info_ethuriumclassic.php">상세보기</a></span>
        </div>



      </div><!--coin_money_detail / coin_money_ethuriumClassic End-->

      <!--coin_money_detail / coin_money_eos-->

      <div class="box coin_money_detail coin_money_eos">
        <div class="coin_name"><h4>Eos</h4></div>
      <div id="detail_all">
        <p>(정보기준일:2018.08.28)</p>
        <!-- left_thick_table -->
        <table class='left_thick_table coinInfo_table'>
          <thead>

          </thead>
            <tbody>
                <tr>
                    <th>최초발행</th>
                    <td>2017년 6월</td>
                </tr>
                <tr>
                    <th>코인/토큰</th>
                    <td>코인</td>
                </tr>
                <tr>
                    <th>시총순위</th>
                    <td>5위</td>
                </tr>
                <tr>
                    <th>시가총액</th>
                    <td>5.8조원(18.08.27 기준)</td>
                </tr>
                <tr>
                    <th>블록생성기</th>
                    <td>10초</td>
                </tr>
                <tr>
                    <th>유통량</th>
                    <td>101,000,000</td>
                </tr>
                <tr>
                    <th>총발행한도</th>
                    <td>1,000,000,000</td>
                </tr>
                <tr>
                    <th>채굴봉상량</th>
                    <td>12.5 EOS</td>
                </tr>
                <tr>
                    <th>국가</th>
                    <td>미국/중국</td>
                </tr>
                <tr>
                    <th>공식홈페이지</th>
                    <td><a href="https://eos.io/" target="_blank">https://eos.io/</a></td>
                </tr>
            </tbody>
        </table><!-- left_thick_table End-->
          <span><a href="coin_info_eos.php">상세보기</a></span>
      </div>



    </div><!--coin_money_detail / coin_money_eos End-->


    <!--coin_money_detail / coin_money_ripple-->

    <div class="box coin_money_detail coin_money_ripple">
      <div class="coin_name"><h4>Ripple</h4></div>
    <div id="detail_all">
      <p>(정보기준일:2018.08.28)</p>
      <!-- left_thick_table -->
      <table class='left_thick_table coinInfo_table'>
        <thead>

        </thead>
          <tbody>
              <tr>
                  <th>최초발행</th>
                  <td>2013년 4월</td>
              </tr>
              <tr>
                  <th>코인/토큰</th>
                  <td>코인</td>
              </tr>
              <tr>
                  <th>시총순위</th>
                  <td>3위</td>
              </tr>
              <tr>
                  <th>시가총액</th>
                  <td>26.3조원(18.08.27 기준)</td>
              </tr>
              <tr>
                  <th>블록생성기</th>
                  <td>2분</td>
              </tr>
              <tr>
                  <th>유통량</th>
                  <td>39,095,000</td>
              </tr>
              <tr>
                  <th>총발행한도</th>
                  <td>100,000,000</td>
              </tr>
              <tr>
                  <th>채굴봉상량</th>
                  <td>-</td>
              </tr>
              <tr>
                  <th>국가</th>
                  <td>-</td>
              </tr>
              <tr>
                  <th>공식홈페이지</th>
                  <td><a href="https://ripple.com" target="_blank">https://ripple.com</a></td>
              </tr>
          </tbody>
      </table><!-- left_thick_table End-->
        <span><a href="coin_info_ripple.php">상세보기</a></span>
    </div>



  </div><!--coin_money_detail / coin_money_ripple End-->

  <!--coin_money_detail / coin_money_ada-->

  <div class="box coin_money_detail coin_money_ada">
    <div class="coin_name"><h4>Ada</h4></div>
  <div id="detail_all">
    <p>(정보기준일:2018.08.28)</p>
    <!-- left_thick_table -->
    <table class='left_thick_table coinInfo_table'>
      <thead>

      </thead>
        <tbody>
            <tr>
                <th>최초발행</th>
                <td>2017년 10월</td>
            </tr>
            <tr>
                <th>코인/토큰</th>
                <td>코인</td>
            </tr>
            <tr>
                <th>시총순위</th>
                <td>10위</td>
            </tr>
            <tr>
                <th>시가총액</th>
                <td>-</td>
            </tr>
            <tr>
                <th>블록생성기</th>
                <td>-</td>
            </tr>
            <tr>
                <th>유통량</th>
                <td>-</td>
            </tr>
            <tr>
                <th>총발행한도</th>
                <td>45,000,000,000</td>
            </tr>
            <tr>
                <th>채굴봉상량</th>
                <td>-</td>
            </tr>
            <tr>
                <th>국가</th>
                <td>-</td>
            </tr>
            <tr>
                <th>공식홈페이지</th>
                <td><a href="https://www.cardano.org/en/home/" target="_blank">https://www.cardano.org/en/home/</a></td>
            </tr>
        </tbody>
    </table><!-- left_thick_table End-->
      <span><a href="coin_info_ada.php">상세보기</a></span>
  </div>



</div><!--coin_money_detail / coin_money_ada End-->

<!-- 코인상세보기 끝 ------------------------------------------------------------------------------------------------------------------------------->
<!-- 코인상세보기 끝 ------------------------------------------------------------------------------------------------------------------------------->
<!-- 코인상세보기 끝 ------------------------------------------------------------------------------------------------------------------------------->


              <div class="box" id='deal_orgin_transaction'>
                  <h3 class='exchange_h3'>원화거래</h3>
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
                        <tr>
                            <td>
                                <p class="kor_name">비트코인</p>
                                <p style='display:none;' class="eng_name">Bitcoin</p>
                                <span class='unit'>BTC/KRW</span>
                            </td>
                            <td><span class='up_down_data money_up'>7,500,000</span></td>
                            <td><span class='up_down_data money_up'>+1.20%</span></td>
                            <td><span class='up_down_data'>44,230,000</span></td>
                        </tr>
                        <tr>
                            <td class='coin_kor'>
                                <p class="kor_name">비트코인캐시</p>
                                <p style='display:none;' class="eng_name">Bitcoin Cash</p>
                                <span class='unit'>BCH/KRW</span>
                            </td>
                            <td><span class='up_down_data money_up'>481,400</span></td>
                            <td><span class='up_down_data money_up'>+0.35%</span></td>
                            <td><span class='up_down_data'>21,300,770</span></td>
                        </tr>
                        <tr>
                            <td class='coin_kor'>
                                <p class="kor_name">이더리움</p>
                                <p style='display:none;' class="eng_name">Ethereum</p>
                                <span class='unit'>ETH/KRW</span>
                            </td>
                            <td><span class='up_down_data money_up'>700,552</span></td>
                            <td><span class='up_down_data money_up'>+2.11%</span></td>
                            <td><span class='up_down_data'>830,028</span></td>
                        </tr>
                        <tr>
                            <td class='coin_kor'>
                                <p class="kor_name">이더리움클래식</p>
                                <p style='display:none;' class="eng_name">Ethereum Classic</p>
                                <span class='unit'>ETC/KRW</span>
                            </td>
                            <td><span class='up_down_data money_nochange'>102,530</span></td>
                            <td><span class='up_down_data'>+4.22%</span></td>
                            <td><span class='up_down_data'>3240,000</span></td>
                        </tr>
                        <tr>
                            <td class='coin_kor'>
                                <p class="kor_name">리플</p>
                                <p style='display:none;' class="eng_name">Ripple</p>
                                <span class='unit'>XRP/KRW</span>
                            </td>
                            <td><span class='up_down_data money_down'>382,097</span></td>
                            <td><span class='up_down_data money_down'>-4.10%</span></td>
                            <td><span class='up_down_data'>110,033</span></td>
                        </tr>
                        <tr>
                            <td class='coin_kor'>
                                <p class="kor_name">에이다</p>
                                <p style='display:none;' class="eng_name">Ada</p>
                                <span class='unit'>ADA/KRW</span>
                            </td>
                            <td><span class='up_down_data money_down'>321</span></td>
                            <td><span class='up_down_data money_down'>-1.20%</span></td>
                            <td><span class='up_down_data'>700,000</span></td>
                        </tr>
                        <tr>
                            <td class='coin_kor'>
                                <p class="kor_name">이오스</p>
                                <p style='display:none;' class="eng_name">EOS</p>
                                <span class='unit'>EOS/KRW</span>
                            </td>
                            <td><span class='up_down_data money_down'>621,024</span></td>
                            <td><span class='up_down_data money_down'>-8.20%</span></td>
                            <td><span class='up_down_data'>700,000</span></td>
                        </tr>
                    </tbody>
                  </table>
              </div><!-- con_410 End-->

            </div><!--left_coin_menu End-->


          <!--right_all_menu-->
          <div id="right_all_menu">
            <!--right_coin_menu1-->
            <div id="right_coin_menu1">
              <!--chart_graf-->
              <div class="box chart_graf">


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
                     <td class="orderbg1 upprice">481,400</td>
                     <td class="orderbg1 upprice">+0.45%</td>
                     <td>전일가격</td>
                     <td class="center">7,510,000</td>
                   </tr>

                   <tr>
                     <td class="mado_right mado2"><div></div>0.100</td>
                     <td class="orderbg1 upprice">481,400</td>
                     <td class="orderbg1 upprice">+0.45%</td>
                     <td rowspan="2">고가</td>

                     <td rowspan="2" class="high upprice">7,624,000 <p>(+3.58%)</p></td>

                   </tr>

                   <tr>
                     <td class="mado_right mado3"><div></div>1.001</td>
                     <td class="orderbg1 upprice">481,400</td>
                     <td class="orderbg1 upprice">+0.45%</td>

                   </tr>

                   <tr>
                     <td class="mado_right mado4"><div></div>0.024</td>
                     <td class="orderbg1 upprice">481,400</td>
                     <td class="orderbg1 upprice">+3.58%</td>
                     <td rowspan="2">저가</td>

                     <td rowspan="2" class="low downprice">520,000 <p>(-2.01%)</p></td>



                   </tr>

                   <tr>
                     <td class="mado_right mado5"><div></div>0.267</td>
                     <td class="orderbg1">481,400</td>
                     <td class="orderbg1">0%</td>

                   </tr>

                   <tr>
                     <td class="mado_right mado6"><div></div>0.346</td>
                     <td class="orderbg1">481,400</td>
                     <td class="orderbg1">0%</td>
                     <td colspan="2" rowspan="5"></td>

                   </tr>

                   <tr>
                     <td class="mado_right mado7"><div></div>1.000</td>
                     <td class="orderbg1">481,400</td>
                     <td class="orderbg1">0%</td>

                   </tr>

                   <tr>
                     <td class="mado_right mado8"><div></div>0.874</td>
                     <td class="orderbg1 downprice">481,400</td>
                     <td class="orderbg1 downprice">1.04%</td>

                   </tr>

                   <tr>
                     <td class="mado_right mado9"><div></div>0.108</td>
                     <td class="orderbg1 downprice">481,400</td>
                     <td class="orderbg1 downprice">-1.04%</td>

                   </tr>

                   <tr>
                     <td class="mado_right mado10"><div></div>0.108</td>
                     <td class="orderbg1 downprice">481,400</td>
                     <td class="orderbg1 downprice">-0.21%</td>

                   </tr>

                   <tr>
                     <td rowspan="10"></td>
                     <td class="orderbg2 upprice">493,200</td>
                     <td class="orderbg2">+3.58%</td>
                     <td colspan="2" class="masu_left masu1 upprice"><div></div>0.100</td>

                   </tr>

                   <tr>

                     <td class="orderbg2 upprice">493,200</td>
                     <td class="orderbg2">+0.27%</td>
                     <td colspan="2" class="masu_left masu2 upprice"><div></div>0.100</td>

                   </tr>

                   <tr>

                     <td class="orderbg2 upprice">493,200</td>
                     <td class="orderbg2">+1.01%</td>
                     <td colspan="2" class="masu_left masu3 upprice"><div></div>1.001</td>

                   </tr>

                   <tr>

                     <td class="orderbg2 upprice">493,250</td>
                     <td class="orderbg2">+2.98%</td>
                     <td colspan="2" class="masu_left masu4 upprice"><div></div>0.024</td>

                   </tr>

                   <tr>

                     <td class="orderbg2">493,270</td>
                     <td class="orderbg2">+2.98%</td>
                     <td colspan="2" class="masu_left masu5"><div></div>0.267</td>

                   </tr>

                   <tr>

                     <td class="orderbg2">493,270</td>
                     <td class="orderbg2">+2.98%</td>
                     <td colspan="2" class="masu_left masu6"><div></div>0.346</td>

                   </tr>

                   <tr>

                     <td class="orderbg2">493,270</td>
                     <td class="orderbg2">+3.58%</td>
                     <td colspan="2" class="masu_left masu7"><div></div>1.000</td>

                   </tr>

                   <tr>

                     <td class="orderbg2 downprice">493,270</td>
                     <td class="orderbg2">-0.21%</td>
                     <td colspan="2" class="masu_left masu8 downprice"><div></div>0.874</td>

                   </tr>

                   <tr>

                     <td class="orderbg2 downprice">493,270</td>
                     <td class="orderbg2">-0.10%</td>
                     <td colspan="2" class="masu_left masu9 downprice"><div></div>0.108</td>

                   </tr>

                   <tr>

                     <td class="orderbg2 downprice">493,270</td>
                     <td class="orderbg2">-0.11%</td>
                     <td colspan="2" class="masu_left masu10 downprice"><div></div>0.108</td>

                   </tr>

                   <tr>

                     <td class="mado_right">493,300</td>
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
                                  <input type='text' class='buy_price' maxlength="200" value=''/>
                                  <a href="#" class='minus_btn'>-</a>
                                  <a href="#" class='plus_btn'>+</a>
                              </dd>
                          </div>
                          <div class="buy_tab_content_row">
                              <dt>매수수량(BTC)</dt>
                              <dd>
                                  <input type='text' class='buy_amount' maxlength="200" value=''/>
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
                          <span class='sub_text minimum_order_price'>최소주문금액 : 2000 KRW</span>
                          <span class='sub_text charge'>수수료 (부가세 포함) : 0.12%</span>
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
                                  <span>BTC</span>
                              </dd>
                          </div>
                          <div class="sell_tab_content_row">
                              <dt>매도가격(KRW)</dt>
                              <dd>
                                  <input type='text' class='sell_price' maxlength="200" value=''/>
                                  <a href="#" class='minus_btn'>-</a>
                                  <a href="#" class='plus_btn'>+</a>
                              </dd>
                          </div>
                          <div class="sell_tab_content_row">
                              <dt>매도수량(BTC)</dt>
                              <dd>
                                  <input type='text' class='sell_amount' maxlength="200" value=''/>
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
                          <span class='sub_text minimum_order_price'>최소주문금액 : 2000 KRW</span>
                          <span class='sub_text charge'>수수료 (부가세 포함) : 0.12%</span>
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

    <div id="full">
            <!-- full_content -->
            <div id="popupbox" class='box popup masu_fail'>
                <div class="full_inner">
                    <h2>매수주문 실패</h2>
                    <div class="popupbox_text">


                      <p>주문가능 금액이 부족합니다.</p>
                    </div>
                    <div class="btn_area">
                      <input type="button" name="submit" value="확인" class="popupbt ok">
                    </div>
                </div>
            </div><!-- full_content End-->
            <div id="shadow"></div>
    </div>  <!-- full End-->


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


                  <div class="box coin_select">
                    <!-- 코인선택 영역 -->
                    <div class="coinSelect_area">
                        <dl class="coinSelect">
                            <dt><a href="#" title="비트코인"><img src="img/bitcoin.png" alt="비트코인"/></a><span>비트코인 BTC/KRW</span></dt>
                            <dd><a href="#" title="비트코인"><img src="img/bitcoin.png" alt="비트코인"/></a><span>비트코인 BTC/KRW</span></dd>
                            <dd><a href="#" title="비트코인캐시"><img src="img/bitcoincash.png" alt="비트코인캐시"/></a><span>비트코인캐시 BCH/KRW</span></dd>
                            <dd><a href="#" title="이더리움"><img src="img/eth.png" alt="이더리움"/></a><span>이더리움 ETH/KRW</span></dd>
                            <dd><a href="#" title="이더리움클래식"><img src="img/etc.png" alt="이더리움클래식"/></a><span>이더리움클래식 ETC/KRW</span></dd>
                            <dd><a href="#" title="이오스"><img src="img/eos.png" alt="이오스"/></a><span>이오스 EOS/KRW</span></dd>
                            <dd><a href="#" title="리플"><img src="img/reaple.png" alt="리플"/></a><span>리플 XRP/KRW</span></dd>
                            <dd><a href="#" title="에이다"><img src="img/ada.png" alt="에이다"/></a><span>에이다 ADA/KRW</span></dd>
                        </dl>
                    </div>
                  </div>



            <!--coin_money-->
              <div class="box coin_money">

                <div class="coin_money_inner">
                  <div class="img_area">
                      <img src="img/bitcoincash_big.png" alt="비트코인캐시아이콘" class="bitcoin_icon">
                  </div>
                  <ul>
                    <li>
                        <strong>비트코인캐시</strong>
                        <b class="coin_word">BCH/KRW</b>
                    </li>
                    <li>
                      <span class="price">481,400<b class="won">KRW</b>
                      </span>
                    </li>
                    <li class="coin_prepare">
                      <strong>전일대비</strong>
                      <span class="prepare"><b>-0.11</b>%</span>
                      <span class="updownarrow"><img src="img/arrow_down_blue.png" class="ud" alt='하락'>4,280</span>
                    </li>
                  </ul>
                  <span class="question">&#63;</span>
                </div>

                <ul class="coin_money_prepare">

                  <li class="hl_price">
                    <span class="hl_title">고가</span>
                    <p><span class="price_up">481,400</span><b class="won">KRW</b></p>
                  </li>
                  <li class="hl_price">
                    <span class="hl_title">저가</span>
                    <p><span class="price_down">2,82,000</span><b class="won">KRW</b></p>
                  </li>

                </ul>

                <ul class="coin_money_volume">

                  <li class="hl_volume">
                    <span class="hl_title">거래량<small>(24H)</small></span>
                      <p><span class="volume">1,930.800</span><b class="unit BTC">BCH</b></p>
                  </li>
                  <li class="hl_volume">
                    <span class="hl_title">거래대금<small>(24H)</small></span>
                      <p><span class="volume">9,560,000</span><b class="unit won">KRW</b></p>
                  </li>

                </ul>

              </div><!--coin_money End-->


<!-- 코인상세보기 시작 ------------------------------------------------------------------------------------------------------------------------------->
<!-- 코인상세보기 시작 ------------------------------------------------------------------------------------------------------------------------------->
<!-- 코인상세보기 시작 ------------------------------------------------------------------------------------------------------------------------------->

              <!--coin_money_detail / coin_money_bitcoin-->

              <div class="box coin_money_detail coin_money_bitcoin">
                <div class="coin_name"><h4>Bitcoin</h4></div>
              <div id="detail_all">
                <p>(정보기준일:2018.08.28)</p>
                <!-- left_thick_table -->
                <table class='left_thick_table coinInfo_table'>
                  <thead>

                  </thead>
                    <tbody>
                        <tr>
                            <th>최초발행</th>
                            <td>2009년 1월</td>
                        </tr>
                        <tr>
                            <th>코인/토큰</th>
                            <td>코인</td>
                        </tr>
                        <tr>
                            <th>시총순위</th>
                            <td>1위</td>
                        </tr>
                        <tr>
                            <th>시가총액</th>
                            <td>48.8조원(18.08.27 기준)</td>
                        </tr>
                        <tr>
                            <th>블록생성기</th>
                            <td>10분</td>
                        </tr>
                        <tr>
                            <th>유통량</th>
                            <td>각 코인정보기재</td>
                        </tr>
                        <tr>
                            <th>총발행한도</th>
                            <td>21,000,000</td>
                        </tr>
                        <tr>
                            <th>채굴봉상량</th>
                            <td>각 코인 정보 기재</td>
                        </tr>
                        <tr>
                            <th>국가</th>
                            <td>각 코인 정보 기재</td>
                        </tr>
                        <tr>
                            <th>공식홈페이지</th>
                            <td><a href="http://www.bitcoin.com" target="_blank">http://www.bitcoin.com</a></td>
                        </tr>
                    </tbody>
                </table><!-- left_thick_table End-->
                  <span><a href="coin_info_bitcoin.php">상세보기</a></span>
              </div>



            </div><!--coin_money_detail / coin_money_bitcoinCash End-->

            <!--coin_money_detail / coin_money_bitcoinCash-->

            <div class="box coin_money_detail coin_money_bitcoinCash">
              <div class="coin_name"><h4>BitcoinCash</h4></div>
            <div id="detail_all">
              <p>(정보기준일:2018.08.28)</p>
              <!-- left_thick_table -->
              <table class='left_thick_table coinInfo_table'>
                <thead>

                </thead>
                  <tbody>
                      <tr>
                          <th>최초발행</th>
                          <td>2017년 8월</td>
                      </tr>
                      <tr>
                          <th>코인/토큰</th>
                          <td>코인</td>
                      </tr>
                      <tr>
                          <th>시총순위</th>
                          <td>4위</td>
                      </tr>
                      <tr>
                          <th>시가총액</th>
                          <td>8.6조원(18.10.01 기준)</td>
                      </tr>
                      <tr>
                          <th>블록생성기</th>
                          <td>10분</td>
                      </tr>
                      <tr>
                          <th>유통량</th>
                          <td>17,057,825</td>
                      </tr>
                      <tr>
                          <th>총발행한도</th>
                          <td>21,000,000</td>
                      </tr>
                      <tr>
                          <th>채굴봉상량</th>
                          <td>6 BTC</td>
                      </tr>
                      <tr>
                          <th>국가</th>
                          <td>일본</td>
                      </tr>
                      <tr>
                          <th>공식홈페이지</th>
                          <td><a href="http://www.bitcoincash.org/ko/" target="_blank">http://www.bitcoincash.org/ko/</a></td>
                      </tr>
                  </tbody>
              </table><!-- left_thick_table End-->
                <span><a href="coin_info_bitcoincash.php">상세보기</a></span>
            </div>



          </div><!--coin_money_detail / coin_money_bitcoinCash End-->

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
                        <td><a href="http://www.ethurium.org" target="_blank">http://www.ethurium.org</a></td>
                    </tr>
                </tbody>
            </table><!-- left_thick_table End-->
              <span><a href="coin_info_ethurium.php">상세보기</a></span>
          </div>



        </div><!--coin_money_detail / coin_money_ethurium End-->

        <!--coin_money_detail / coin_money_ethuriumClassic-->

        <div class="box coin_money_detail coin_money_ethuriumClassic">
          <div class="coin_name"><h4>Ethurium Classic</h4></div>
        <div id="detail_all">
          <p>(정보기준일:2018.08.28)</p>
          <!-- left_thick_table -->
          <table class='left_thick_table coinInfo_table'>
            <thead>

            </thead>
              <tbody>
                  <tr>
                      <th>최초발행</th>
                      <td>2016년 7월</td>
                  </tr>
                  <tr>
                      <th>코인/토큰</th>
                      <td>코인</td>
                  </tr>
                  <tr>
                      <th>시총순위</th>
                      <td>15위</td>
                  </tr>
                  <tr>
                      <th>시가총액</th>
                      <td>1.3조원(18.08.27 기준)</td>
                  </tr>
                  <tr>
                      <th>블록생성기</th>
                      <td>15초</td>
                  </tr>
                  <tr>
                      <th>유통량</th>
                      <td>101,000,000</td>
                  </tr>
                  <tr>
                      <th>총발행한도</th>
                      <td>21,000,000</td>
                  </tr>
                  <tr>
                      <th>채굴봉상량</th>
                      <td>현재 약 5 ETC</td>
                  </tr>
                  <tr>
                      <th>국가</th>
                      <td>스위스</td>
                  </tr>
                  <tr>
                      <th>공식홈페이지</th>
                      <td><a href="https://ethereumclassic.github.io/" target="_blank">https://ethereumclassic.github.io/</a></td>
                  </tr>
              </tbody>
          </table><!-- left_thick_table End-->
            <span><a href="coin_info_ethuriumclassic.php">상세보기</a></span>
        </div>



      </div><!--coin_money_detail / coin_money_ethuriumClassic End-->

      <!--coin_money_detail / coin_money_eos-->

      <div class="box coin_money_detail coin_money_eos">
        <div class="coin_name"><h4>Eos</h4></div>
      <div id="detail_all">
        <p>(정보기준일:2018.08.28)</p>
        <!-- left_thick_table -->
        <table class='left_thick_table coinInfo_table'>
          <thead>

          </thead>
            <tbody>
                <tr>
                    <th>최초발행</th>
                    <td>2017년 6월</td>
                </tr>
                <tr>
                    <th>코인/토큰</th>
                    <td>코인</td>
                </tr>
                <tr>
                    <th>시총순위</th>
                    <td>5위</td>
                </tr>
                <tr>
                    <th>시가총액</th>
                    <td>5.8조원(18.08.27 기준)</td>
                </tr>
                <tr>
                    <th>블록생성기</th>
                    <td>10초</td>
                </tr>
                <tr>
                    <th>유통량</th>
                    <td>101,000,000</td>
                </tr>
                <tr>
                    <th>총발행한도</th>
                    <td>1,000,000,000</td>
                </tr>
                <tr>
                    <th>채굴봉상량</th>
                    <td>12.5 EOS</td>
                </tr>
                <tr>
                    <th>국가</th>
                    <td>미국/중국</td>
                </tr>
                <tr>
                    <th>공식홈페이지</th>
                    <td><a href="https://eos.io/" target="_blank">https://eos.io/</a></td>
                </tr>
            </tbody>
        </table><!-- left_thick_table End-->
          <span><a href="coin_info_eos.php">상세보기</a></span>
      </div>



    </div><!--coin_money_detail / coin_money_eos End-->


    <!--coin_money_detail / coin_money_ripple-->

    <div class="box coin_money_detail coin_money_ripple">
      <div class="coin_name"><h4>Ripple</h4></div>
    <div id="detail_all">
      <p>(정보기준일:2018.08.28)</p>
      <!-- left_thick_table -->
      <table class='left_thick_table coinInfo_table'>
        <thead>

        </thead>
          <tbody>
              <tr>
                  <th>최초발행</th>
                  <td>2013년 4월</td>
              </tr>
              <tr>
                  <th>코인/토큰</th>
                  <td>코인</td>
              </tr>
              <tr>
                  <th>시총순위</th>
                  <td>3위</td>
              </tr>
              <tr>
                  <th>시가총액</th>
                  <td>26.3조원(18.08.27 기준)</td>
              </tr>
              <tr>
                  <th>블록생성기</th>
                  <td>2분</td>
              </tr>
              <tr>
                  <th>유통량</th>
                  <td>39,095,000</td>
              </tr>
              <tr>
                  <th>총발행한도</th>
                  <td>100,000,000</td>
              </tr>
              <tr>
                  <th>채굴봉상량</th>
                  <td>-</td>
              </tr>
              <tr>
                  <th>국가</th>
                  <td>-</td>
              </tr>
              <tr>
                  <th>공식홈페이지</th>
                  <td><a href="https://ripple.com" target="_blank">https://ripple.com</a></td>
              </tr>
          </tbody>
      </table><!-- left_thick_table End-->
        <span><a href="coin_info_ripple.php">상세보기</a></span>
    </div>



  </div><!--coin_money_detail / coin_money_ripple End-->

  <!--coin_money_detail / coin_money_ada-->

  <div class="box coin_money_detail coin_money_ada">
    <div class="coin_name"><h4>Ada</h4></div>
  <div id="detail_all">
    <p>(정보기준일:2018.08.28)</p>
    <!-- left_thick_table -->
    <table class='left_thick_table coinInfo_table'>
      <thead>

      </thead>
        <tbody>
            <tr>
                <th>최초발행</th>
                <td>2017년 10월</td>
            </tr>
            <tr>
                <th>코인/토큰</th>
                <td>코인</td>
            </tr>
            <tr>
                <th>시총순위</th>
                <td>10위</td>
            </tr>
            <tr>
                <th>시가총액</th>
                <td>-</td>
            </tr>
            <tr>
                <th>블록생성기</th>
                <td>-</td>
            </tr>
            <tr>
                <th>유통량</th>
                <td>-</td>
            </tr>
            <tr>
                <th>총발행한도</th>
                <td>45,000,000,000</td>
            </tr>
            <tr>
                <th>채굴봉상량</th>
                <td>-</td>
            </tr>
            <tr>
                <th>국가</th>
                <td>-</td>
            </tr>
            <tr>
                <th>공식홈페이지</th>
                <td><a href="https://www.cardano.org/en/home/" target="_blank">https://www.cardano.org/en/home/</a></td>
            </tr>
        </tbody>
    </table><!-- left_thick_table End-->
      <span><a href="coin_info_ada.php">상세보기</a></span>
  </div>



</div><!--coin_money_detail / coin_money_ada End-->

<!-- 코인상세보기 끝 ------------------------------------------------------------------------------------------------------------------------------->
<!-- 코인상세보기 끝 ------------------------------------------------------------------------------------------------------------------------------->
<!-- 코인상세보기 끝 ------------------------------------------------------------------------------------------------------------------------------->


              <div class="box" id='deal_orgin_transaction'>
                  <h3 class='exchange_h3'>원화거래</h3>
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
                        <tr>
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
              </div><!-- con_410 End-->


              <!--chart_graf-->

              <div class="box chart_graf">


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
                                    <input type='text' class='buy_price buy_input01' maxlength="200" value=''/>
                                    <a href="#" class='minus_btn'>-</a>
                                    <a href="#" class='plus_btn'>+</a>
                                </dd>
                            </div>
                            <div class="buy_tab_content_row">
                                <dt>매수수량(BTC)</dt>
                                <dd>
                                    <input type='text' class='buy_amount buy_input02' maxlength="200" value=''/>
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
                            <span class='sub_text minimum_order_price'>최소주문금액 : 2000 KRW</span>
                            <span class='sub_text charge'>수수료 (부가세 포함) : 0.12%</span>
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
                                    <span>BTC</span>
                                </dd>
                            </div>
                            <div class="sell_tab_content_row">
                                <dt>매도가격(KRW)</dt>
                                <dd>
                                    <input type='text' class='sell_price buy_input01' maxlength="200" value=''/>
                                    <a href="#" class='minus_btn'>-</a>
                                    <a href="#" class='plus_btn'>+</a>
                                </dd>
                            </div>
                            <div class="sell_tab_content_row">
                                <dt>매도수량(BTC)</dt>
                                <dd>
                                    <input type='text' class='sell_amount buy_input02' maxlength="200" value=''/>
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
                            <span class='sub_text minimum_order_price'>최소주문금액 : 2000 KRW</span>
                            <span class='sub_text charge'>수수료 (부가세 포함) : 0.12%</span>
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

    <div id="full">
            <!-- full_content -->
            <div id="popupbox" class='box popup masu_fail'>
                <div class="full_inner">
                    <h2>매수주문 실패</h2>
                    <div class="popupbox_text">


                      <p>주문가능 금액이 부족합니다.</p>
                    </div>
                    <div class="btn_area">
                      <input type="button" name="submit" value="확인" class="popupbt ok">
                    </div>
                </div>
            </div><!-- full_content End-->
            <div id="shadow"></div>
    </div>  <!-- full End-->

    <div id="main_full">
            <!-- full_content -->
            <div id="full_content" class='box'>
                <div class="full_inner">
                    <h2>암호화폐 거래 안내</h2>
                    <p>
                        최근 암호화폐에 대한 관심과 함께 무리한 투자에 대한 우려도 증가하고
                        있습니다. 안전하게 암호화폐를 거래할 수 있도록 아래 유의사항을 충분히
                        숙지하신 후 이용하시기 바랍니다.
                    </p>
                    <ul>
                        <li>암호화폐는 법정화폐가 아니며, 특정 주체가 가치를 보장하지 않습니다.</li>
                        <li>암호화폐는 365일, 24시간 전 세계에서 거래되며, 투기적 수요 및
                            국내외 규제 환경 등에 따라 급격한 시세 변동에 노출될 수 있습니다.</li>
                        <li>암호화폐에 대한 투자판단의 책임은 본인에게 있으며, 그에 따라
                            발생 가능한 손실도 투자자 본인에게 귀속됩니다.</li>
                    </ul>
                    <p>암호화폐의 특성을 충분히 숙지하시고 신중하게 거래에 임해주시기 바랍니다.</p>
                    <form class="" action="#" method="post">
                        <input type="checkbox" id='today_close' name='today_close'>
                        <label for='today_close'>오늘 하루 이 창 열지않기</label>
                    </form>
                    <a href="#" class='close_btn'>닫기</a>
                </div>
            </div><!-- full_content End-->
            <div id="shadow"></div>
    </div>  <!-- main_full End-->




</body>
</html>
