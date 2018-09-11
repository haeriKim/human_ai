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
    <link rel="stylesheet" href="css/record.css">
    <link rel="stylesheet" href="css/popup.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/common.js"></script>
	<style>
	.red{color:#ff2323;}
	.bl{color:#002dae;}
	</style>
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
          <!--right_all_menu-->
          <div id="left_all_menu">
            <!--right_coin_menu2-->
            <div id="left_coin_menu2">

            <!-- mywallet_tab -->
              <div id="mywallet_tab">
                <form class="report_form" action="#" method="post" name='report_form'>
                  <ul class='mywallet_tab_title'>
                      <li class='mycoin_tab'>
                          <h3><a href='#'>보유코인</a></h3>
                      </li>
                      <li class='trans-info'>
                          <h3><a href='#'>거래내역</a></h3>
                      </li>
                      <li class='ledger_tab'>
                          <h3><a href='#'>입출금내역</a></h3>
                      </li>
                  </ul>
                    <!-- buy_tab_content -->
                  <div class="mycoin_tab_content box">
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
							  <input type="submit" name="search" value="조회" class='btn_small'>
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
                                <th><a href="#">계좌번호</a></th>
                                <th><a href="#">&nbsp;</a></th>
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
                            <td><p class='mycoin_data '><span class='mycoin_deposit'><input type="submit" value='취소' class="btn_small"/></td>
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
							<td><p class='mycoin_data'><input type="button" value='상세보기' class="btn_small"/></td>
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
                  </div><!-- buy_tab_content End-->
                </form>
              </div><!-- mywallet_tab End-->
            </div><!--left_coin_menu2 End-->
          </div><!--left_all_menu-->

        </div><!-- exchange_content End-->
      </div><!-- content_wrap End-->

      <!-- footer_wrap -->
      <?php include "footer.php";?>
      <!-- footer_wrap End-->

  </div><!-- container End -->
  </div><!-- wrap End -->
</body>
</html>
