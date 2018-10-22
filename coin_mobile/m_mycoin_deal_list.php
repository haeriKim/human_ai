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
                  <img src="img/bell.png" class="alarmBtn" alt="알림버튼"/>
                </div>
              </div>
            </div> <!-- header End-->
          </div><!-- header_wrap End-->

            <!-- mycoin_content_wrap -->
            <div class="mycoin_content_wrap">

              <ul class="gnb_tab2">
                <li><a href="">자산현황</a></li>
                <li class="on"><a href="#">거래내역</a></li>
                <li><a href="">입출금</a></li>
              </ul>

                <!-- content -->
                <div class="content">
                    <ul class='deal_tab'>
                        <li class='active' rel='deal_complete'>체결</li>
                        <li class='' rel='deal_not_complete'>미체결</li>
                    </ul>
                    <div class="deal_table" id='deal_complete'>
                        <table class='deal_complete_table'>
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
                                    <td>비트코인</td>
                                    <td class='apply_buy'>매수</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>0 KRW</td>
                                    <td>0 KRW</td>
                                    <td>0 KRW</td>
                                    <td>0 KRW</td>
                                </tr>
                            </tbody>

                            <tbody>
                                <tr>
                                    <td class='time'>
                                        2018-08-31<br>08:47:26
                                    </td>
                                    <td>이더리움</td>
                                    <td class='apply_buy'>매도</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>0 KRW</td>
                                    <td>0 KRW</td>
                                    <td>0 KRW</td>
                                    <td>0 KRW</td>
                                </tr>
                            </tbody>
                        </table>



                    </div>
                    <div class="deal_table" id='deal_not_complete'>
                    미체결



                    </div>

                </div><!-- content End-->
            </div><!-- mycoin_content_wrap End-->

            <!-- nav -->
            <?php include "nav.php";?>
            <!-- nav End-->

        </div><!-- container End -->
    </div><!-- wrap End -->
</body>
</html>
