<!DOCTYPE html>
<html lang="ko" class="no-js">
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
    <link rel="stylesheet" href="css/mywallet_output_apply_bitcoin.css">
    <link rel="stylesheet" href="css/mywallet_input_apply_KRW.css">
    <link rel="stylesheet" href="css/sub_menu.css">

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/common.js"></script>
    <script src="js/fouc.js"></script>
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
                                        <!-- bitcoin_input_output --><!-- 비트코인 입출금  시작-->
                                        <div id='bitcoin_input_output'>
                                                    <!--tab3_header-->
                                                    <div class="tab3_header">
                                                      <ul class="tabs2">
                                                          <li class="active2 input_KRW_btn" rel="input_bitcoin"><a href='#'>입금</a></li>
                                                          <li class="output_KRW_btn" rel="output_bitcoin"><a href='#'>출금</a></li>
                                                          <li class="input_output_history_btn" rel="mywallet_tab"><a href='#'>입출금내역</a></li>
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
                                                    <div id='output_bitcoin' class='output_bitcoin conclu_table'>
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
                                                                                    <input type="password" name="" value="" placeholder="보안 비밀번호를 입력하세요." required maxlength="4" minlength='4'>
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
                                                                    <label for='number_03'>블록체인 네트워크 상에서 발생하는 전송 및 컨펌지연에 대해 The Alls에서 별도의 조취를 취할 수 없습니다.</label>
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
                                                    <div id="mywallet_tab" class='mywallet_tab conclu_table'>
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
                                                              <th><a href="#">코인</a></th>
                                                              <th><a href="#">요청일시</a></th>
                                                              <th><a href="#">금액(수량)</a></th>
                                                              <th><a href="#">수수료</a></th>
                                                              <th><a href="#">입금은행</a></th>
                                                              <th colspan="2"><a href="#">계좌번호</a></th>
                                                              <th><a href="#">입금자명</a></th>
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
                                                                <td><p>2018-09-21</p><span>19:00:01</span></td>
                                                                <td><p class='mycoin_data red fr'>100,000</p></td>
                                                                <td><p class='mycoin_data fr'>0</p></td>
                                                                <td><p class='mycoin_data'>OO은행</p></td>
                                                                <td style="overflow:hidden; text-overflow:ellipsis;">
                                                  								<p class='mycoin_data fl'><nobr>123-456789-320-01</nobr></p>
                                                  							</td>
                                                  							<td><p class='mycoin_data'>&nbsp;</p></td>
                                                                <td><p class='mycoin_data fr'>가나다1234</td>
                                                                <td><p class='mycoin_data'>대기중</td>
                                                                <td><p class='mycoin_data '><span class='mycoin_deposit'><input type="submit" value='취소' class="btn_small2"/></td>
                                                              </tr>
                                      					              <tr>
                                                                <td><p class="bl">출금</p></td>
                                                                <td>원화</td>
                                                                <td><p>2018-09-21</p><span>19:00:01</span></td>
                                                                <td><p class='mycoin_data bl fr'>6,000</p></td>
                                                                <td><p class='mycoin_data fr'>1,000</p></td>
                                                                <td><p class='mycoin_data'>OO은행</p></td>
                                                                <td style="overflow:hidden; text-overflow:ellipsis;">
                                                  								<p class='mycoin_data fl'><nobr>123-456789-320-01</nobr></p>
                                                  							</td>
                                                  							<td><p class='mycoin_data'>&nbsp;</td>
                                                                <td><p class='mycoin_data'>&nbsp;</td>
                                                                <td><p class='mycoin_data'>처리완료</td>
                                                                <td><p class='mycoin_data'>&nbsp;</td>
                                                            </tr>
                                      			          		  <tr>
                                                              <td><p class="red">입금</p></td>
                                                              <td>이더리움<br/>클래식</td>
                                                              <td><p>2018-09-21</p><span>19:00:01</span></td>
                                                              <td><p class='mycoin_data red fr'>20</p></td>
                                                              <td><p class='mycoin_data fr'>0</p></td>
                                                              <td><p class='mycoin_data'>&nbsp;</p></td>
                                                              <td style=" overflow:hidden; text-overflow:ellipsis;">
                                      					              	<p class='mycoin_data fl'><nobr>9i57j0l5.3880rceid=ch...</nobr></p>
                                      				              	</td>
                                      				              	<td><p class='mycoin_data'><input type="button" value='상세보기' class="btn_small2"/></td>
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
