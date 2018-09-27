<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>CCE</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/login_changePw.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/sub_menu.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/common.js"></script>
</head>
<body>
    <!-- wrap -->
    <div id="onepage_wrap">
        <!-- container -->
        <div id="onepage_container">

            <!-- nav_wrap -->
            <?php include "nav.php";?>
            <!-- nav_wrap End-->

            <!-- header_wrap -->
            <?php include "header.php";?>
            <!-- header_wrap End-->

            <!-- content_wrap -->
            <div class="content_wrap">
                <!-- main_content -->
                <div class="content login_content">
                  <div class="box con_410 login_change_pw_wrap">
                    <!-- 로그인폼 -->
                    <div id="login_change_pw">
                        <form class="" action="#" method="post">
                            <h3>비밀번호 변경</h3>
                            <label for="password" class='skip_label'>비밀번호</label>
                            <input type="password" name="password" value="" placeholder="비밀번호" id='password' required autocomplete="off" class='user_pass'>
                            <p id="warning_message">비밀번호 요건이 충족하지 않습니다.</p>
                            <div class="question_smallbox"><img src="img/question.png">
                              <div class="password_question_detail">
                                    안전한 비밀번호 작성 법<br />
                                    -비밀번호는 영문 소문자, 대문자, 숫자, 특수문자를 포함하여 10자리 이상으로 만드셔야 합니다. <br />
                                    -비밀번호는 최대한 길게 작성해주세요.<br />
                                    -단, 허용되는 특수문자(~!@#$%^*)외 다른 특수문자는 사용할 수 없습니다.<br />
                                    -ID, 생일, 전화번호 등 개인정보를 이용해 만든 비밀번호를 사용하지 마세요.<br />
                                    -포털 사이트나 타 거래소 등 타 사이트와 동일하거나 비슷한 암호를 설정하지 마세요.타 사이트에서 암호가 유출될 경우 제3자가 회원님의 계정에 접근할 위험이 있습니다.<br />
                                    -동일한 문자가 반복되는 등 패턴이 있는 비밀번호로 만들지 마세요.<br />
                              </div>
                            </div>
                            <label for="password_check" class='skip_label'>비밀번호 확인</label>
                            <input type="password" name="password_check" value="" placeholder="비밀번호 확인" id='password_check' required autocomplete="off" class='user_passChk'>
                            <p id="warning_message">비밀번호가 일치하지 않습니다.</p>
                            <input type="submit" name="비밀번호 변경" value="비밀번호 변경" class='button_box change_Pw_button'  onclick="location.href='login_c_changePw.php'">
                            <!-- login_info -->
                        </form>
                    </div><!-- 로그인폼 END -->
                  </div><!-- con_410 End-->
                </div><!-- login_content End-->
            </div><!-- content_wrap End-->

            <!-- footer_wrap -->
            <?php include "footer.php";?>
            <!-- footer_wrap End-->

            <!--sub_menu-->
            <?php include "sub_menu.php";?>
            <!--sub_menu End-->

        </div><!-- container End -->
    </div><!-- wrap End -->

</body>
</html>
