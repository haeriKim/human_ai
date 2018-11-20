<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>Phillips-coin</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="shortcut icon" href="img/favicon-16.png" type="image/x-icon">
    <link rel="icon" href="img/favicon-16.png" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon-32.png" type="image/x-icon">
    <link rel="icon" href="img/favicon-32.png" type="image/x-icon">
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
            <div class="content question_content">
                <h3 class='title'>문의하기</h3>
                <div class="line"></div>
                <p class='text'>문의주신 내용은 24시간 내에 입력하신 메일로 회신 드리겠습니다. <br/>
                감사합니다.</p>
                <form class="question_form" action="#" method="post">
                    <p>이메일주소</p>
                    <input type="email" name="email" placeholder="이메일주소를 입력해주세요." autocomplete="off" class='user_mail'>
                    <p>제목</p>
                    <input type="text" name="subject" placeholder="제목을 입력해주세요." autocomplete="off">
                    <p>내용</p>
                    <textarea placeholder="내용을 입력해주세요."></textarea>
                    <input type="submit" name="submit" value="문의하기" class='question_btn'>
                </form>
                <p class="copyright">CRYPTOCURRNCY PHILLIPS-COIN SINCE 2018</p>
                <a href="#" class='go_thealls' target="_blank">디올스(The Alls) 거래소 바로가기</a>
            </div><!-- content End-->

        </div><!-- container End -->
    </div><!-- wrap End -->
</body>
</html>
