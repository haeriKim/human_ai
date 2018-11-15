<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>Human&Ai</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/h_sub_contact.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/m_header.css">
    <link rel="shortcut icon" href="img/favicon-16.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon-16.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon-32.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon-32.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon-16.png" type="image/x-icon">
    <link rel="icon" href="img/favicon-16.png" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon-32.png" type="image/x-icon">
    <link rel="icon" href="img/favicon-32.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Fira+Sans|Nanum+Gothic|" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/common.js"></script>
</head>
<body>
<div id="sub_wrap">

  <!-- nav_wrap -->
  <?php include "nav.php";?>
  <!-- nav_wrap End-->

  <!-- m_header -->
  <?php include "m_header.php";?>
  <!-- m_header End-->

    <!-- 컨테이너 -->
    <div id="container">
      <!--contact_content-->
      <div class="contact_content">
        <div class="contact_content_inner">
          <h2>오시는 길</h2>
          <!--map 울타리-->
          <div class="map_fence">
          <!--contact_inner-->
            <div class="contact_inner">
                <h3>Human & AI</h3>
                    <!--placeholer-->
                    <ul>
                      <li class="text1 text">
                            <img src="img/placeholder.png" alt="좌표">
                            <p>서울특별시 서초구 신반포로 326-10</p>
                            <p>대종빌딩 305호 (주)휴먼앤에이아이</p>

                      </li>

                    </ul>
                    <!--//placeholder 끝-->

                    <!--telephone-->
                    <ul>

                      <li class="text2 text">
                                <img src="img/telephone.png" alt="전화기">
                                <a href="tel:02-2269-8777">TEL : 02-2269-8777</a>
                                <p>FAX : 070-7543-0023</p>

                      </li>

                    </ul><!--//telephone End-->
                    <!--arroba-->
                    <ul>
                      <li class="text3 text">
                          <img src="img/arroba.png" alt="이메일">
                          <p>ai-master@human-ai.co.kr</p>

                      </li>
                    </ul><!--//arroba End-->
                    <!--worldwide-->
                    <ul>
                      <li class="text4 text">
                          <img src="img/worldwide.png" alt="홈페이지">
                          <p><a href="http://human-ai.co.kr" target="_blank">http://human-ai.co.kr</a></p>

                      </li>
                    </ul><!--//worldwide End-->
            </div><!--//map End-->

          </div><!--//map 울타리 End-->


        <!--지도-->
        <div class="map">
          <div id="daumRoughmapContainer1534832533323" class="root_daum_roughmap root_daum_roughmap_landing"></div>

          <script charset="UTF-8" class="daum_roughmap_loader_script" src="http://dmaps.daum.net/map_js_init/roughmapLoader.js"></script>

          <script charset="UTF-8">
            new daum.roughmap.Lander({
              "timestamp" : "1534832533323",
              "key" : "pmg5"
            }).render();
          </script>
        </div>
        <!--//지도-->

    </div><!--contact_content End-->
  </div><!-- 컨테이너(container)End -->
</div><!--wrap-->
</body>
</html>
