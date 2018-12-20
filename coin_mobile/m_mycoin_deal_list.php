<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script><!--//배너 슬라이더-->
    <title>The Alls</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/mycoin_deal_list.css">
    <link rel="stylesheet" href="css/popup.css">
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
          <!-- header_wrap -->
          <div id ="header_wrap">
            <!-- header -->
            <div id="header">
              <div class="headerTop">
                <h2 class="header_title">자산관리</h2>
                <div class="alarm_area">
                  <img src="img/bell.png" class="alarmBtn" alt="알림버튼" onclick="location.href='m_alarm.php'"/>
                </div>
              </div>
            </div> <!-- header End-->
          </div><!-- header_wrap End-->

            <!-- mycoin_content_wrap -->
            <div class="mycoin_content_wrap">

                <ul class="gnb_tab2">
                  <li><a href="m_mycoin_main.php">자산현황</a></li>
                  <li class="on"><a href="#">거래내역</a></li>
                  <li><a href="m_mycoin_exit.php">입출금내역</a></li>
                </ul>

                <!-- content -->
                <div class="content none_overflow_x">
                    <!-- wd_list -->
                    <div class="assets_area wd_list" id='wd_list'>
                    <!-- cal_area -->
                    <div class="cal_area">
                      <div class="cal_lookup">
                        <p>2018.10.15~2018.10.22</p>
                          <span id="cal_select">조회선택<img src="img/arrow_down_white.png" alt="하얀화살표"></span>
                          <span id="cal_select_up">조회선택<img src="img/arrow_up_white.png" alt="하얀화살표"></span>
                      </div>

                      <div class="cal_lookup_inner">
                        <p class="cal_title">기간</p>
                          <div class="days"><!--days-->

                            <div class="days_inner">
                              <input type="date" value="2018-07-29" class="date_input">
                                <span>~ </span>
                              <input type="date" value="2018-08-29" class="date_input">

                            </div>

                                <div class="date_bt_box">
                                  <input type="button" name="datebt" value="1일" class="date_bt">
                                  <input type="button" name="datebt" value="3일" class="date_bt">
                                  <input type="button" name="datebt" value="15일" class="date_bt">
                                  <input type="button" name="datebt" value="30일" class="date_bt">
                                </div>

                          <p class="cal_title">구분</p>

                          <div class="wd_radio">
                            <form>
                              <input type="radio" name="chk_wd" value="전체" checked="checked" id="wd1" class="square"><label for="wd1">전체</label>
                              <input type="radio" name="chk_wd" value="매수" id="wd2" class="square"><label for="wd2">매수</label>
                              <input type="radio" name="chk_wd" value="매도" id="wd3" class="square"><label for="wd3">매도</label>
                            </form>
                          </div>

                            <input type="submit" name="search" value="조회" class='search_btn'>
                          </div><!--days End-->
                      </div>
                    </div><!--cal_area End-->

                    <ul class='deal_tab'>
                        <li class='active' rel='deal_complete'>체결</li><li class='' rel='deal_not_complete'>미체결</li>
                    </ul>
                    <div class="deal_table" id='deal_complete'>
                        <table class='deal_complete_table deal_table_con'>
                            <thead>
                                <tr>
                                    <th>거래시간</th>
                                    <th>코인</th>
                                    <th>종류</th>
                                    <th>거래수량</th>
                                </tr>
                                <tr>
                                    <th>거래단가</th>
                                    <th>거래금액</th>
                                    <th>수수료</th>
                                    <th>정산금액</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class='time'>
                                        2018-09-05<br>11:23:45
                                    </td>
                                    <td class='coin_name'>
                                        비트코인<br>
                                        <span class='unit_eng'>(BTC/KRW)</span>
                                    </td>
                                    <td class='apply_buy'>매수</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                            </tbody>

                            <tbody>
                                <tr>
                                    <td class='time'>
                                        2018-08-31<br>08:47:26
                                    </td>
                                    <td class='coin_name'>
                                        이더리움<br>
                                        <span class='unit_eng'>(ETH/KRW)</span>
                                    </td>
                                    <td class='apply_sell'>매도</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                            </tbody>
                        </table>



                    </div>
                    <div class="deal_table" id='deal_not_complete'>
                        <table class='deal_not_complete_table deal_table_con'>
                            <thead>
                                <tr>
                                    <th>거래시간</th>
                                    <th>마켓명</th>
                                    <th>종류</th>
                                    <th>주문가격</th>
                                </tr>
                                <tr>
                                    <th>주문수량</th>
                                    <th>체결수량</th>
                                    <th>미체결수량</th>
                                    <th>-</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class='time'>
                                        2018-08-31<br>09:34:30
                                    </td>
                                    <td class='coin_name'>
                                        비트코인<br>
                                        <span class='unit_eng'>(BTC/KRW)</span>
                                    </td>
                                    <td class='apply_buy'>매수</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td><input type='button' value='취소' name='cancel' class='cancel'></td>
                                </tr>
                            </tbody>

                            <tbody>
                                <tr>
                                    <td class='time'>
                                        2018-08-15<br>18:38:24
                                    </td>
                                    <td class='coin_name'>
                                        원화<br>
                                        <span class='unit_eng'>(KRW)</span>
                                    </td>
                                    <td class='apply_sell'>매도</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td><input type='button' value='취소' name='cancel'class='cancel'></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div> <!-- wd_list End-->
              </div><!-- content End-->
            </div><!-- mycoin_content_wrap End-->

            <!-- nav -->
            <?php include "nav.php";?>
            <!-- nav End-->

        </div><!-- container End -->
    </div><!-- wrap End -->

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

            </div><!-- full_content End-->
            <div id="shadow"></div>
    </div>  <!-- full End-->
</body>
</html>
