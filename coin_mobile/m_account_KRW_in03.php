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
    <link rel="stylesheet" href="css/account_KRW.css">
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
                <input type="button" class="back" onclick="location.href='m_account_KRW_in02.php'"/>
                <h2 class="header_title">원화(KRW) 입금 (3/3)</h2>
                <div class="alarm_area">
                  <img src="img/bell.png" class="alarmBtn" alt="알림버튼" onclick="location.href='m_alarm.php'"/>
                </div>
              </div>
            </div> <!-- header End-->
          </div><!-- header_wrap End-->

            <!-- mycoin_content_wrap -->
            <div class="mycoin_content_wrap">
                <!-- m_mycoin_main -->
                <div class="content">
                    <div class="account_area my_assets_KRW03 my_assets">

                      <div class="box">
                        <div class="assetBox">
                          <ul class="asset all_assets">
                            <li class='border_bottom_none'>
                                <p class='mywallet_title'>총 보유자산</p>
                                <p class="up_down_data mywallet_amount">8,123.60<span>KRW</span></p>
                                <div class='notification_wrap'>
                                    <p class='notification notification_01'>거래대기</p>
                                    <p class='notification notification_a_01'>2,992.99 KRW</p>
                                </div>
                                <div class='notification_wrap'>
                                    <p class='notification notification_02'>출금가능</p>
                                    <p class='notification notification_a_02'>381.02 KRW</p>
                                </div>
                            </li>
                          </ul>
                        </div>
                      </div>

                      <div class="KRW_inout">
                        <p>입금 계좌정보</p>
                        <table class="KRW_table">
                          <tbody>

                            <tr>
                              <th>은행</th>
                              <td>기업은행</td>
                            </tr>

                            <tr>
                              <th>계좌번호</th>
                              <td>871-654-231-19-920</td>
                            </tr>

                            <tr>
                              <th>예금주</th>
                              <td>(주)디올스</td>
                            </tr>

                            <tr>
                              <th>이체금액</th>
                              <td>0 KRW</td>
                            </tr>

                            <tr>
                              <th>수수료</th>
                              <td>0 KRW</td>
                            </tr>

                            <tr>
                              <th>입금자명</th>
                              <td class="KRW_in_userName">홍길동1234</td>
                            </tr>



                          </tbody>

                        </table>


                        <div class="KRW_warning">
                          <p>※ 반드시 발급된 입금자명으로 입금해주세요.</p>
                        </div>
                      </div>

                      <div class="KRW_bt_area">
                        <input type="button" name='button' onclick="location.href='m_account_KRW_main.php'" value="취소" class="no_cancel_bt">
                        <input type="button" name='button' onclick="location.href='m_account_KRW_main.php'" value="입금 신청" class="next_bt">
                      </div>


                    </div><!-- assets_area End-->
                </div><!-- m_mycoin_main End-->
            </div><!-- mycoin_content_wrap End-->

            <div class="none_box"></div>
            <!-- nav -->
            <?php include "nav.php";?>
            <!-- nav End-->

        </div><!-- container End -->
        <!-- nav_wrap -->
        <!-- nav_wrap End-->
    </div><!-- wrap End -->
</body>
</html>
