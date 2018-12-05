<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>Phillips-coin</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/sendReceiveList.css">
    <link rel="stylesheet" href="css/nav.css">
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
            <div class="content sendReceiveHistory_content">
              <h3 class='title'>받은내역</h3>
              <div class="line"></div>

                <div class="receiveHistory">
                    <!--<p class='no_data'>받은 내역이 없습니다.</p>-->
                    <table>
                      <tr>
                       <th>보낸주소</th>
                       <th>TXID</th>
                       <th>수량</th>
                     </tr>
                     <tr>
                       <td>지갑주소</td>
                       <td>ASBCEFGASDLFIAEHKS</td>
                       <td>1000000 RAC</td>
                     </tr>
                    </table>
                </div>
                <p class="copyright" style="margin-top:20px;">CRYPTOCURRNCY PHILLIPS-COIN SINCE 2018</p>
                <a href="#" class='go_thealls' target="_blank">디올스(The Alls) 거래소 바로가기</a>
            </div><!-- content End-->

        </div><!-- container End -->
    </div><!-- wrap End -->
</body>
</html>
