<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>Human&Ai</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/h_sub_company.css">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Fira+Sans|Kumar+One+Outline|Nanum+Gothic|Oswald|PT+Serif|Signika|Work+Sans|Yanone+Kaffeesatz" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<body>
<div id="sub_wrap">

    <!-- nav_wrap -->
    <?php include "nav.php";?>
    <!-- nav_wrap End-->

    <!-- 컨테이너 -->
    <div id="container">
      <!--technology_content-->
      <div class="sub intro_content">
          <div class="intro_inner">
            <div class="bg_area">
              <h2>회사 소개</h2>
              <ul>
                  <li class='co_overview'>
                      <a href='#'>회사 개요</a>
                  </li>
                  <li class='co_history'>
                      <a href='#co_intro_history'>회사 연혁</a>
                  </li>
                  <li class='co_map'>
                      <a href='#co_intro_map'>사업 조직도</a>
                  </li>
                  <li class='co_vision1'>
                      <a href='#co_vision'>비전</a>
                  </li>
              </ul>
              <div class="co_intro">
                  <p class="titleColor">We Develop <br />
                  Fundamental AI technology.</p>
                  <b class="titleColor">
                    Artificial Intelligence With enterprise knowledge
                  </b>
                  <strong>
                    Human과 AI가 함께하는 회사
                  </strong>
                  <span>
                      ㈜휴먼앤에이아이(Huaman&AI)는 사람과 인공지능이 공존하는 4차 산업혁명시대에 인공지능의 장점을 살려<br>인간의 삶에 도움을 주는 제품을 개발, 생산, 판매하는 회사입니다.
                  </span>
              </div><!-- co_intro End-->
              <div class="co_intro_intro">
                <div class="second_title1">사람과 AI가 공존합니다</div>
                <div class="co_intro_frame">
                  <p class="co_intro_title first_indent ">
                      회사 소개
                  </p>
                  <div class="co_intro_content">
                    <p>(주)휴먼앤에이아이는 인공지능의 장점을 살려 인간의 삶에 도움을 주는 제품을 개발, 생산, 판매하는 회사입니다.</p>

                    <p>블록체인 기술이 4차산업혁명의 핵심 기술로 자리매김할 것을 예측하여 사용자의 개인정보 해킹을 막는 블록체인 보안시스템을 중점적으로 개발하고 있습니다.</p>

                    <p>현재 거래소의 고객정보나 암호화폐 등의 해킹을 방지하는 시스템을 개발하는 과정에 있으며, 차후 은행 등 금융권 고객의 개인정보 유출 방지, 정부나 지자체의 주민들 개인정보 보안에도 저희 기술을 적용시킬 계획에 있습니다.<br>
                    또한 인공지능(AI), 증강현실(AR), 음성인식 기술 등을 활용하여 독자가 책 안에 주인공들과 감정을 나누고 대화하며 즐기는 신개념 동화책을 개발하고 있습니다.</p>

                    <p>저희 회사는 지난 2001년 인공지능 기술의 하나인 사례기반추론 시스템을 개발하여 대기업에 납품한 이력이 있습니다. 인공지능 기술의 실용성과 안정성을 높이기 위해서 저희는 오랜시간동안 고민하고 노력해 왔습니다.</p>
                    <p>(주)휴먼앤에이아이는 사람과 인공지능이 함께하는 세상, 인간의 삶이 더 행복해지는 미래를 꿈꾸며 끊임없이 노력하는 기업이 되겠습니다.</p>
                    <div class="CEO_img">
                      <img src="img/CEO2.png" alt="CEO" class="CEO">
                    </div>
                  </div>
                 </div>
              </div><!-- co_intro_intro End -->
            </div>
            <div id="co_intro_history" class="co_intro_history">
              <p class="co_intro_title">
                회사 연혁
              </p>
              <img src="img/co_history.png" alt="회사 연혁">
            </div><!-- co_intro_history End-->
            <div id="co_intro_map" class="co_intro_map">
              <p class="co_intro_title">
                사업 조직도
              </p>
              <img src="img/co_map.png" alt="사업조직도">
            </div><!-- co_intro_map End -->

            <div id="co_vision" class="co_vision">
              <p class="co_intro_title">
                비전
              </p>
              <div class="vision_bg">
                <div class="vision_text">
                  <p>1. 구성원 성장과 비젼실현</p>
                  <span>전문 분야에서 경험을 바탕으로한 체계적이고 창의적인 지도</span><br/>
                  <br/>
                  <p>2. 연구 개발 중심</p>
                  <span>선진 기술을 기반으로 고객의 요구사항을 실현하는 능력</span><br/>
                  <br/>
                  <p>3. 신뢰할 수 있는 서비스</p>
                  <span>고객 주인 정신 실천 최상의 서비스</span><br/>
                </div>

              </div>

            </div>

            <a href="#"><div id="top_bt" class="top_bt">Top</div></a>

            <script>

            $(function(){
          		$(window).scroll(function(){
          			if($(this).scrollTop() > 200){
          				$("#top_bt").fadeIn("fast");
          			}else{
          				$("#top_bt").fadeOut("fast");
          			}
          		});
            $(".top_bt").click(function(){
                  $("html,body").animate({scrollTop:0},500);
                });
       });

            </script>

          </div><!-- intro_inner End -->
      </div><!--sub intro_content End-->
    </div><!-- 컨테이너(container)End -->
</div><!--wrap-->


</body>
</html>
