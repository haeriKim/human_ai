<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>Human&Ai</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Fira+Sans|Nanum+Gothic|" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
<div id="wrap">
    <!-- 컨테이너 -->
    <div id="container">
      <div class="main_content">
          <div class="main_text">
            <p>더 나은 삶을 기대할 수 있는 기술</p>
            <span><!--Creating Innovation Through Artificial Intelligence Technology-->
            미래를 대표하는 기술, 인공지능기업 휴먼앤에이아이를 소개합니다.</span>
          </div>


          <div class="main_title" onclick="location.href='h_sub_company.php'">
            <p class="human">H U M A N & A I<img src="img/star.png" alt="" width="90px" class='star star_07'></p>
            <!-- <p class="solution">S O L U T I O N</p> -->
            <div>
              <span>Technology that can expect a better life<br/>
                </span>
              <span>Introduce technologies of Human & Ai</span>
            </div>
          </div>

          <div class="map_area">
            <img src="img/worldmap.png" class="map_img"/>
            <img src="img/star.png" alt="" width="129px" class='star star_01'>
            <img src="img/star.png" alt="" width="100px" class='star star_02'>
            <img src="img/star.png" alt="" width="100px" class='star star_03'>
            <img src="img/star.png" alt="" width="110px" class='star star_04'>
            <img src="img/star.png" alt="" width="80px" class='star star_05'>
            <img src="img/star.png" alt="" width="70px" class='star star_06'>
          </div>

      </div><!-- main_content End-->
    </div><!-- 컨테이너(container)End -->
</div><!--wrap-->

<div id="app_wrap">
  <div id="app_container">
    <div class="app_main_content">
      <div class="app_main_text">
        <p>더 나은 삶을 기대할 수 있는 기술</p>
        <span>Human&Ai Corporation</span>
        <!--<span>미레를 대표하는 기술, 인공지능기업 휴먼앤에이아이를 소개합니다.</span>-->
      </div>


      <div class="app_main_fence">
        <div class="app_main_title" onclick="location.href='h_sub_company.php'">
          <p><img src="img/arrow.png" alt="화살표"></p>
          <p class="app_human">H U M A N & A I</p>

          <div class="app_main_story">
            <span>Technology that can expect a better life<br/></span>
            <span>Introduce technologies of Human & Ai</span>

          </div>


        </div><!--app_main_title End-->
      </div>

    </div><!--app_main_content-->
  </div><!--app_container End-->
</div><!--app_wrap End-->

<script>

var maintext = $(".main_title, .app_main_fence")
maintext.fadeIn(2500);

</script>
</body>
</html>
