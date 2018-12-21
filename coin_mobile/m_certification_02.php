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
    <link rel="stylesheet" href="css/certification_02.css">
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
                <div id="header2">
                    <!-- headerTop -->
                    <div class="headerTop">
                        <input type="button" class="back" onclick="location.href='m_certification_main.php'"/>
                        <h2 class="header_title">보안 비밀번호생성</h2>
                        <!-- alarm_area -->
                        <div class="alarm_area">
                            <img src="img/bell.png" class="alarmBtn" alt="알림버튼" onclick="location.href='m_alarm.php'"/>
                        </div><!-- alarm_area End-->
                    </div><!-- headerTop End-->
                </div> <!-- header End-->
            </div><!-- header_wrap End-->

            <!-- certification_02_wrap -->
            <div class="certification_02_wrap">
                <form action="#" class="certification_02">
                <table class='certification_02_table'>
                  <tbody>
                    <tr>
                      <th>현재 로그인 비밀번호</th>
                      <td>
                          <input type="password" class='user_pass' name="password" value="" placeholder="현재 로그인 비밀번호를 입력하세요." required maxlength="12" minlength="12" />
                          <p id='warning_message'>비밀번호가 일치하지 않습니다.</p>
                      </td>
                    </tr>

                    <tr>
                      <th>
                          새로운 보안 비밀번호
                          <img src="img/m_question_15.png" class='question_img'>
                      </th>
                      <td>
                        <input type="number" pattern="[0-9]*" inputmode="numeric" placeholder="새로운 보안 비밀번호를 입력하세요." required maxlength='4' minlength='4' onkeypress='return lengthFix(this)'/>
                        <div class="question_smallbox">
                          <div class="password_question_detail2">
                            <strong>
                              안전한 비밀번호 작성법
                            </strong>
                            <p>- 숫자로 이루어진 4자리 보안 비밀번호를 입력해주세요.</p>
                            <p>- 해킹사고 방지를 위해 보안비밀번호를 자주 변경해주세요.</p>
                            <p>- 4자리의 중복 및 연속 숫자, 휴대폰 번호, 이메일 주소의 숫자,<br/>
                             비밀번호에 포함된 숫자 등 추측이 가능한 번호는 피해주세요.
                          </div>
                        </div>
                        <p id='warning_message'>비밀번호 요건이 충족하지 않습니다.</p>
                      </td>
                    </tr>
                    <tr>
                      <th>새로운 보안 비밀번호 확인</th>
                      <td>
                        <input type="number" pattern="[0-9]*" inputmode="numeric" class='user_security' name="security" placeholder="새로운 보안 비밀번호를 다시 입력하세요." maxlength='4' minlength='4' required onkeypress='return lengthFix(this)'/>
                        <p id='warning_message'>비밀번호가 일치하지 않습니다.</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="cancel_or_apply">
                  <input type="button" name="" value="취소" onclick="location.href='m_certification_main.php'"class="cancel_btn">
                  <input type="submit" name="" value="등록" onclick="location.href='m_certification_success02.php'" class="agree_btn">
                </div>

                </form>
            </div><!-- certification_02_wrap End-->

            <!-- nav -->
            <?php include "nav.php";?>
            <!-- nav End-->

        </div><!-- container End -->
    </div><!-- wrap End -->
</body>
</html>
