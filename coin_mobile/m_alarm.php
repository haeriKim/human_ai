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
    <link rel="stylesheet" href="css/alarm.css">
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
                <a href="#" onclick="history.go(-1); return false;"/> <input type="button" class="back" ></a>
                <h2 class="header_title">알림</h2>
              </div>
            </div> <!-- header End-->
          </div><!-- header_wrap End-->

            <!-- mycoin_content_wrap -->
            <div class="mycoin_content_wrap">
                <!-- m_mycoin_main -->
                <div class="content">
                    <div class="alarm_area">

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




                              <input type="submit" name="search" value="조회" class='search_btn'>
                            </div><!--days End-->
                        </div>
                      </div><!--cal_area End-->


                    <div class="alarm_header">
                          <p>알람설정은 PC버전에서만 가능합니다.</p>
                          <select name="alarm" id="alarm_select">
                            <option value="전체">전체</option>
                            <option value="전체">입금</option>
                            <option value="전체">출금</option>
                            <option value="전체">매도</option>
                            <option value="전체">매수</option>
                            <option value="전체">정보</option>
                            <option value="전체">공지</option>
                          </select>
                      </div>



                      <div class="alarm_table_area">
                        <table class="alarm_table">

                          <tbody>
                            <tr>
                              <td class='alarm_text alarm_output'>출금</td>
                              <td class='date on'>hosik-e789님이 회원님에게 7,500,000BTC를(을) 출금하였습니다.</td>
                              <td class='date1 on'>2018-10-01</td>
                            </tr>

                            <tr>
                              <td class='alarm_text alarm_masu'>매수</td>
                              <td class='date'>회원님이 ETH(이더리움)코인을 30,000ETH를(을) 매수하였습니다.</td>
                              <td class='date1'>2018-09-27</td>
                            </tr>

                            <tr>
                              <td class='alarm_text alarm_input'>입금</td>
                              <td class='date'>회원님이 ETH(이더리움)코인을 30,000ETH를(을) 입금하였습니다.</td>
                              <td class='date1'>2018-09-19</td>
                            </tr>


                          </tbody>
                        </table>

                        <div class="contentBottom">
                            <div class="paging">
                                <a href="#" title="prev"><img src="img/p_first.png" alt='첫페이지로 가기'></a>
                                <a href="#" title="prev"><img src="img/p_prev.png" alt='이전페이지로 가기'></a>
                                <a href="#" title="1page" class="selected">1</a>
                                <a href="#" title="2page">2</a>
                                <a href="#" title="3page">3</a>
                                <a href="#" title="4page">4</a>
                                <a href="#" title="5page">5</a>
                                <a href="#" title="next"><img src="img/p_next.png" alt='다음페이지로 가기'></a>
                                <a href="#" title="next"><img src="img/p_end.png" alt='마지막페이지로 가기'></a>
                            </div>
                        </div><!-- 페이징 -->

                        <div class="none_box"></div>

                      </div>

                    </div><!-- assets_area End-->
                </div><!-- m_mycoin_main End-->
            </div><!-- mycoin_content_wrap End-->

            <!-- nav -->
            <?php include "nav.php";?>
            <!-- nav End-->

        </div><!-- container End -->
        <!-- nav_wrap -->
        <!-- nav_wrap End-->
    </div><!-- wrap End -->
</body>
</html>
