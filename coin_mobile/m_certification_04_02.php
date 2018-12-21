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
    <link rel="stylesheet" href="css/certification_04.css">
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
                <a href="#" onclick="history.go(-1); return false;"/> <input type="button" class="back" ></a>
                <h2 class="header_title">계좌 인증 (2/2)</h2>
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
                    <div class="certification_account_area">

                      <div class="account_1won">
                        <p class="title_text">STEP3. 인증번호 확인</p>
                          <div class="account_1won_box">

                            <div class="account_1won_text">
                              <p>위에 회원님의 계좌로 <b>1원</b>을 보냈습니다.</p>
                              <p>계좌 거래내역 입금자명 디올스 뒤에 <br/><b>숫자 3자리</b>를 입력하세요.</p>

                              <p class="code_text">1원이 입금되지 않으셨나요?<br/>
                                입금 내역이 확인 되지 않으시다면 <b>'고객센터'</b>로 문의해주세요.
                              </p>
                            </div>

                              <input type="text" placeholder="인증번호 숫자 3자리를 입력하세요." required class="authentication_num" minlength="3" maxlength="3">
                              <!--<p id="warning_message"><img src="img/icon_ex.png" alt="경고아이콘" class="warning_icon">인증번호가 일치하지 않습니다.</p>-->
                              <a class="delete_icon"><img src="img/x_sky.png" alt="휴지통아이콘">삭제</a>



                          </div>
                      </div>

                      <div class="account_delete">
                        <p class="account_delete_title">입출금 계좌 삭제</p>
                        <p class="account_text">아래 계좌를 정말 삭제하시겠습니까?</p>
                        <p class="account_text">계좌 등록은 한 달에 최대 <b class="account_count">3회</b>까지만 가능합니다. <strong>(3회 남음)</strong></p>

                        <table>
                          <tbody>
                          <tr>
                            <th>예금주</th>
                            <td>가나다</td>
                          </tr>

                          <tr>
                            <th>은행명</th>
                            <td>국민은행</td>
                          </tr>

                          <tr>
                            <th>계좌번호</th>
                            <td>12**********83</td>
                          </tr>
                        </tbody>
                        </table>

                        <div id="delete_complete">
                          <input type="button" name="취소" value="취소" onclick="" class="delete_cancel">
                          <!--<span class="account_complete">인증</span>-->
                          <input type="submit" name="삭제" value="삭제" class="chk_ok" onclick="location.href='m_certification_04.php'"/>
                        </div>

                      </div>

                      <div id="bank_complete">
                        <input type="button" name="취소" value="취소" onclick="location.href='m_certification_main.php'" class="bank_cancel">

                        <!--<span class="account_complete">인증</span>-->
                        <input type="submit" name="인증" value="인증" class="chk_ok" onclick="location.href='m_certification_success04.php'"/>

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
