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
    <link rel="stylesheet" href="css/myinfo_change.css">
    <link rel="stylesheet" href="css/sub_menu.css">
    <link rel="stylesheet" href="css/popup.css">
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
                <div class="content certification_content con_1250">
                  <!--content_nav -->
                  <div class="content_nav">
                    <h4>마이페이지</h4>
                    <ul>
                        <li><a href="myinfo.php" title="회원 정보">회원 정보</a></li>
                        <li class="on">
                          <a href="#" title="회원 정보관리" class='more_menu'>회원 정보관리</a>
                          <dl class="nav_dropdown info_dd">
                              <dt><a href="myinfo_login_password.php" title="로그인 비밀번호변경" >로그인 비밀번호변경</a></dt>
                              <dt><a href="myinfo_security_password.php" title="보안 비밀번호변경">보안 비밀번호변경</a></dt>
                              <dt><a href="myinfo_security_change.php" title="보안 비밀번호 초기화">보안 비밀번호 초기화</a></dt>
                              <dt class="active"><a href="#" title="휴대폰 번호변경">휴대폰 번호변경</a></dt>
                              <dt><a href="myinfo_account.php" title="계좌변경">계좌변경</a></dt>
                              <dt><a href="myinfo_OTP.php" title="OTP 초기화">OTP 초기화</a></dt>
                              <dt><a href="myinfo_OTP_change.php" title="OTP 비활성화">OTP 비활성화</a></dt>
                          </dl>
                        </li>
                        <li><a href="certification.php" title="인증센터">인증센터</a></li>
                        <li><a href="track_ip_address.php" title="접속 이력확인">접속 이력확인</a></li>
                        <li>
                          <a href="#" title="알림" class='more_menu'>알림</a>
                          <dl class="nav_dropdown alarm_dd off">
                              <dt><a href="alarm.php" title="알림 상세">알림 상세</a></dt>
                              <dt><a href="alarm_setting.php" title="알림 설정">알림 설정</a></dt>
                          </dl>
                        </li>
                    </ul>
                  </div><!-- content_nav End-->
                  <div class="box certification_area ">
                    <h3 class="title">회원 정보관리</h3>
                    <div class="myinfo_main_box cer_center mypage_content">
                      <div class="cer_center">
                      <h4>휴대폰 번호변경</h4>
                        <div class="myinfo_small_info_box">
                          <div class="myinfo_box1">
                            <strong class="user_name">가*다</strong>
                            <p class="user_mail">abc@naver.com</p>
                          </div>
                          <div class="myinfo_box2">
                            <ul class="list_1">
                              <li>
                                <p class="myinfo_title">휴대폰</p>
                                <p class="myinfo_detail user_phone">
                                  <span>010</span>-<span>1***</span>-<span>***0</span>
                                </p>
                              </li>
                            </ul>
                            <ul class="list_2">
                              <li>
                                  <p class="myinfo_title">등급</p>
                                  <p class="myinfo_detail">Level&nbsp;
                                      <span class='user_level lv_3'>3</span>
                                      <span class='user_level lv_4'>4</span>
                                      <span class='user_level lv_5'>5</span>
                                  </p>
                              </li>
                            </ul>
                          </div>
                        </div>

                        <div class="myinfo_text_box">
                            <p>휴대폰 번호변경 시 번호가 초기화되며 보안등급이 <span>Level 2로 하향</span>됩니다.</p><br/>
                            <p>휴대폰 번호 초기화 시, <span>계좌인증(Level 4) 및 OTP 인증(Level 5)도 함께 초기화</span>되어 <span>재등록</span>해주셔야 합니다.</p><br/>
                            <p>휴대폰 번호 재인증 전까지 거래 및 입출금이 불가능합니다.</p><br/>
                            <br/>
                            <p>위 조치는 휴대폰 도난, 피싱 등 금융 사고 예방을 위한 것으로 조금 불편하시더라도 많은 양해 부탁드립니다.</p>
                        </div>

                        <div class="cancel_or_apply">
                          <input type="button" name="" value="취소" onclick="location.href='myinfo.php'" class="cancel_btn">
                          <input type="button" name="" value="변경 요청" class="agree_btn request_change">
                        </div>


                      </div><!-- cercenter End-->
                    </div><!-- myinfo_main_box End -->
                  </div><!--certification_area End-->
                </div><!-- certification_content End-->
            </div><!-- content_wrap End-->

            <!-- footer_wrap -->
            <?php include "footer.php";?>
            <!-- footer_wrap End-->

            <!--sub_menu-->
            <?php include "sub_menu.php";?>
            <!--sub_menu End-->

        </div><!-- container End -->
    </div><!-- wrap End -->

<div id="full">
            <!-- full_content -->
            <div id="popupbox" class='box popup phone_change_box'>
              <div class="full_inner">
                <h2>휴대폰 번호변경하기</h2>
                <div class="popupbox_text">
                  <p class="user_mail">abc@naver.com</p>
                  <p class="small">해당 메일로 휴대폰 번호변경 요청을 하시겠습니까?</p>
                </div>
                <div class="cancel_or_apply">
                  <input type="button" name="" value="취소" class="cancel_btn phone_cancel_btn">
                  <input type="button" name="" value="변경 요청하기" class="agree_btn request_btn">
                </div>

              </div>
            </div><!-- full_content End-->

          <!-- full_content -->
          <div id="popupbox" class='box popup phone_change_box2'>
            <div class="full_inner">
              <h2>메일 발송완료</h2>
              <div class="popupbox_text">
                <p>가입된 이메일 주소로 인증 메일이 발송되었습니다.</p>
                <p>메일을 확인해주세요.</p>
              </div>
              <div class="cancel_or_apply">
                <input type="button" name="" value="확인" onclick="location.href='myinfo_phone2.php'" class="cancel_btn_ok">
              </div>

            </div>
          </div><!-- full_content End-->
        <div id="shadow"></div>
</div>

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
