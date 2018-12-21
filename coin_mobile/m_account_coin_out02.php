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
    <link rel="stylesheet" href="css/account_coin.css">
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

          <div id ="header_wrap">
            <!-- header -->
            <div id="header2">
              <div class="headerTop">
                <input type="button" class="back" onclick="location.href='m_account_coin_out01.php'"/>
                <h2 class="header_title">비트코인(BTC) 출금 (2/3)</h2>
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
                    <div class="account_area my_assets my_assets_coin02">
                      <div class="box">
                      <div class="assetBox">
                        <ul class="asset all_assets">
                          <li class='border_bottom_none'>
                            <p class='mywallet_title'>총 보유자산</p>
                            <p class="up_down_data mywallet_amount">374,92.60<span>BTC</span></p>
                            <div class='notification_wrap'>
                                <p class='notification notification_01'>거래대기</p>
                                <p class='notification notification_a_01'>1,002.32 BTC</p>
                            </div>
                            <div class='notification_wrap'>
                                <p class='notification notification_02'>출금가능</p>
                                <p class='notification notification_a_02'>221.98 BTC</p>
                              </div>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="coin_inout">
                     <div class="coin_input_outout">

                        <p class="title">출금할 금액<a href="#" id='question_mark'><img src="img/m_question_15.png" alt="question"></a></p></p>

                        <form>
                          <input type="text" placeholder="0" class="send_money" required value='' autocomplete="off" onchange="getNumber(this);" onkeyup="getNumber(this);"/><span>BTC</span>


                        <div class="coin_unit">
                          <input type="button" value="10만" class="priceBtn"/>
                          <input type="button" value="50만" class="priceBtn"/>
                          <input type="button" value="100만" class="priceBtn"/>
                          <input type="button" value="1000만" class="priceBtn"/>
                        </div>

                        <p class="input_title">코인출금 주소</p>
                          <input type="text" placeholder="출금할 코인 주소를 입력하세요." class="security_num step" required>
                        <p class="input_title">보안 비밀번호</p>
                          <input type="password" placeholder="보안비밀번호를 입력하세요." class="security_num step" maxlength="4" minlength="4" required>
                        <p class="input_title">OTP 인증번호</p>
                          <input type="text" placeholder="OTP 인증번호를 입력하세요." class="otp_num step" maxlength="6" minlength="6" required>
                        </form>

                        <ul class="coin_warning_list">
                          <li>- 출금 수수료 : 0.001 BTC</li>
                          <li>- 실제 출금금액 : -0.001 BTC</li>

                        </ul>
                      </div>

                      </div>


                      <div class="coin_bt_area">
                        <input type="button" name='button' onclick="location.href='m_account_coin_out03.php'" value="다음" class="next_bt">
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

    <div id="full">
            <!-- full_content -->
            <div id="full_content" class='box'>
                <div class="full_inner">
                    <h2>인증 레벨별 한도</h2>

                    <div class="full_table">
                      <table class="KRW_table">
                          <colgroup>
                              <col style="width:8%;">
                              <col style="width:7%;">
                              <col style="width:5%;">
                              <col style="width:40%;">
                              <col style="width:20%;">
                              <col style="width:20%;">
                          </colgroup>
                          <thead>
                            <tr>
                              <th colspan="3">구분</th>
                              <th colspan="3">
                                <p>Level 1</p>
                                <p>Level 2</p>
                                <p>Level 3</p>
                              </th>
                              <th>Levle 4</th>
                              <th>Levle 5</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class='certification_method'>
                                <th colspan="3">인증방법</th>
                                <td colspan="3">
                                  <p>이메일인증</p>
                                  <p>보안비밀번호</p>
                                  <p>생성 실명인증</p>
                                </td>
                                <td>계좌인증</td>
                                <td>OTP 인증</td>
                            </tr>
                            <tr>
                                <th rowspan="2">입금한도</th>
                                <th colspan="2">원화(KRW)</th>
                                <td colspan="3">0원</td>
                                <td>무제한</td>
                                <td>무제한</td>
                            </tr>
                            <tr>
                                <th colspan="2">암호화폐</th>
                                <td colspan="3">무제한</td>
                                <td>무제한</td>
                                <td>무제한</td>
                            </tr>
                            <tr>
                                <th rowspan="9">출금한도</th>
                                <th rowspan="2" class='long_th'>
                                    <p>원화</p>
                                    <p>(KRW)</p>
                                </th>
                                <th>1회</th>
                                <td colspan="3">0원</td>
                                <td>0원</td>
                                <td>50,000,000원</td>
                            </tr>
                            <tr>
                                <th>1일</th>
                                <td colspan="3">0원</td>
                                <td>0원</td>
                                <td>200,000,000원</td>
                            </tr>
                            <tr>
                                <th colspan="2" class='long_th'>
                                    <p>비트코인</p>
                                    <p>(BTC)</p>
                                </th>
                                <td colspan="3">0 BTC</td>
                                <td>0 BTC</td>
                                <td>50 BTC</td>
                            </tr>
                            <tr>
                                <th colspan="2" class='long_th'>
                                    <p>비트코인캐시</p>
                                    <p>(BCH)</p>
                                </th>
                                <td colspan="3">0 BCH</td>
                                <td>0 BCH</td>
                                <td>600 BCH</td>
                            </tr>
                            <tr>
                                <th colspan="2" class='long_th'>
                                    <p>이더리움</p>
                                    <p>(ETH)</p>
                                </th>
                                <td colspan="3">0 ETH</td>
                                <td>0 ETH</td>
                                <td>1,000 ETH</td>
                            </tr>
                            <tr>
                                <th colspan="2" class='long_th'>
                                    <p>이더리움클래식</p>
                                    <p>(ETC)</p>
                                </th>
                                <td colspan="3">0 ETC</td>
                                <td>0 ETC</td>
                                <td>5,000 ETC</td>
                            </tr>
                            <tr>
                                <th colspan="2" class='long_th'>
                                    <p>이오스</p>
                                    <p>(EOS)</p>
                                </th>
                                <td colspan="3">0 EOS</td>
                                <td>0 EOS</td>
                                <td>50,000 EOS</td>
                            </tr>
                            <tr>
                                <th colspan="2" class='long_th'>
                                    <p>리플</p>
                                    <p>(XRP)</p>
                                </th>
                                <td colspan="3">0 XRP</td>
                                <td>0 XRP</td>
                                <td>30,000 XRP</td>
                            </tr>
                            <tr>
                                <th colspan="2" class='long_th'>
                                    <p>에이다</p>
                                    <p>(ADA)</p>
                                </th>
                                <td colspan="3">0 ADA</td>
                                <td>0 ADA</td>
                                <td>4,000,000 ADA</td>
                            </tr>
                          </tbody>
                      </table>



                    </div>

                    <a href="#" class='close_btn'>닫기</a>

                </div>
            </div><!-- full_content End-->
            <div id="shadow"></div>
    </div>  <!-- full End-->
</body>
</html>
