<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <title>The Alls</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/exchange22.css">
  <link rel="stylesheet" href="css/popup.css">
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/common.js"></script>

</head>
<body>

  <div id="wrap"><!--wrap-->
    <div id="container">

      <!-- header_wrap -->
      <div id ="header_wrap">
        <!-- header -->
        <div id="header">
          <div class="headerTop">
            <input type="button" class="back" onclick="location.href='m_exchange_main.php'"/>
            <!-- 코인선택 영역 -->
            <div class="coinSelect_area">
              <select id="coin_select" name="coin_select">
                  <option value="전체">비트코인 BTC/KRW</option>
                  <option value="비트코인캐시 BCH/KRW">비트코인캐시 BCH/KRW</option>
                  <option value="이더리움 ETH/KRW">이더리움 ETH/KRW</option>
                  <option value="이더리움클래식 ETC/KRW">이더리움클래식 ETC/KRW</option>
                  <option value="이오스 EOS/KRW">이오스 EOS/KRW</option>
                  <option value="리플 XRP/KRW">리플 XRP/KRW</option>
                  <option value="에이다 ADA/KRW">에이다 ADA/KRW</option>
              </select>
            </div>
            <div class="alarm_area">
              <img src="img/bell.png" class="alarmBtn" alt="알림버튼" onclick="location.href='m_alarm.php'"/>
            </div>
          </div>
          <div class="current_price">
            <div class="price">
              <p>현재가</p>
              <span><strong>10,650</strong>KRW</span>
            </div>
            <div class="percent">
              <p>전일대비</p>
              <span><strong>-0.31</strong>%</span>
              <span><img src="img/arrow_down_blue.png" alt="시세하락">500</span>
            </div>
          </div>

        </div> <!-- header End-->
      </div><!-- header_wrap End-->

      <!-- content_wrap -->
      <div class="content_wrap">

      <ul class="gnb_tab">
        <li class="on"><a href="#">주문</a></li>
        <li><a href="m_exchange_price_change.php">호가</a></li>
        <li><a href="m_exchange_chart.php">차트</a></li>
        <li><a href="m_exchange_deal_history.php">전체체결</a></li>
        <li><a href="m_exchange_info_bitcoin.php">코인정보</a></li>
      </ul>

    <div id="deal_story"><!--container-->

    <!--원화거래표-->
    <div id="deal_orgin_transaction" class="deal_orgin_transaction">
      <table>
        <tbody>
          <tr>
            <td><p class="up_down_data money_up">12,450<p><span class="up_down_data money_up">+11.77%</span>
            </td>
            <td>1,000</td>
          </tr>

          <tr>
            <td><p class="up_down_data money_up">12,450<p><span class="up_down_data money_up">+11.77%</span>
            </td>
            <td>1,000</td>
          </tr>

          <tr>
            <td><p class="up_down_data money_up">12,450<p><span class="up_down_data money_up">+11.77%</span>
            </td>
            <td>1,000</td>
          </tr>

          <tr>
            <td><p class="up_down_data money_up">12,450<p><span class="up_down_data money_up">+11.77%</span>
            </td>
            <td>1,000</td>
          </tr>

          <tr>
            <td><p class="up_down_data money_up">12,450<p><span class="up_down_data money_up">+11.77%</span>
            </td>
            <td>1,000</td>
          </tr>

          <tr>
            <td><p class="up_down_data money_up">12,450<p><span class="up_down_data money_up">+11.77%</span>
            </td>
            <td>1,000</td>
          </tr>

          <tr>
            <td><p class="up_down_data money_down">12,450<p><span class="up_down_data money_down">+11.77%</span>
            </td>
            <td>1,000</td>
          </tr>

          <tr>
            <td><p class="up_down_data money_down">12,450<p><span class="up_down_data money_down">+11.77%</span>
            </td>
            <td>1,000</td>
          </tr>

          <tr>
            <td><p class="up_down_data money_down">12,450<p><span class="up_down_data money_down">+11.77%</span>
            </td>
            <td>1,000</td>
          </tr>

          <tr>
            <td><p class="up_down_data money_down">12,450<p><span class="up_down_data money_down">+11.77%</span>
            </td>
            <td>1,000</td>
          </tr>

          <tr>
            <td><p class="up_down_data money_down">12,450<p><span class="up_down_data money_down">+11.77%</span>
            </td>
            <td>1,000</td>
          </tr>

          <tr>
            <td><p class="up_down_data money_down">12,450<p><span class="up_down_data money_down">+11.77%</span>
            </td>
            <td>1,000</td>
          </tr>
        </tbody>
      </table>
    </div>

      <div id="deal_content">
        <table class="tabs">
          <tr>
            <td class="tab_active tab_same" rel="tab1"><span class="tab_active11 tabOn">매수</span></td>
            <td class="tab_same" rel="tab2"><span class="tab_active11">매도</span></td>
            <td class="tab_same" rel="tab3"><span class="tab_active11">미체결</span></td>
          </tr>
        </table>
        </ul>

        <div class='tab_container'>

          <!--tab1 매수-->
          <div id="tab1" class="tab_content">
            <div class="buy_tab_content_row">
                <dt>주문가능</dt>
                <dd>
                    <strong class='up_down_data order_data'>0</strong>
                    <span class="won">KRW</span>
                </dd>
            </div>
            <div class="buy_tab_content_row">
                <dt>매수가격(KRW)</dt>
                <dd>
                    <input type='text' class='buy_price' placeholder='0' autocomplete="off" required onchange="getNumber(this);" onkeyup="getNumber(this);" value=''/>
                    <p class="pl_ma">
                      <a href="#" class='minus_btn'>-</a>
                      <a href="#" class='plus_btn'>+</a>
                    </p>
                </dd>
            </div>
            <div class="buy_tab_content_row">
                <dt>매수수량(BTC)</dt>
                <dd>
                    <input type='text' class='buy_amount'  placeholder='0' value='' autocomplete="off" required onchange="getNumber(this);" onkeyup="getNumber(this);"/>
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
                    <b class='buy_all_amount_title'>주문총액</b>
                </dt>
                <dd class='buy_all_amount'>
                    <p><span class='up_down_data'>11,000,000</span>KRW</p>
                </dd>
            </div>
            </dl>

            <div class="mini_sub_info">
              <p class='sub_text minimum_order_price'>최소주문수량 : 0.0001 BTC</p>
              <p class='sub_text charge'>수수료 : 0.25%</p>
            </div>

            <div class="buy_tab_button">
              <input type="reset" name="reset" value="초기화" class='reset reset_buy'>
              <input type="submit" name="submit" value="매수" class='buy_big_btn'>
            </div>
          </div><!-- buy_tab_content End-->



