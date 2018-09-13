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
    <div id="wrap">
        <!-- container -->
        <div id="container">

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
                  <div class="box con_410">
                    <!-- 로그인폼 -->
                    <div id="login_change_pw">
                        <form class="" action="#" method="post">
                            <h3>비밀번호 변경</h3>
                            <label for="password" class='skip_label'>비밀번호</label>
                            <input type="password" name="password" value="" placeholder="비밀번호" id='password' required autocomplete="off">
                            <label for="password_check" class='skip_label'>비밀번호 확인</label>
                            <input type="password" name="password_check" value="" placeholder="비밀번호 확인" id='password_check' required autocomplete="off">
                            <p class='notfiy_info'>10자 이상, 대문자, 소문자, 숫자를 반드시 포함해 주세요.</p>
                            <p class='notfiy_info_again'>비밀번호를 다시 입력해주세요.</p>
                            <p class='notfiy_info_wrong'>비밀번호가 일치하지 않습니다.</p>
                            <input type="submit" name="비밀번호 변경" value="비밀번호 변경" class='button_box change_Pw_button'>
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
