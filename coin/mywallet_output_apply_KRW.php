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
    <link rel="stylesheet" href="css/mywallet_output_apply_KRW.css">
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
                <div class="content mycoin_content con_1340">
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
                                        <td><a href='#' class='button_hover'>KRW변환</a></td>
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
                                        <td><a href="#" class='button_hover'>입금</a></td>
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
                                        <td><a href="#" class='button_hover'>입출금</a></td>
                                    </tr>
                                </tbody>
                              </table>
                          </div><!-- deal_table_scroll End-->
                      </div><!-- con_410 End-->

                    <div class="box mycoin_fence">
                  <!--coin탭태두리-->
                    <div class="mycoin_tab" id="mycoin_tab">
                        <ul class="tabs">
                            <li rel="tab1">보유코인</li>
                            <li rel="tab2">거래내역</li>
                            <li class="active" rel="tab3">입출금</li>
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

                                    </div><!--#tab2 거래내역 End-->
        <!---------------------------------------------------------------------------------------------------------------------------------------------->
                                    <!-- #tab3 입출금-->
                                    <div id="tab3" class="tab_content">
                                        <!--tab2_header-->
                                        <div class="tab3_header">
                                          <ul class="tabs3">
                                            <li class="input_KRW_btn" rel="input_KRW">입금</li>
                                            <li class="active2 output_KRW_btn" rel="output_KRW">출금</li>
                                            <li class="input_output_history_btn" rel="input_output">입출금내역</li>
                                          </ul>
                                        </div><!--tab3_header End-->
                                        <!-- input_KRW -->
                                        <div id='output_KRW' class='input_KRW'>
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
                                                                    <td>○○은행</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>계좌번호</th>
                                                                    <td>1234-1564-68789</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>예금주</th>
                                                                    <td>가나다</td>
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
                                                                        200,000,000 KRW
                                                                        <input type="submit" value="인증레벨설정">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>출금요청액</th>
                                                                    <td>
                                                                        <input type="text" name="" value="" placeholder="0">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>수수료</th>
                                                                    <td>1,000 KRW</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>보안 비밀번호</th>
                                                                    <td>
                                                                        <input type="text" name="" value="" placeholder="보안 비밀번호를 입력하세요.">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>OTP 인증번호 입력</th>
                                                                    <td>
                                                                        <input type="text" name="" value="" placeholder="OTP 번호를 입력하세요.">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>휴대폰 SNS 인증</th>
                                                                    <td>
                                                                        <input type="text" name="" value="" placeholder="휴대폰으로 전송된 인증번호를 입력하세요.">
                                                                        <input type="submit" value="인증번호요청">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div><!-- send_account End-->
                                                </div><!-- account_table_wrap End-->

                                                <!-- before_send_money_wrap -->
                                                <div class="before_send_money_wrap">
                                                    <p>출금신청 주의사항</p>
                                                    <div class="checkbox_list">
                                                        <input type="checkbox" id='number_01' class="agree_check">
                                                        <label for='number_01'>토스, 카카오페이, 폰뱅킹으로는 출금하지 않습니다.</label>
                                                        <input type="checkbox" id='number_02' class="agree_check">
                                                        <label for='number_02'>출금 수수료는 1,000원이며 5,000원 이상부터 출금이 가능합니다.</label>
                                                        <input type="checkbox" id='number_03' class="agree_check">
                                                        <label for='number_03'>환금계좌로 등록한 나의 은행계좌에서 출금합니다.</label>
                                                        <input type="checkbox" id='number_04' class="agree_check">
                                                        <label for='number_04'>위 사항 미준수 시 환급은 주말/휴일 제외 1주일 이상 걸림을 알고 있습니다.</label>
                                                        <input type="checkbox" id='number_05' class="agree_check">
                                                        <label for='number_05'>원화 입금 후 첫 출금은 주말 제외 72시간 이후 가능함을 알고 있습니다.</label>

                                                        <input type="checkbox" id='number_06' class="allAgree">
                                                        <label for='number_06' class='all_agree'>위의 출금시 주의사항에 모두 동의합니다.</label>
                                                    </div>

                                                    <div class="cancel_or_apply">
                                                        <input type="reset" name="reset" value="취소" class='cancel_btn'/>
                                                        <span class='agree_btn if_you_not_all_agree'>출금신청</span>
                                                        <input type="submit" name="submit" value="출금신청" class='agree_btn if_you_all_agree'/>
                                                    </div>

                                                </div><!-- before_send_money_wrap End-->
                                            </form>
                                        </div><!-- input_KRW End-->

                                    </div><!--#tab3 입출금 End-->
                               </div><!--mycointab_container End-->
                        </div>
                  </div><!-- mycoin_content End-->
              </div><!-- content_wrap End-->

              <!-- footer_wrap -->
              <?php include "footer.php";?>
              <!-- footer_wrap End-->
            </div>
            <!-- footer_wrap End-->

        </div><!-- container End -->
    </div><!-- wrap End -->

</body>
</html>
