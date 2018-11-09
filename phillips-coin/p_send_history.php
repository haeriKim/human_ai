<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>Phillis-coin</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/p_send_history.css">
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
            <div class="content sendHistory_content">
                <p class='title'>보낸내역</p>
                <div class="line"></div>
                <div class="sendHistory">
                    <p class='no_data'>보낸 내역이 없습니다.</p>
                </div>
            </div><!-- content End-->

        </div><!-- container End -->
    </div><!-- wrap End -->
</body>
</html>
