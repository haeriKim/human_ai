<!DOCTYPE html>
<html lang="ko" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script><!--//배너 슬라이더-->
    <title>The Alls</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/mywallet_complete.css">
    <link rel="stylesheet" href="css/sub_menu.css">
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

          <!-- m_nav-->
          <?php include "m_nav.php";?>
          <!-- m_nav End-->

          <!-- m_header-->
          <?php include "m_header.php";?>
          <!-- m_header End-->


          <!-- header_wrap -->
          <?php include "header.php";?>
          <!-- header_wrap End-->

            <!-- content_wrap -->
            <div class="content_wrap">
                <!-- mycoin_c_content -->
                <div class="content mycoin_c_content">
                      <!-- con_1000 -->
                    <div class="box con_1000">
                      <!-- input_KRW_complete -->
                      <div id='input_KRW_complete' class='mywallet_complete KRW_complete'>
                        <h3>원화(KRW) 입급</h3>
                          <div class="complete_text">
                            <img src="img/won_up.png" alt="원화입금아이콘" class="fixing_icon">
                            <p class='complete_paragraph'>입금 신청이 완료되었습니다.</p>
                            <span class="limit">처음 원화(KRW) 입금하시는 경우, <span class="hour">3일(72시간)</span> 동안 KRW 및 암호화폐의 출금이 제한됩니다.</span>
                          </div>

                          <form class="" action="#" method="post">
                              <!-- account_table_wrap -->
                              <div class="account_table_wrap">
                                  <!-- send_account -->
                                  <div class="send_account">
                                      <p>입금 정보</p>
                                      <table class='left_thick_table'>
                                          <tbody>
                                              <tr>
                                                  <th>은행</th>
                                                  <td><span class='bankName'>○○은행</span></td>
                                              </tr>
                                              <tr>
                                                  <th>계좌번호</th>
                                                  <td><span class='user_account'>1234-567-8910-11-123</span></td>
                                              </tr>
                                              <tr>
                                                  <th>예금주</th>
                                                  <td>(주)코인거래소</td>
                                              </tr>
                                              <tr>
                                                  <th>입금자명</th>
                                                  <td class='look_again'><span class='user_name'>가나다</span>1234</td>
                                              </tr>
                                          </tbody>
                                      </table>
                                  </div><!-- send_account End-->
                              </div><!-- account_table_wrap End-->

                              <div class="send_info_01">
                                  <p class='input_money'>입금 금액</p>
                                  <p class='money_account'>11,000,000<span>KRW</span></p>
                              </div>
                              <div class="button_group">
                                  <input type="button" name="submit" value="거래소 바로가기" class='viewList button_style'/>
                              </div>
                          </form>
                      </div><!-- input_KRW_complete End-->
                        </div>  <!-- con_1000 End-->
                  </div><!-- mycoin_c_content End-->
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
