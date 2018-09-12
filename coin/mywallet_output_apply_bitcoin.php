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
    <link rel="stylesheet" href="css/mywallet_output_apply_bitcoin.css">
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
                                    <tr>
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
                                    <tr class='active'>
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
                                    <div id="tab3" class="tab_content">
                                        <!--tab2_header-->
                                        <div class="tab3_header">
                                          <ul class="tabs2">
                                              <li class="input_KRW_btn" rel="input_bitcoin"><a href='mywallet_input_apply_bitcoin.php'>입금</a></li>
                                              <li class="active2 output_KRW_btn" rel="output_bitcoin"><a href='#'>출금</a></li>
                                              <li class="input_output_history_btn" rel="input_output"><a href='#'>입출금내역</a></li>
                                          </ul>
                                        </div><!--tab3_header End-->
                                        <!-- output_bitcoin -->
                                        <div id='output_bitcoin' class='output_bitcoin'>
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
                                                                        <input type="text" name="" value="" placeholder="0" required>
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
                                                                        <input type="text" name="" value="" placeholder="보안 비밀번호를 입력하세요." required maxlength="4" minlength='4'>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>OTP 인증번호</th>
                                                                    <td>
                                                                        <input type="text" name="" value="" placeholder="OTP 번호를 입력하세요." required maxlength="6" minlength="6">
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
                                                        <label for='number_01'>전자지갑으로부터 외부 전자지갑으로 암호화폐를 출금합니다.</label>
                                                        <input type="checkbox" id='number_02' class="agree_check">
                                                        <label for='number_02'>전송 이후의 과정은 블록체인 네트워크에서 자동으로 처리됩니다.</label>
                                                        <input type="checkbox" id='number_03' class="agree_check">
                                                        <label for='number_03'>블록체인 네트워크 상에서 발생하는 전송 및 컨펌지연에 대해 CCE에서 별도의 조취를 취할 수 없습니다.</label>
                                                        <input type="checkbox" id='number_04' class="agree_check">
                                                        <label for='number_04'>위 사항 미준수 시 환급은 주말/휴일 제외 1주일 이상 걸림을 알고 있습니다.</label>
                                                        <input type="checkbox" id='number_05' class="agree_check">
                                                        <label for='number_05'>실제 전송되는 수량은 총 출금 암호화폐에서 출금수수료를 제외한 수량이 전송됩니다.</label>

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
                                        </div><!-- output_bitcoin End-->

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
