<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>RedAngel-coin</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/main.css">
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
            <div class="content main_content">
                <div class="title_wrap">
                    <h3 class='title'>
                        내잔고
                        <span class='have_coin'>0 RAC</span>
                    </h3>
                    <!-- <div class="line"></div> -->
                </div>
                <div class="main_menu">
                    <ul>
                        <li onclick="location.href='send.php'" class='send_li'>
                            <p>보내기</p>
                        </li>
                        <li onclick="location.href='receive.php'" class='receive_li'>
                            <p>받기</p>
                        </li>
                    </ul>
                    <ul>
                        <li onclick="location.href='sendList.php'" class='sendList_li'>
                            <p>보낸내역</p>
                        </li>
                        <li onclick="location.href='receiveList.php'" class='receiveList_li'>
                            <p>받은내역</p>
                        </li>
                    </ul>
                    <ul>
                        <li onclick="location.href='setting.php'" class='setting_li'>
                            <p>정보수정</p>
                        </li>
                        <li onclick="location.href='contact.php'" class='contact_li'>
                            <p>문의하기</p>
                        </li>
                    </ul>
                </div>
                <p class="copyright">CRYPTOCURRNCY REDANGEL-COIN SINCE 2018</p>
                <a href="#" class='go_thealls' target="_blank">디올스(The Alls) 거래소 바로가기</a>
            </div><!-- content End-->

        </div><!-- container End -->
    </div><!-- wrap End -->
</body>
</html>
