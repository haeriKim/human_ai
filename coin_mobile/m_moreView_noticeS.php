<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script><!--//배너 슬라이더-->
    <title>The Alls</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/notice.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/common.js"></script>
    <!-- <script src="js/fouc.js"></script> -->
</head>
<body>
    <!-- wrap -->
    <div id="wrap">
        <!-- container -->
        <div id="container">

          <div id ="header_wrap">
            <!-- header -->
            <div id="header2">
              <div class="headerTop">
                <input type="button" class="back" onclick="location.href='m_moreView_notice.php'"/>
                <h2 class="header_title">공지사항</h2>
                <div class="alarm_area">
                  <img src="img/bell.png" class="alarmBtn" alt="알림버튼" onclick="location.href='m_alarm.php'"/>
                </div>
              </div>
            </div> <!-- header End-->
          </div><!-- header_wrap End-->

            <!-- mycoin_content_wrap -->
            <div class="mycoin_content_wrap">
                <!-- m_mycoin_main -->
                <div class="content">
                    <div class="notice_inner">

                          <p class="notice_title">[안내] 개인정보 처리방침 변경 안내</p>
                          <div class="notice_story">
                            <span>안녕하세요 ○○입니다.</span><br/>
                            <br/>
                            <span>모바일웹 업데이트가 완료되어,</span><br/>
                            <span>이제 모바일웹 사용자 분들도 PC 및 앱과 동일하게 모든 기능을 이용하실 수 있습니다.</span><br/>
                            <br/>
                            <span>[업데이트된 기능 안내]</span><br/>
                            <br/>
                            <span>1) 입출금 - 모바일 출금 지원</span><br/>
                            <span>모바일웹에서 원화 및 암호화폐의 출금이 지원됩니다.</span><br/>
                            <span>모바일웹 우측 상단 메뉴 > 입출금에서 이용하실 수 있습니다.</span><br/>
                            <span>보안정책상, 모바일 출금은 원화/암호화폐 모두 보안등급 레벨 4부터 가능합니다.</span><br/>
                            <span>입금은 기존 정책과 동일하게 이용가능합니다.</span><br/>
                            <span>*모바일 출금 기능은 아이폰 및 안드로이드 앱에도 곧 업데이트될 예정입니다.</span><br/>
                            <br/>
                            <span>기다려주신 모바일웹 사용자 여러분께 감사드리며,</span><br/>
                            <span>앞으로 더욱 개선된 거래환경 제공을 위해 최선을 다하겠습니다.</span><br/>
                            <span>감사합니다.</span><br/>
                            <br/>
                            <span>[업데이트된 기능 안내]</span><br/>
                          </div>

                          <div class="next_story">
                            <ul>
                                <li><a href=""><p class="prev_img">이전글</p><p>[거래] 원화 마켓 신규 상장(베이직어텐션토큰 BAT, 애드엑스 ADX, 애드토큰 ADT)</p></a></li>
                                <li><a href=""><p class="next_img">다음글</p><p>[입출금] 윌렛 업그레이드 6차 완료(신규 입금 주소 발급 필요한 암호화폐 확인 필수)</p></a></li>
                            </ul>
                          </div>

                          <div class="notice_bt_area">
                            <input type="button" name='button' value="목록으로" onclick="location.href='m_moreView_notice.php'"class="next_bt">
                          </div>


                    </div><!-- assets_area End-->
                </div><!-- m_mycoin_main End-->
            </div><!-- mycoin_content_wrap End-->

            <div class="none_box"></div>
            <!-- nav -->
            <?php include "nav.php";?>
            <!-- nav End-->

        </div><!-- container End -->
        <!-- nav_wrap -->
        <!-- nav_wrap End-->
    </div><!-- wrap End -->
</body>
</html>
