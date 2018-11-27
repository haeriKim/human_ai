<!DOCTYPE html>
<html lang="ko" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>The Alls</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/login_c_changePw.css">
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
                  <div class="box con_410 login_c_changePw_wrap">
                    <div id="login_c_change_pw">
                        <h3>비밀번호 변경 완료</h3>
                        <p class='text_area'>비밀번호 변경이 완료되었습니다.</p>
                        <input type="button" name="button" value="로그인하기" class='button_box go_login' onclick="location.href='login.php'">
                    </div><!-- login_c_change_pw END -->
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
                      <h3>비밀번호 변경 완료</h3>
                      <p class='text_area'>비밀번호 변경이 완료되었습니다.</p>
                      <input type="button" name="button" value="로그인하기" class='button_box go_login' onclick="location.href='login.php'">
                    </div><!-- 로그인폼 END -->

                  </div><!-- box End-->
                </div><!-- login_content End-->
            </div><!-- login_responsive End-->

            <div class="gray_box_c_changePw"></div>

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
