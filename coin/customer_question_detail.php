<!DOCTYPE html>
<html lang="ko" class="no-js">
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
    <link rel="stylesheet" href="css/question.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/sub_menu.css">
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
                <!-- notice_detail_wrap -->
                <div class="content question_detail_wrap con_1250">
                  <div class="content_nav">
                    <h4>고객지원</h4>
                    <ul>
                        <li><a href="" title="FAQ">FAQ</a></li>
                        <li class='on'>
                          <a href="#" title="1:1 문의" class='more_menu'>1:1 문의</a>
                          <dl class="nav_dropdown question_dd on">
                              <dt><a href="" title="1:1 문의하기">1:1 문의하기</a></dt>
                              <dt class="ative"><a href="customer_questionList.php" title="문의내역">문의내역</a></dt>
                          </dl>
                        </li>
                        <li>
                          <a href="#" title="인증변경안내" class='more_menu'>인증변경안내</a>
                          <dl class="nav_dropdown changeA_dd off">
                              <dt><a href="guide_security.php" title="보안비밀번호 초기화">보안비밀번호 초기화</a></dt>
                              <dt><a href="guide_account.php" title="계좌 변경">계좌변경</a></dt>
                              <dt><a href="guide_OTP.php" title="OTP 변경">OTP 변경</a></dt>
                          </dl>
                        </li>
                        <li><a href="fee_table.php" title="수수료 안내">수수료 안내</a></li>
                    </ul>
                  </div><!-- content_nav End-->

                  <!-- notice_detail -->
                  <div class="box question_detail question_detail_area">
                    <h3 class="title">문의내역</h3>
                    <!-- notice_detail_inner -->
                    <div class="question_detail_inner">

                        <div class="question_title_wrap">
                            <h4>[입출금] 입출금 문의관련에 대해 문의 드립니다.</h4>
                            <p class='upload_day'>2018-10-01</p>
                        </div>

                        <div class="question_detail_inner_content">
                            <p>

                                원화 입금후 몇시간 뒤 확인이 가능한가요?<br/>
                                <br/>
                                RE:<br/>
                                <br/>
                                안녕하세요 ○○입니다.<br/><br/>
                                모바일웹 업데이트가 완료되어,<br/>
                                이제 모바일웹 사용자 분들도 PC 및 앱과 동일하게 모든 기능을 이용하실 수 있습니다.<br/><br/>

                                [업데이트된 기능 안내]<br/><br/>
                                1) 입출금 - 모바일 출금 지원<br/>
                                모바일웹에서 원화 및 암호화폐의 출금이 지원됩니다.<br/>
                                모바일웹 우측 상단 메뉴 > 입출금에서 이용하실 수 있습니다.<br/>
                                보안정책상, 모바일 출금은 원화/암호화폐 모두 보안등급 레벨 4부터 가능합니다.<br>
                                입금은 기존 정책과 동일하게 이용가능합니다.<br>
                                *모바일 출금 기능은 아이폰 및 안드로이드 앱에도 곧 업데이트될 예정입니다.<br><br>
                                기다려주신 모바일웹 사용자 여러분께 감사드리며,<br>
                                앞으로 더욱 개선된 거래환경 제공을 위해 최선을 다하겠습니다.<br>
                                감사합니다.<br><br>

                                [업데이트된 기능 안내]<br/><br/>
                                2) 입출금 - 모바일 출금 지원<br/>
                                모바일웹에서 원화 및 암호화폐의 출금이 지원됩니다.<br/>
                                모바일웹 우측 상단 메뉴 > 입출금에서 이용하실 수 있습니다.<br/>
                                보안정책상, 모바일 출금은 원화/암호화폐 모두 보안등급 레벨 4부터 가능합니다.<br>
                                입금은 기존 정책과 동일하게 이용가능합니다.<br>
                                *모바일 출금 기능은 아이폰 및 안드로이드 앱에도 곧 업데이트될 예정입니다.<br><br>
                                기다려주신 모바일웹 사용자 여러분께 감사드리며,<br>
                                앞으로 더욱 개선된 거래환경 제공을 위해 최선을 다하겠습니다.<br>
                                감사합니다.
                            </p>
                        </div>

                        <div class="question_detail_footer">
                            <a href="customer_questionList.php" class='go_back_notice'>목록으로</a>
                            <ul class="question_preview">
                                <li class='prev_question_title'>
                                    <a href='#'>
                                        <p class='prev_img'>이전글</p>
                                        <p>[거래] 더올스에서 이더리움 28,0000BTH를 매수했습니다.</p>
                                    </a>
                                </li>
                                <li class='next_question_title'>
                                    <a href='#'>
                                        <p class='next_img'>다음글</p>
                                        <p>[기타문의] The Alls 이용약관은 어디서 볼 수 있나요?</p>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div><!-- notice_detail_inner END -->
                  </div><!-- notice_detail End-->
                 </div><!-- notice_detail_wrap End-->
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
