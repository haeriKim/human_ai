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
    <link rel="stylesheet" href="css/mywallet_input_apply_KRW.css">
    <link rel="stylesheet" href="css/sub_menu.css">
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
                                        <td><a href='#' class='button_hover'>입출금</a></td>
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
                                        <td><a href="mywallet_input_apply_bitcoin.php" class='button_hover'>입금</a></td>
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
                            <li class="mywallet">보유코인</li>
                            <li class="ex_list">거래내역</li>
                            <li class="active" rel="tab3">입출금</li>
                        </ul>
                    </div><!--coin탭태두리 End-->

                    <!--mycointab_container-->
                            <div class="mycointab_container">
                                    <!-- #tab3 입출금-->
                                    <div id="tab3" class="tab_content">
                                        <!--tab3_header-->
                                        <div class="tab3_header">
                                          <ul class="tabs2">
                                            <li class="active2 input_KRW_btn" rel="input_KRW"><a href='#'>입금</a></li>
                                            <li class="output_KRW_btn" rel="output_KRW"><a href='#'>출금</a></li>
                                            <li class="mywallet_tab" rel="mywallet_tab"><a href='#'>입출금내역</a></li>
                                          </ul>
                                        </div><!--tab3_header End-->
                                        <!-- input_KRW -->
                                        <div id='input_KRW' class='input_KRW conclu_table'>
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
                                                                    <td>○○은행</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>계좌번호</th>
                                                                    <td>1234-567-8910-11-123</td>
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
                                                                    <td>○○은행</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>계좌번호</th>
                                                                    <td>1234-<span class='no_look'>567-8910</span>-11-123</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>예금주</th>
                                                                    <td>가나다</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div><!-- your_account End-->
                                                </div><!-- account_table_wrap End-->

                                                <div class="send_info_01">
                                                    <p>입금자명</p>
                                                    <span class='temporary_name'>가나다1234</span>
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
                                        <div id='output_KRW' class='output_KRW conclu_table'>
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
                                                                        <p>200,000,000 KRW</p>
                                                                        <input type="submit" value="인증레벨설정">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>출금요청액</th>
                                                                    <td>
                                                                        <input type="text" name="" value="" placeholder="0" required>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>수수료</th>
                                                                    <td>1,000 KRW</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>보안 비밀번호</th>
                                                                    <td>
                                                                        <input type="password"  class="user_security" name="" value="" placeholder="보안 비밀번호를 입력하세요." required maxlength="4" minlength='4'>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>OTP 인증번호</th>
                                                                    <td>
                                                                        <input type="text" name="" value="" placeholder="OTP 번호를 입력하세요." required maxlength="6" minlength="6">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>휴대폰 SNS 인증</th>
                                                                    <td>
                                                                        <input type="text" name="" value="" placeholder="휴대폰으로 전송된 인증번호를 입력하세요." required>
                                                                        <input type="submit" value="인증번호요청" class="output_KRW_number">
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
                                    </div><!--#tab3 입출금 End-->
                               </div><!--mycointab_container End-->
                        </div>
                  </div><!-- mycoin_content End-->
              </div><!-- content_wrap End-->

              <!-- footer_wrap -->
              <?php include "footer.php";?>
              <!-- footer_wrap End-->

              <!--sub_menu-->
              <?php include "sub_menu.php";?>
              <!--sub_menu End-->

        </div><!-- container End -->
    </div><!-- wrap End -->



</body>
</html>
