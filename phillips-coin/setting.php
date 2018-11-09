<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>Phillis-coin</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/setting.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
    <!-- wrap -->
    <div id="wrap">

        <!-- container -->
        <div id="container">

            <!-- nav -->
            <?php include "nav.php";?>
            <!-- nav End-->

            <!-- header -->
            <?php include "header.php";?>
            <!-- header End-->

            <!-- content -->
            <div class="content changeInfo_content">
                <p class='title'>비밀번호 변경</p>
                <div class="line"></div>
                <form class="change_pw_form" action="#" method="post">
                    <input type="password" name="password" placeholder="현재 비밀번호" autocomplete="off" class='password user_pass'>
                    <input type="password" name="new_password" placeholder="새로운 비밀번호" autocomplete="off" class='new_password user_pass'>
                </form>
                <p class='title'>휴대폰번호 변경</p>
                <div class="line"></div>
                <form class="change_phone_form" action="#" method="post">
                    <select class="country_select" name="국가">
                        <option value="국가" disabled selected="selected">국가</option>
                        <option value="대한민국">대한민국</option>
                        <option value="중국">중국</option>
                        <option value="일본">일본</option>
                    </select>
                    <div class="phone_wrap">
                        <input type="text" name="phone" placeholder="휴대폰번호" autocomplete="off" class='phone user_phone'>
                        <input type="button" name="code_send" value="인증받기" class='code_send'>
                    </div>
                    <input type="text" name="code" placeholder="인증번호" autocomplete="off" class='code'>
                    <input type="submit" name="submit" value="회원정보수정" class='changeInfo_btn'>
            </div><!-- content End-->

        </div><!-- container End -->
    </div><!-- wrap End -->
</body>
</html>
