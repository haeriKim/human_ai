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
    <link rel="stylesheet" href="css/exchange66.css">
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
              <h2 class="header_title">호가</h2>
              <div class="alarm_area">
                <img src="img/bell.png" class="alarmBtn" alt="알림버튼"/>
              </div>
            </div> <!-- header End-->
          </div><!-- header_wrap End-->

            <!-- content_wrap -->
            <div class="content_wrap">
                <!-- main_content -->
                <div class="content">
                    <div class="box" id='deal_orgin_transaction'>
                        <ul class='market_name'>
                            <li class='on'><a href="#">코인정보</a></li>
                        </ul>

                        <!--coin_detail-->
                        <div id="coin_detail">

                          <div class="coin_money_inner">
                            <div class="img_area">
                                <img src="img/etc.png" alt="비트코인아이콘" class="bitcoin_icon">
                            </div>
                            <ul>
                              <li>
                                  <strong>이더리움클래식</strong>
                                  <b class="coin_word">ETC/KRW</b>
                              </li>
                              <li>
                                <span class="price">7,400,000<b class="won">KRW</b>
                                </span>
                              </li>
                              <li class="coin_prepare">
                                <b>전일대비</b>
                                <span class="prepare"><b>+0.31</b>%</span>
                                <span class="updownarrow"><img src="img/arrow_up_red.png" class="ud">23,000</span>
                              </li>
                            </ul>
                          </div>

                        </div>
                        <!--//coin_detail 끝-->

                        <div class="coin_story">
                            <div id="detail_all">
                              <!-- left_thick_table -->
                              <table class='coin_story_table'>
                                  <tbody>
                                    <tr>
                                        <th>최초발행</th>
                                        <td>2016년 7월</td>
                                    </tr>
                                    <tr>
                                        <th>코인/토큰</th>
                                        <td>코인</td>
                                    </tr>
                                    <tr>
                                        <th>순위</th>
                                        <td>15위</td>
                                    </tr>
                                    <tr>
                                        <th>시가총액</th>
                                        <td>1.3조원(18.10.01 기준)</td>
                                    </tr>
                                    <tr>
                                        <th>블록생성기</th>
                                        <td>15초</td>
                                    </tr>
                                    <tr>
                                        <th>유통량</th>
                                        <td>101,000,000</td>
                                    </tr>
                                    <tr>
                                        <th>총발행한도</th>
                                        <td>21,000,000</td>
                                    </tr>
                                    <tr>
                                        <th>채굴보상량</th>
                                        <td>현재 약 5 ETC</td>
                                    </tr>
                                    <tr>
                                        <th>국가</th>
                                        <td>스위스</td>
                                    </tr>
                                    <tr>
                                        <th>공식홈페이지</th>
                                        <td><a href="https://ethereumclassic.github.io/" target="_blank">https://ethereumclassic.github.io/</a></td>
                                    </tr>
                              </table><!-- coin_stroy_table End-->
                              <p>(정보기준일:2018.10.01)</p>
                            </div>
                       </div><!--coin_story End-->



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
