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
    <link rel="stylesheet" href="css/mywallet_input_apply_bitcoin.css">
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
                                        <td><a href='mywallet_input_apply_KRW.php' class='button_hover'>입출금</a></td>
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
                                    <!-- #tab3 입출금-->
                                    <div id="tab3" class="tab_content">
                                        <!--tab2_header-->
                                        <div class="tab3_header">
                                          <ul class="tabs2">
                                              <li class="active2 input_KRW_btn" rel="input_bitcoin"><a href='#'>입금</a></li>
                                              <li class="output_KRW_btn" rel="output_bitcoin"><a href='#'>출금</a></li>
                                              <li class="input_output_history_btn" rel="input_output"><a href='#'>입출금내역</a></li>
                                          </ul>
                                        </div><!--tab3_header End-->
                                        <!-- input_bitcoin -->
                                        <div id='input_bitcoin' class='input_bitcoin conclu_table'>
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
                                                        <p class='up_down_data temporary_address'>ewearch&sm=top_hty&fbm=1%ie-itf8query1654848468654564=</p>
                                                        <input type="button" name="" value="복사하기" class=''>
                                                        <img src="img/qr_code.png" alt="qr코드 주소">
                                                    </div>
                                                </div><!-- BTC_input_address_wrap End-->

                                            </form>
                                                <!-- before_send_money_wrap -->
                                                <div class="before_send_money_wrap">
                                                    <p>입금신청 주의사항</p>
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
