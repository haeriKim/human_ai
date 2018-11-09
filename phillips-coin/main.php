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
    <link rel="stylesheet" href="css/main.css">
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
            <div class="content main_content">
                <h3 class='title'>
                    내잔고
                    <span class='have_coin'>0 PHS</span>
                </h3>
                <div class="line"></div>
                <div class="main_menu">
                    <ul>
                        <li onclick="location.href='send.php'">
                            <img src="img/icon_send.png" alt="보내기">
                            <p>보내기</p>
                        </li>
                        <li onclick="location.href='receive.php'">
                            <img src="img/icon_recive.png" alt="받기">
                            <p>받기</p>
                        </li>
                    </ul>
                    <ul>
                        <li onclick="location.href='sendList.php'">
                            <img src="img/icon_sendList.png" alt="보낸내역">
                            <p>보낸내역</p>
                        </li>
                        <li onclick="location.href='receiveList.php'">
                            <img src="img/icon_reciveList.png" alt="받은내역">
                            <p>받은내역</p>
                        </li>
                    </ul>
                    <ul>
                        <li onclick="location.href='setting.php'">
                            <img src="img/icon_setting.png" alt="정보수정">
                            <p>정보수정</p>
                        </li>
                        <li onclick="location.href='contact.php'">
                            <img src="img/icon_contact.png" alt="문의하기">
                            <p>문의하기</p>
                        </li>
                    </ul>
                </div>
            </div><!-- content End-->

        </div><!-- container End -->
    </div><!-- wrap End -->
</body>
</html>
