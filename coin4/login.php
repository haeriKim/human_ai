<!DOCTYPE html>
<html lang="ko" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>The Alls</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/login.css">
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
    <div id="wrap">
        <!-- container -->
        <div id="container">

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
                <div class="content login_content" id="content">
                  <div class="box con_410">
                    <!-- 로그인폼 -->
                    <div id="login_area">
                        <form class="" action="#" method="post">
                            <h3>로그인</h3>
                            <label for="e_mail" class='skip_label'>이메일주소</label>
                            <input type="email" name="e_mail" value="" placeholder="이메일주소를 입력하세요." id='e_mail' required autocomplete="off" class='user_mail'>
                            <label for="password" class='skip_label'>비밀번호</label>
                            <input type="password" name="password" value="" placeholder="로그인 비밀번호를 입력하세요." id='password' required autocomplete="off" class='user_pass'>
                            <p class='wrong_info'><img src="img/icon_ex.png" alt="경고아이콘" class="warning_icon">이메일주소와 비밀번호를 확인해주세요.</p>
                            <input type="submit" name="로그인" value="로그인" class='button_box login_button'>
                        </form>

                        <div class="login_info">
                            <a href="signUp.php">회원가입</a>
                            <ul>
                                <li><a href='login_findPw.php'>비밀번호 찾기</a></li>
                                <li>
                                    <a href='#'>
                                        이메일 주소 찾기
                                        <p class='e_mail_find'>당사 고객센터(02-6013-6879)로 연락주시면<br/>확인하여 안내드릴 수 있도록 하겠습니다.</p>
                                    </a>
                                </li>
                            </ul>
                        </div>    <!-- login_info End-->

                    </div><!-- 로그인폼 END -->
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
                            <h3>로그인</h3>
                            <label for="e_mail_responsive" class='skip_label'>이메일주소</label>
                            <input type="email" name="e_mail" value="" placeholder="이메일주소를 입력하세요." id='e_mail_responsive' required autocomplete="off" class='user_mail'>
                            <label for="password_responsive" class='skip_label'>비밀번호</label>
                            <input type="password" name="password" value="" placeholder="로그인 비밀번호를 입력하세요." id='password_responsive' required autocomplete="off" class='user_pass'>
                            <p class='wrong_info'><img src="img/icon_ex.png" alt="경고아이콘" class="warning_icon">이메일주소와 비밀번호를 확인해주세요.</p>
                            <input type="submit" name="로그인" value="로그인" class='button_box login_button'>
                        </form>

                        <!-- login_info -->
                        <div class="login_info">
                            <a href="signUp.php">회원가입</a>
                            <ul>
                                <li><a href='login_findPw.php'>비밀번호 찾기</a></li>
                                <li class='email_find_btn'>
                                    <a href='#'>이메일 주소 찾기</a>
                                    <span class='partition'>|</span>
                                    <p class='e_mail_find'>당사 고객센터(02-6013-6879)로 연락주시면<br/>확인하여 안내드릴 수 있도록 하겠습니다.</p>
                                </li>
                            </ul>
                        </div>    <!-- login_info End-->

                    </div><!-- 로그인폼 END -->

                  </div><!-- box End-->
                </div><!-- login_content End-->
            </div><!-- login_responsive End-->

            <div class="gray_box_login"></div>
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
