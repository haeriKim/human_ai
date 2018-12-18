<!DOCTYPE html>
<html lang="ko" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>The Alls</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/login_findPw.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/sub_menu.css">
    <link rel="shortcut icon" href="img/favicon-16.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon-16.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon-32.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon-32.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon-16.png" type="image/x-icon">
    <link rel="icon" href="img/favicon-16.png" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon-32.png" type="image/x-icon">
    <link rel="icon" href="img/favicon-32.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/common.js"></script>
    <script src="js/fouc.js"></script>
</head>
<body>
    <!-- wrap -->
    <div id="onepage_wrap">
        <!-- container -->
        <div id="onepage_container">

            <!-- nav_wrap -->
            <?php include "nav.php";?>
                      <!-- nav_wrap End-->

          <!-- m_nav-->
          <?php include "m_nav.php";?>
          <!-- m_nav End-->

          <!-- m_header-->
          <?php include "m_header.php";?>
          <!-- m_header End-->


            <!-- header_wrap -->
            <?php include "header.php";?>
            <!-- header_wrap End-->

            <!-- content_wrap -->
            <div class="content_wrap login_con">
                <!-- main_content -->
                <div class="content login_content">
                  <div class="box con_410 login_find_pw_wrap">
                    <!-- 로그인폼 -->
                    <div id="login_find_pw">
                        <form class="" action="#" method="post">
                            <h3>비밀번호 복구</h3>
                            <label for="e_mail" class='skip_label'>이메일주소</label>
                            <input type="email" name="e_mail" value="" placeholder="이메일 주소를 입력하세요." id='e_mail' required autocomplete="off" class='user_mail'>
                            <p class='notfiy_info'>
                                <img src="img/icon_ex.png" alt="알림">
                                입력한 주소로 이메일이 발송되었습니다.<br/>
                                메일의 링크를 통해 비밀번호 변경을 완료해주세요.
                            </p>
                            <input type="submit" name="submit" value="메일 보내기" class='button_box send_email_button'>
                            <input type="button" name="button" value="로그인 하기" class='button_box go_login'>
                            <!-- login_info -->
                        </form>
                    </div><!-- login_find_pw END -->
                  </div><!-- con_410 End-->
                </div><!-- login_content End-->
            </div><!-- content_wrap End-->

            <!-- login_responsive -->
            <div class="login_responsive">
                <!-- login_content -->
                <div class="login_content">
                  <!-- box -->
                  <div class="box">
                    <!-- 로그인폼 -->
                    <div id="login_area_responsive">
                        <form class="" action="#" method="post">
                            <h3>비밀번호 복구</h3>
                            <label for="e_mail_responsive" class='skip_label'>이메일주소</label>
                            <input type="email" name="e_mail" value="" placeholder="이메일주소를 입력하세요." id='e_mail_responsive' required autocomplete="off" class='user_mail'>
                            <p class='notfiy_info'>
                                <img src="img/icon_ex.png" alt="알림">
                                입력한 주소로 이메일이 발송되었습니다.<br/>
                                메일의 링크를 통해 비밀번호 변경을 완료해주세요.
                            </p>

                            <input type="submit" name="submit" value="메일 보내기" class='button_box send_email_button'>
                        </form>

                    </div><!-- 로그인폼 END -->

                  </div><!-- box End-->
                </div><!-- login_content End-->
            </div><!-- login_responsive End-->

            <div class="gray_box_findPw"></div>
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
