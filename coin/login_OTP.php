<!DOCTYPE html>
<html lang="ko" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>CCE</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/sub_menu.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/common.js"></script>
    <script src="js/fouc.js"></script>
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
                <div class="content login_content" id="content">
                  <div class="box con_410">
                    <!-- 로그인폼 -->
                    <div id="login_area">
                        <form class="" action="#" method="post">
                            <h3>OTP 인증</h3>
                            <p>OTP 번호를 입력하신 후 로그인 해주시기 바랍니다.</p>
                            <label for="text" class='skip_label'>OTP인증번호</label>
                            <input type="text" name="OTP" value="" placeholder="인증번호를 입력하세요." id='OTP' required autocomplete="off" class='OTP_code'>

                            <p class='wrong_info'>인증번호가 일치하지 않습니다.</p>
                            <input type="submit" name="확인" value="확인" class='button_box login_button'>
                            <!-- login_info -->
                        </form>

                        <div class="login_info">
                                <a href='guide_OTP.php' class="OTP_guide">OTP 인증을 할 수 없으시다면?</a>
                        </div>    <!-- login_info End-->

                    </div><!-- 로그인폼 END -->
                  </div><!-- con_410 End-->
                </div><!-- login_content End-->
            </div><!-- content_wrap End-->


            <div class="gray_box_OTP"></div>
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
