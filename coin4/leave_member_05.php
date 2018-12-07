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
    <link rel="stylesheet" href="css/sub_menu.css">
    <link rel="stylesheet" href="css/leave_member.css">
    <link rel="stylesheet" href="css/app_page_PC.css">
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
    <script src="js/prevent_back.js"></script>
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
                <!-- main_content -->
                <div class="content withdrawal_wrap con_1000">

                  <!-- withdrawal_area -->
                  <div class="box withdrawal_area">
                    <h3 class="title">회원탈퇴</h3>
                    <!-- track_ip_address -->

                      <div class="cer_center mypage_content">
                          <ul class="cer_level">
                            <li>
                              <img src="img/step1_off.png" alt="스텝1" class="step1_on"/>

                              <p class="img_area">
                                <img src="img/quit_1_off.png" alt="탈퇴안내"/>
                              </p>
                              <strong class="gray_title">탈퇴 안내</strong>

                            <li>

                              <img src="img/step2_off.png" alt="스텝2" class="step2_off"/>
                              <p class="img_area">
                                <img src="img/quit_2_off.png" alt="자산확인" />
                              </p>
                              <strong class="gray_title">자산 확인</strong>

                            </li>
                            <li>

                              <img src="img/step3_off.png" alt="스텝3" class="step3_off"/>
                              <p class="img_area">
                                <img src="img/quit_3_off.png" alt="탈퇴신청" />
                              </p>
                              <strong class="gray_title">탈퇴 신청</strong>

                            </li>
                            <li>

                              <img src="img/step4_off.png" alt="스텝4" class="step4_off"/>
                              <p class="img_area">
                                <img src="img/quit_4_off.png" alt="탈퇴처리"/>
                              </p>
                              <strong class="gray_title">탈퇴 처리</strong>

                            </li>
                            <li>

                              <img src="img/step5.png" alt="스텝5" class="step5_off"/>
                              <p class="img_area">
                                <img src="img/quit_5.png" alt="탈퇴완료"/>
                              </p>
                              <strong>탈퇴 완료</strong>

                            </li>
                          </ul>

                      <div class="withdrawal_text" id='withdrawal_text5'>
                        <h4>그동안 The Alls를 이용해주셔서 감사합니다.</h4>
                        <p>
                            The Alls에 등록된 회원님의 모든 개인정보는 삭제, 폐기 처리되었습니다.<br/>
                            더 나은 서비스를 위해 노력하는 The Alls가 되겠습니다.
                        </p>
                        <div class="cancel_or_apply">
                            <input type="button" name="go_main" value="메인으로" onclick="location.href='index.php'" class='agree_btn'/>
                        </div>

                      </div>


                    </div>
                  </div><!--withdrawal_area End-->

                </div><!-- withdrawal_wrap End-->
            </div><!-- content_wrap End-->

            <!-- footer_wrap -->
            <?php include "footer.php";?>
            <!-- footer_wrap End-->

            <!--sub_menu-->
            <?php include "sub_menu.php";?>
            <!--sub_menu End-->

        </div><!-- container End -->
    </div><!-- wrap End -->

    <!-- wrap -->
    <div id="app_wrap">
        <!-- container -->
        <div id="container">
          <!-- m_nav-->
          <?php include "m_nav.php";?>
          <!-- m_nav End-->

          <!-- m_header-->
          <?php include "m_header.php";?>
          <!-- m_header End-->

            <!-- content_wrap -->
            <div class="content_wrap">
                <!-- common_table_wrap -->
                <div class="content common_table_wrap con_1250">

                  <!-- app_page_content -->
                  <div class="app_pagePC_content">

                    <div class="app_pagePC_story">
                      <img src="img/exclamation6.png" alt="컴퓨터아이콘">
                      <p>현재 페이지는 디올스 PC버전을 통해<br/>
                      이용하실수 있습니다.</p>

                      <div class="app_pagePC_bt">
                        <input type="button" name="거래소버튼" value="홈으로 돌아가기" onclick="location.href='index.php'" class="app_bt">
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
