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
    <link rel="stylesheet" href="css/sendList.css">
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
                    <!--<p class='no_data'></p>-->
                    <table>
                      <colgroup>
                        <col width="20%">
                        <col width="80%">
                      </colgroup>
                      <tr>
                       <th>주소</th>
                       <td>지갑주소</td>
                     </tr>
                     <tr>
                       <th>TXID</th>
                       <td>ASBCEFGASDLFIAEHKS</td>
                     </tr>
                     <tr>
                       <th>수량</th>
                       <td>100000 IPC</td>
                     </tr>
                     <tr>
                       <th>날짜</th>
                       <td>2018/08/07 03:07:58</td>
                     </tr>
                    </table>
                </div>
            </div><!-- content End-->

        </div><!-- container End -->
    </div><!-- wrap End -->
</body>
</html>
