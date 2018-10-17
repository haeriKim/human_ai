<!DOCTYPE html>
<html lang="ko" class='no-js'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script><!--//배너 슬라이더-->
    <title>CCE</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/common_table.css">
    <link rel="stylesheet" href="css/sub_menu.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="shortcut icon" href="img/favicon-16.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon-16.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon-32.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon-32.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon-16.png" type="image/x-icon">
    <link rel="icon" href="img/favicon-16.png" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon-32.png" type="image/x-icon">
    <link rel="icon" href="img/favicon-32.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/common.js"></script>
    <script src="js/fouc.js"></script>
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
                <!-- common_table_wrap -->
                <div class="content common_table_wrap con_1000">

                  <!-- common_table_content -->
                  <div class="common_table_content">
                      <h2 class='title'>인증 레벨별 한도</h2>
                      <div class="mypage_content">
                          <table class="common_table">
                              <colgroup>
                                  <col style="width:8%;">
                                  <col style="width:7%;">
                                  <col style="width:5%;">
                                  <col style="width:16%;">
                                  <col style="width:16%;">
                                  <col style="width:16%;">
                                  <col style="width:16%;">
                                  <col style="width:16%;">
                              </colgroup>
                              <thead>
                                <tr>
                                  <th colspan="3">구분</th>
                                  <th>Level 1</th>
                                  <th>Level 2</th>
                                  <th>Level 3</th>
                                  <th>Level 4</th>
                                  <th>Level 5</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class='certification_method'>
                                    <th colspan="3">인증방법</th>
                                    <td>이메일인증</td>
                                    <td>보안비밀번호 생성</td>
                                    <td>실명인증</td>
                                    <td>계좌인증</td>
                                    <td>OTP 인증</td>
                                </tr>
                                <tr>
                                    <th rowspan="2">입금한도</th>
                                    <th colspan="2">원화(KRW)</th>
                                    <td>0원</td>
                                    <td>0원</td>
                                    <td>0원</td>
                                    <td>무제한</td>
                                    <td>무제한</td>
                                </tr>
                                <tr>
                                    <th colspan="2">암호화폐</th>
                                    <td>0원</td>
                                    <td>무제한</td>
                                    <td>무제한</td>
                                    <td>무제한</td>
                                    <td>무제한</td>
                                </tr>
                                <tr>
                                    <th rowspan="9">출금한도</th>
                                    <th rowspan="2" class='long_th'>
                                        <p>원화</p>
                                        <p>(KRW)</p>
                                    </th>
                                    <th>1회</th>
                                    <td>0원</td>
                                    <td>0원</td>
                                    <td>0원</td>
                                    <td>0원</td>
                                    <td>50,000,000원</td>
                                </tr>
                                <tr>
                                    <th>1일</th>
                                    <td>0원</td>
                                    <td>0원</td>
                                    <td>0원</td>
                                    <td>0원</td>
                                    <td>200,000,000원</td>
                                </tr>
                                <tr>
                                    <th colspan="2" class='long_th'>
                                        <p>비트코인</p>
                                        <p>(BTC)</p>
                                    </th>
                                    <td>0 BTC</td>
                                    <td>0 BTC</td>
                                    <td>0 BTC</td>
                                    <td>0 BTC</td>
                                    <td>50 BTC</td>
                                </tr>
                                <tr>
                                    <th colspan="2" class='long_th'>
                                        <p>비트코인캐시</p>
                                        <p>(BCH)</p>
                                    </th>
                                    <td>0 BCH</td>
                                    <td>0 BCH</td>
                                    <td>0 BCH</td>
                                    <td>0 BCH</td>
                                    <td>600 BCH</td>
                                </tr>
                                <tr>
                                    <th colspan="2" class='long_th'>
                                        <p>이더리움</p>
                                        <p>(ETH)</p>
                                    </th>
                                    <td>0 ETH</td>
                                    <td>0 ETH</td>
                                    <td>0 ETH</td>
                                    <td>0 ETH</td>
                                    <td>1,000 ETH</td>
                                </tr>
                                <tr>
                                    <th colspan="2" class='long_th'>
                                        <p>이더리움클래식</p>
                                        <p>(ETC)</p>
                                    </th>
                                    <td>0 ETC</td>
                                    <td>0 ETC</td>
                                    <td>0 ETC</td>
                                    <td>0 ETC</td>
                                    <td>5,000 ETC</td>
                                </tr>
                                <tr>
                                    <th colspan="2" class='long_th'>
                                        <p>이오스</p>
                                        <p>(EOS)</p>
                                    </th>
                                    <td>0 EOS</td>
                                    <td>0 EOS</td>
                                    <td>0 EOS</td>
                                    <td>0 EOS</td>
                                    <td>50,000 EOS</td>
                                </tr>
                                <tr>
                                    <th colspan="2" class='long_th'>
                                        <p>리플</p>
                                        <p>(XRP)</p>
                                    </th>
                                    <td>0 XRP</td>
                                    <td>0 XRP</td>
                                    <td>0 XRP</td>
                                    <td>0 XRP</td>
                                    <td>30,000 XRP</td>
                                </tr>
                                <tr>
                                    <th colspan="2" class='long_th'>
                                        <p>에이다</p>
                                        <p>(ADA)</p>
                                    </th>
                                    <td>0 ADA</td>
                                    <td>0 ADA</td>
                                    <td>0 ADA</td>
                                    <td>0 ADA</td>
                                    <td>4,000,000 ADA</td>
                                </tr>
                              </tbody>
                          </table>
                          <a href="#" class='close_btn'>확인</a>
                      </div>
                  </div><!-- common_table_content End-->

                </div><!-- common_table_wrap End-->
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
