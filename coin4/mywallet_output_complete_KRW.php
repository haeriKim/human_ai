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
                <!-- main_content -->
                <div class="content mycoin_c_content">
                      <!-- con_1000 -->
                    <div class="box con_1000">
                      <!-- output_KRW_complete -->
                      <div id='output_KRW_complete' class='mywallet_complete KRW_complete'>
                          <h3>원화(KRW) 출금</h3>
                          <div class="complete_text">
                            <img src="img/won_down.png" alt="원화출금아이콘" class="fixing_icon">
                            <p class='complete_paragraph'>출금 신청이 완료되었습니다.</p>
                          </div>
                          <form class="" action="#" method="post">
                              <!-- account_table_wrap -->
                              <div class="account_table_wrap">
                                  <!-- send_account -->
                                  <div class="send_account">
                                      <p>출금 정보</p>
                                      <!-- left_thick_table -->
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
                                                  <td><span class='user_name'>가나다</span></td>
                                              </tr>
                                              <tr>
                                                  <th>출금날짜</th>
                                                  <td>2018-09-06 19:06:05</td>
                                              </tr>
                                          </tbody>
                                      </table><!-- left_thick_table End-->
                                  </div><!-- send_account End-->
                              </div><!-- account_table_wrap End-->

                              <div class="send_info_01">
                                  <p class='input_money'>출금 금액</p>
                                  <p class='money_account'>11,000,000<span>KRW</span></p>
                              </div>
                              <div class="button_group">
                                  <input type="button" name="submit" value="거래소 바로가기" class='viewList button_style'/>
                              </div>
                          </form>
                      </div><!-- output_KRW_complete End-->
                        </div>  <!-- con_1000 End-->
                  </div><!-- mycoin_content End-->
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
