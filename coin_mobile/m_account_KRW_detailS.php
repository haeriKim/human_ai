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
    <link rel="stylesheet" href="css/account_money_detail.css">
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
            <div id="header2">
              <div class="headerTop">
                <input type="button" class="back" onclick="location.href='m_account_KRW_main.php'"/>
                <h2 class="header_title">내역 자세히 보기</h2>
                <div class="alarm_area">
                  <img src="img/bell.png" class="alarmBtn" alt="알림버튼" onclick="location.href='m_alarm.php'"/>
                </div>
              </div>
            </div> <!-- header End-->
          </div><!-- header_wrap End-->

            <!-- mycoin_content_wrap -->
            <div class="mycoin_content_wrap">
                <!-- content -->
                <div class="content">
                    <div class="account_area">


                      <div class="list_detail">
                        <table class="KRW_in_table">
                          <tbody>

                            <tr>
                              <th>구분</th>
                              <td>원화(KRW) 출금</td>
                            </tr>

                            <tr>
                              <th>상태</th>
                              <td class='success'>완료</td>
                            </tr>

                            <tr>
                              <th>요청일시</th>
                              <td>2018-09-05 10:51:45</td>
                            </tr>

                            <tr>
                              <th>처리일시</th>
                              <td>2018-09-05 11:23:45</td>
                            </tr>

                            <tr>
                              <th>등록한 계좌정보</th>
                              <td>신한은행 11*********444</td>
                            </tr>

                            <tr>
                              <th>예금주</th>
                              <td class='waiting'>가나다</td>
                            </tr>

                            <tr>
                              <th>출금신청금액</th>
                              <td>12,000 KRW</td>
                            </tr>

                            <!-- <tr>
                              <th>입금할 계좌정보</th>
                              <td class='waiting'>신한은행 555-666-777888</td>
                            </tr>

                            <tr>
                              <th>예금주</th>
                              <td>디올스</td>
                            </tr> -->

                            <tr>
                              <th>수수료</th>
                              <td>1,000 KRW</td>
                            </tr>
                        </tbody>

                        </table>


                        <div class="KRW_warning">
                          <!-- <p>※ 반드시 발급된 입금자명으로 입금해주세요.</p> -->
                        </div>
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
