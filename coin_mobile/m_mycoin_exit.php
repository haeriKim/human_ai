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
    <link rel="stylesheet" href="css/mycoin_exit.css">
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

            <!-- content_wrap -->
            <div class="mycoin_content_wrap">

              <ul class="gnb_tab2">
                <li><a href="m_mycoin_main.php">자산현황</a></li>
                <li><a href="m_mycoin_deal_list.php">거래내역</a></li>
                <li class="on"><a href="#">입출금내역</a></li>

              </ul>

                <!-- main_content -->
                <div class="content none_overflow_x">
                    <div class="assets_area wd_list" id='wd_list'>

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
                              <input type="radio" name="chk_wd" value="입금" id="wd2" class="square"><label for="wd2">입금</label>
                              <input type="radio" name="chk_wd" value="출금" id="wd3" class="square"><label for="wd3">출금</label>
                            </form>
                          </div>

                            <input type="submit" name="search" value="조회" class='search_btn'>
                          </div><!--days End-->
                      </div>
                    </div><!--cal_area End-->

                    <div class="wd_list_table">
                      <table>
                        <colgroup>
                          <col width="30%">
                          <col width="25%">
                          <col width="15%">
                          <col width="30%">

                        </colgroup>
                        <thead>
                          <tr>
                            <th>요청일시</th>
                            <th>코인명</th>
                            <th>종류</th>
                            <th>거래수량</th>
                          </tr>

                          <tr>
                            <th>계좌정보</th>
                            <th>입금은행</th>
                            <th>수수료</th>
                            <th>진행</th>
                          </tr>


                        </thead>


                      <!--<table class="none_table">
                        <colgroup>
                          <col width="15%">
                          <col width="25%">
                          <col width="30%">
                          <col width="30%">

                        </colgroup>
                        <tr>
                          <th>입출금 내역이 없습니다.</th>

                        </tr>


                      </table>-->

                      <tbody>

                      <tr>
                        <td>2018-10-01<br/>19:00:42</td>
                        <td>
                            원화<br>
                            <span class='unit_eng'>(KRW)</span>
                        </td>
                        <td class="deal_kind_in">입금</td>
                        <td>100,000</td>
                      </tr>

                      <tr>
                        <td>12-123-456-1234</td>
                        <td>홍길동 국민</td>
                        <td>1000</td>
                        <td>대기중</td>
                      </tr>

                      </tbody>

                      <tbody>
                      <tr>
                        <td>2018-10-01<br/>19:00:42</td>
                        <td>
                            원화<br>
                            <span class='unit_eng'>(KRW)</span>
                        </td>
                        <td class="deal_kind_out">출금</td>
                        <td>100,000</td>
                      </tr>

                      <tr>
                        <td>12-123-456-1234</td>
                        <td>홍길동 국민</td>
                        <td>1000</td>
                        <td>완료</td>
                      </tr>
                    </tbody>


                      <p>입출금 내역이 없습니다.</p>
                      </table>

                    </div>
                    </div><!-- con_410 End-->
                </div><!-- exchange_content End-->
            </div><!-- content_wrap End-->

            <!-- nav -->
            <?php include "nav.php";?>
            <!-- nav End-->

        </div><!-- container End -->
        <!-- nav_wrap -->
        <!-- nav_wrap End-->
    </div><!-- wrap End -->
</body>
</html>
