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
                              <dt><a href="myinfo_login_password.php" title="로그인 비밀번호변경">로그인 비밀번호변경</a></dt>
                              <dt><a href="myinfo_security_password.php" title="보안 비밀번호변경">보안 비밀번호변경</a></dt>
                              <dt><a href="myinfo_security_change.php" title="보안 비밀번호 초기화">보안 비밀번호 초기화</a></dt>
                              <dt><a href="myinfo_phone.php" title="휴대폰 번호변경">휴대폰 번호변경</a></dt>
                              <dt><a href="myinfo_account.php" title="계좌변경">계좌변경</a></dt>
                              <dt><a href="myinfo_OTP.php" title="OTP 초기화">OTP 초기화</a></dt>
                              <dt class="active"><a href="myinfo_OTP_change.php" title="OTP 비활성화">OTP 비활성화</a></dt>
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
                      <h4>OTP 비활성화</h4>
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
                                <p class="myinfo_detail">Level&nbsp;<span class='user_level'>5</span></p>
                            </li>
                          </ul>
                        </div>
                      </div>

                        <table class="change_OTP_table">
                          <p class="change_OTP_table_text">SMS로 발송된 보안코드와 OTP 인증 앱에 표시된 인증번호(6자리)를 입력해주세요.</p>
                          <colgroup>
                            <col width="30%">
                            <col width="70%">
                          </colgroup>

                          <tr>
                            <th>휴대폰 SMS인증</th>
                              <td>
                                <input type="text" name="" value="" placeholder="휴대폰으로 전송된 인증번호를 입력하세요." required maxlength="6" minlength="6" class='input_your_sms_number'>
                                <input type="button" value="인증번호요청" id="request_count" class="request_number">
                                <input type="submit" value="인증번호재요청" id="confirm_count" class="cofirm_number">
                                <span id="count_down" class="change_OTP_count_down">03:00</span>
                                <p id='warning_message'>인증번호가 일치하지 않습니다.</p>
                              </td>
                          </tr>

                          <tr>
                            <th>OTP 인증번호</th>
                            <td>
                              <input type="text" name="" value="" placeholder="OTP번호를 입력하세요." required maxlength="6" minlength="6" class='input_your_sms_number'>
                              <p id='warning_message'>OTP번호가 일치하지 않습니다.</p>
                            </td>
                          </tr>

                        </table>

                        <div class="cancel_or_apply">
                          <input type="button" name="" value="취소" onclick="location.href='myinfo_OTP_change.php'" class="cancel_btn">
                          <input type="button" name="" value="비활성화" class="agree_btn" onclick="location.href='myinfo_OTP_change_success.php'">
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
                    <h2>인증번호 발송완료</h2>
                    <div class="popupbox_text">
                      <p>등록하신 휴대폰으로 인증번호를 발송하였습니다.</p>
                    </div>
                    <div class="cancel_or_apply">
                      <input type="button" name="" value="확인"  class="change_OTP_agree_btn">
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
