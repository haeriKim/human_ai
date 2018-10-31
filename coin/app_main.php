<!DOCTYPE html>
<html lang="ko" class='no-js'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script><!--//배너 슬라이더-->
    <title>The Alls</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer_index.css">
    <link rel="stylesheet" href="css/app_main.css">
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
    <!-- app_wrap -->
    <div id="app_wrap">
        <!-- app_container -->
        <div id="app_container">

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
                <!-- common_table_wrap -->
                <div class="content common_table_wrap con_1250">

                  <!-- app_page_content -->
                  <div class="box app_main_content">

                      <div class="app_main_step1">
                        <div class="logo_area">
                          <p><img src="img/logo.png" alt="로고"></p>
                          <span>The best crytocurrency exchange</span>
                        </div>

                        <div class="phone_area">
                        <!--  <ul>
                            <li></li>
                            <li></li>
                          </ul> -->

                          <p class="phone_main"><img src="img/phone_main.png" alt="phone_main" ></p>
                          <p class="coin_img"><img src="img/coin_main.png" alt="동전한닢" ></p>
                          <input type="button" name="app다운버튼" value="APP 다운로드">
                        </div>

                        <div class="coin_area">

                        </div>
                      </div>

                      <div class="app_main_step2">

                          <!-- rolling_ad -->
                          <div class="app_slideWrap">

                            <ul class="app_slideUl">
                              <li class="app_banner1 app_banner"></li>
                              <li class="app_banner2 app_banner"></li>
                            <!--  <li class="app_banner3 app_banner"></li>
                              <li class="app_banner4 app_banner"></li>-->
                            </ul>

                            <a href="#" class="app_nextBtn"></a>
                            <a href="#" class="app_prevBtn"></a>

                            <div class="app_slideshow-indicator"></div>
                          </div><!-- rolling_ad_img End-->

                      </div>

                      <div class="app_main_step3">
                        <div class="security_area">
                          <p><img src="img/m_security.png" alt="보안이미지"></p>
                        </div>
                      </div>


                  </div><!-- app_page_content End-->

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