<!------------------------------->


            <!--tab2 매도-->
            <div id="tab2" class="tab_content">
              <div class="buy_tab_content_row">
                  <dt>거래가능</dt>
                  <dd>
                      <strong class='up_down_data order_data'>0</strong>
                      <span class="won">KRW</span>
                  </dd>
              </div>
              <div class="buy_tab_content_row">
                  <dt>매도가격(KRW)</dt>
                  <dd>
                      <input type='text' class='buy_price' placeholder='0' autocomplete="off" required onchange="getNumber(this);" onkeyup="getNumber(this);" value=''/>
                      <p class="pl_ma">
                        <a href="#" class='minus_btn'>-</a>
                        <a href="#" class='plus_btn'>+</a>
                      </p>
                  </dd>
              </div>
              <div class="buy_tab_content_row">
                  <dt>매도수량(BTC)</dt>
                  <dd>
                      <input type='text' class='buy_amount' placeholder='0' value='' autocomplete="off" required onchange="getNumber(this);" onkeyup="getNumber(this);"/>
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
                      <b class='buy_all_amount_title'>주문총액</b>
                  </dt>
                  <dd class='buy_all_amount'>
                      <p><span class='up_down_data'>11,000,000</span>KRW</p>
                  </dd>
              </div>
              </dl>

              <div class="mini_sub_info">
                <p class='sub_text minimum_order_price'>최소주문수량 : 0.0001 BTC</p>
                <p class='sub_text charge'>수수료 : 0.25%</p>
              </div>

              <div class="buy_tab_button">
                <input type="reset" name="reset" value="초기화" class='reset reset_buy'>
                <input type="submit" name="submit" value="매도" class='buy_big_btn'>
              </div>
            </div><!-- buy_tab_content End-->





            <!------------------------------->
                      <!--tab3 미체결-->
                    <div id="tab3" class="tab_content">
                        <div class="not_yet_deal">
                            <p>미체결 주문<span class='change_number'>(2)</span></p>
                            <form class="" action="#" method="post">
                                <div class="not_yet_deal_content_wrap">
                                    <div class="not_yet_deal_content">
                                        <input type="radio" name="check" value="check1" id='check1' class='check'>
                                        <label for="check1" class='apply_buy'>매수</label>
                                        <span class='apply_time'>2018-10-19 20:41:30</span>
                                        <dl class="">
                                            <dt>주문가격</dt>
                                            <dd>310 KRW</dd>
                                            <dt>주문수량</dt>
                                            <dd>0.30000000 BTC</dd>
                                            <dt>미체결수량</dt>
                                            <dd>0.30000000 BTC</dd>
                                        </dl>
                                    </div>
                                    <div class="not_yet_deal_content">
                                        <input type="radio" name="check" value="check2" id='check2' class='check'>
                                        <label for="check2" class='apply_sell'>매도</label>
                                        <span class='apply_time'>2018-10-19 19:46:20</span>
                                        <dl class="">
                                            <dt>주문가격</dt>
                                            <dd>321 KRW</dd>
                                            <dt>주문수량</dt>
                                            <dd>0.30000000 BTC</dd>
                                            <dt>미체결수량</dt>
                                            <dd>0.30000000 BTC</dd>
                                        </dl>
                                    </div>
                                </div>
                                <a href="m_mycoin_deal_list.php" class='view_all'>전체 내역 보기 ></a>
                                <input type="button" name="delete" value="주문취소" class='delete'>
                                <input type="button" name="delete" value="주문취소" class='delete_on'>
                            </form>
                        </div>
                    </div><!-- tab3 End -->

                    </div>

                    </div>

                </div><!--//deal_story 끝-->

                  </div><!--//container_wrap 끝-->
                </div><!--//container 끝-->
                <!-- nav_wrap -->
                <div class="none_box"></div>
                <?php include "nav.php";?>
                <!-- nav_wrap End-->
              </div><!--//wrap 끝-->

              <div id="full">
                      <!-- full_content -->
                      <div id="full_content" class='box'>
                          <div class="full_inner cancel_deal_popup">
                              <h2>미체결 주문 취소</h2>
                              <div class='full_inner_p'>
                                <p>선택하신 미체결 주문을 취소하시겠습니까?</p>
                                <p>취소하신 주문건은 되돌릴 수 없습니다.</p>
                              </div>

                              <div class="bt_area">
                                <div class="bt_area_box">
                                  <a href="#" class='close_no'>닫기</a>
                                  <a href="#" class="close_ok">예, 취소합니다</a>
                                </div>
                              </div>

                          </div>

                          <div class="full_inner apply_buy_popup">
                            <h2>매수주문</h2>
                            <div class="full_inner_p">
                                <table class='left_thick_table deal_check_table'>
                                    <tbody>
                                        <tr>
                                            <th>거래자산</th>
                                            <td>BTC / KRW</td>
                                        </tr>
                                        <tr>
                                            <th>주문구분</th>
                                            <td>지정가 / <span class='apply_buy'>매수</span></td>
                                        </tr>
                                        <tr>
                                            <th>매수가격</th>
                                            <td>1,000 KRW</td>
                                        </tr>
                                        <tr>
                                            <th>매수수량</th>
                                            <td>10 BTC</td>
                                        </tr>
                                        <tr>
                                            <th>수수료</th>
                                            <td>0.025 BTC</td>
                                        </tr>
                                        <tr>
                                            <th>정산금액</th>
                                            <td>10,000 KRW</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="bt_area">
                              <div class="bt_area_box">
                                <a href="#" class='close_no'>취소</a>
                                <a href="#" class="close_ok">매수주문</a>
                              </div>
                            </div>
                          </div>

                          <div class="full_inner apply_sell_popup">
                            <h2>매도주문</h2>
                            <div class="full_inner_p">
                                <table class='left_thick_table deal_check_table'>
                                    <tbody>
                                        <tr>
                                            <th>거래자산</th>
                                            <td>BTC / KRW</td>
                                        </tr>
                                        <tr>
                                            <th>주문구분</th>
                                            <td>지정가 / <span class='apply_sell'>매도</span></td>
                                        </tr>
                                        <tr>
                                            <th>매도가격</th>
                                            <td>1,000 KRW</td>
                                        </tr>
                                        <tr>
                                            <th>매도수량</th>
                                            <td>10 BTC</td>
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
                            </div>

                            <div class="bt_area">
                              <div class="bt_area_box">
                                <a href="#" class='close_no'>취소</a>
                                <a href="#" class="close_ok">매도주문</a>
                              </div>
                            </div>
                          </div>

                          <div class="full_inner apply_complete_popup">
                            <h2>주문 접수</h2>
                            <div class="full_inner_p">
                                <p>주문이 정상적으로 접수되었습니다.</p>
                            </div>

                            <div class="bt_area">
                              <div class="bt_area_box">
                                <a href="#" class='close_ok2'>확인</a>
                              </div>
                            </div>
                          </div>

                      </div><!-- full_content End-->
                      <div id="shadow"></div>
              </div>  <!-- full End-->

            </body>
            </html>
