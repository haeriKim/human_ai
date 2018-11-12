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
    <link rel="stylesheet" href="css/certification_03.css">
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
                        <h2 class="header_title">실명인증</h2>
                        <!-- alarm_area -->
                        <div class="alarm_area">
                            <img src="img/bell.png" class="alarmBtn" alt="알림버튼" onclick="location.href='m_alarm.php'"/>
                        </div><!-- alarm_area End-->
                    </div><!-- headerTop End-->
                </div> <!-- header End-->
            </div><!-- header_wrap End-->

            <!-- certification_02_wrap -->
            <div class="certification_03_wrap">
                <form action="#" class="certification_02">
                <table class='certification_03_table'>
                  <tbody>

                    <tr>
                      <th>휴대폰 번호</th>
                      <td>
                          <p class='complete_certifi'>실명 인증이 완료되었습니다.</p>
                          <input type="button" name="certification_phone" value="휴대폰 본인인증" class='phone_certification'>
                      </td>
                    </tr>

                    <tr>
                      <th>
                          보안 비밀번호
                      </th>
                      <td>
                        <input type="number" pattern="[0-9]*" inputmode="numeric" placeholder="보안 비밀번호를 입력하세요." required maxlength="4" minlength="4" onkeypress='return lengthFix(this)'/>
                        <p id='warning_message'>보안 비밀번호가 일치하지 않습니다.</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="cancel_or_apply">
                  <input type="button" name="" value="취소" onclick="location.href='m_certification_main.php'"class="cancel_btn">
                  <input type="submit" name="" value="등록" onclick="location.href='m_certification_success03.php'" class="agree_btn">
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
