<!DOCTYPE html>
<html lang="ko">
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
                    <div id="login_area">
                        <form class="" action="#" method="post">
                            <h3>로그인</h3>
                            <label for="e_mail" class='skip_label'>이메일주소</label>
                            <input type="email" name="e_mail" value="" placeholder="이메일주소" id='e_mail' required autocomplete="off">
                            <label for="password" class='skip_label'>비밀번호</label>
                            <input type="password" name="password" value="" placeholder="비밀번호" id='password' required autocomplete="off">
                            <p class='wrong_info'>이메일주소와 비밀번호를 확인해주세요.</p>
                            <input type="submit" name="로그인" value="로그인" class='button_box login_button'>
                            <!-- login_info -->
                        </form>

                        <div class="login_info">
                            <a href="#">회원가입</a>
                            <ul>
                                <li><a href='login_findPw.html'>비밀번호 찾기</a></li>
                                <li>
                                    <a href='#'>이메일 주소 찾기</a>
                                    <p class='e_mail_find'>당사 고객센터(1644-4272)로 연락주시면<br/>확인하여 안내드릴 수 있도록 하겠습니다.</p>
                                </li>
                            </ul>

                        </div>    <!-- login_info End-->

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
