<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>Phillis-coin</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/p_question.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
    <!-- wrap -->
    <div id="wrap">
        <!-- header -->
        <?php include "header.php";?>
        <!-- header End-->

        <!-- container -->
        <div id="container">
            <!-- content -->
            <div class="content question_content">
                <p class='title'>문의하기</p>
                <div class="line"></div>

                <form class="find_pw_form" action="#" method="post">
                    <input type="email" name="email" placeholder="이메일주소" autocomplete="off" class='email user_mail'>
                    <input type="submit" name="submit" value="비밀번호 찾기" class='find_pw_btn'>
                </form>
            </div><!-- content End-->

        </div><!-- container End -->
    </div><!-- wrap End -->
</body>
</html>
