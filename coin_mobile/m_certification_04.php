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
                <h2 class="header_title">계좌 인증 (1/2)</h2>
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

                      <div class="agree_area">
                        <p class="title_text">STEP1. 개인정보 수집 및 이용 동의<span class="important">(필수)</span></p>

                          <ul>
                            <li>- 목적: 원화(KRW) 거래를 위한 본인 확인</li>
                            <li>- 항목: 계좌번호,은행명</li>
                            <li class="account_check_box">
                              <input type="radio" id="account_yes" class="square">
                              <label for="account_yes"></label>
                              <span>개인 정보 수집 및 이용에 동의 합니다.</span>
                            </li>
                          </ul>
                      </div>

                      <div class="account_input_area">
                        <p class="title_text">STEP2. 계좌 정보 입력</p>
                        <table>
                          <tbody>
                          <tr>
                            <th>예금주</th>
                            <td>가나다</td>
                          </tr>

                          <tr>
                            <th>은행명</th>
                            <td>
                              <select name="은행명" id="bank_kind">
                                <option value="전체" disabled selected="selected">은행선택</option>
                                <option value="전체">국민은행</option>
                                <option value="전체">농협은행</option>
                                <option value="전체">신한은행</option>
                                <option value="전체">우리은행</option>
                                <option value="전체">기업은행</option>
                              </select>
                            </td>
                          </tr>

                          <tr>
                            <th>계좌번호</th>
                            <td>
                              <input type="number" placeholder="숫자만 입력하세요." required class="user_account user_account_input">
                              <!--<span class="account_number_fixed">12-231-1234-23-123</span>-->
                              <!--<p id="warning_message">형식에 맞지 않는 번호입니다.</p>-->
                            </td>
                          </tr>
                        </tbody>
                        </table>

                        <div class="bank_request">
                          <input type="submit" name="계좌 인증번호 요청" onclick="location.href='m_certification_04_02.php'" value="다음" class="chk_ok"/>
                          <!--<span class="request">다음</span>-->

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
