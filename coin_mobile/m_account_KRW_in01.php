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
                <input type="button" class="back" onclick="location.href='m_account_main.php'"/>
                <h2 class="header_title">원화(KRW) 입금 (1/3)</h2>
                <div class="alarm_area">
                  <img src="img/bell.png" class="alarmBtn" alt="알림버튼"/>
                </div>
              </div>
            </div> <!-- header End-->
          </div><!-- header_wrap End-->

            <!-- mycoin_content_wrap -->
            <div class="mycoin_content_wrap">
                <!-- m_mycoin_main -->
                <div class="content">
                    <div class="account_area my_assets_KRW01">
                      <div class="box">
                      <div class="assetBox">
                        <ul class="asset all_assets">
                          <li>
                              <p class='mywallet_title'>원화 잔고</p>
                              <p class="up_down_data mywallet_amount">3,374.01<span>KRW</span></p>
                          </li>
                          <li class='border_bottom_none'>
                              <p class='mywallet_title'>출금 가능금액</p>
                              <p class="up_down_data mywallet_amount">8,123.60<span>KRW</span></p>
                          </li>
                        </ul>
                      </div>
                    </div>


                      <div class="KRW_in">
                        <table class="KRW_in_table">
                          <tbody>

                            <tr>
                              <th colspan="2" class="KRW_table_title">입금할 계좌정보</th>

                            </tr>

                            <tr>
                              <th>은행</th>
                              <td>기업은행</td>
                            </tr>

                            <tr>
                              <th>계좌번호</th>
                              <td>8024-567-41-22-091</td>
                            </tr>

                            <tr>
                              <th>예금주</th>
                              <td>(주)코인거래소</td>
                            </tr>

                          </tbody>

                        <!--  <tbody>

                            <tr>
                              <th colspan="2" class="KRW_table_title">등록한 계좌정보</th>

                            </tr>

                            <tr>
                              <th>은행</th>
                              <td>국민은행</td>
                            </tr>

                            <tr>
                              <th>계좌번호</th>
                              <td>1234-567-9810-11-123</td>
                            </tr>

                            <tr>
                              <th>예금주</th>
                              <td class="user_name">홍길동</td>
                            </tr>

                          </tbody> -->

                        </table>

                        <div class="KRW_warning">
                        <p>입금신청 주의사항</p>
                        <ul>
                          <li>KRW를 처음 입금하시는 경우 3영업일(72시간) 동안 KRW 및 암호화폐의 출금이 제한됩니다.</li>
                          <li>최소 입금 요청 금액은 1,000원 이상입니다.</li>
                          <li>입금시 KRW는 1:1 비율로 입금됩니다. (100,000원 입금 100,000KRW 입금)</li>
                          <li>은행 공통 점검 시간(매일 23:30~00:30)에는 입금이 불가능하거나 지연될 수 있습니다.</li>
                          <li>입금자명과 금액이 입금신청사항과 정확히 일치하는 경우, 입금 후 고객님의 계정에 반영되기까지 약 3분 정도 소요됩니다.</li>
                        </ul>

                      </div>

                      <div class="KRW_bt_area">
                        <input type="button" name='button' value="다음" class="KRW_next">
                      </div>

                  <!--    <div class="KRW_input">
                        <table>

                          <tr>
                            <th class="temporary_name">입금자명</th>
                            <td class="user_name">홍길동1234</td>
                          </tr>

                          <tr>
                            <td colspan="2" class="warning_message">※ 반드시 발급된 입금자명으로 입금해주세요.</td>
                          </tr>

                        </table>
                        <form>
                          <input type="text" value="0" class="send_money" maxlength="9" required><span>KRW</span>
                          <input type="submit" name='submit' value="보내기" class="KRW_bt">
                        </form>

                        <ul>
                          <li>최소 입금 금액: 5,000원</li>
                          <li>입금 수수료: 무료</li>
                          <li>최대 입금 금액: 무제한</li>
                          <li>입금 후 출금시간: 72시간</li>

                        </ul>
                      </div> -->

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
