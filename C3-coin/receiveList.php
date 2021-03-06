<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>C3-coin</title>
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
              <div class='title_wrap'>
                  <h3 class='title'>받은내역</h3>
              </div>
              <!-- <div class="line"></div> -->

                <div class="receiveHistory">
                    <!--<p class='no_data'>받은 내역이 없습니다.</p>-->
                    <table>
                      <colgroup>
                        <col width="20%">
                        <col width="80%">
                      </colgroup>
                      <tr>
                       <th>받는사람</th>
                       <td>홍길동</td>
                     </tr>
                     <tr>
                       <th>TXID</th>
                       <td>ASBCEFGASDLFIAEHKS</td>
                     </tr>
                     <tr>
                       <th>수량</th>
                       <td>100000 C3C</td>
                     </tr>
                     <tr>
                       <th>날짜</th>
                       <td>2018/08/07 03:07:58</td>
                     </tr>
                    </table>
                </div>
                <p class="copyright" style="margin-top:20px;">CRYPTOCURRNCY C3-COIN SINCE 2018</p>
                <a href="#" class='go_thealls' target="_blank">디올스(The Alls) 거래소 바로가기</a>
            </div><!-- content End-->

        </div><!-- container End -->
    </div><!-- wrap End -->
</body>
</html>
