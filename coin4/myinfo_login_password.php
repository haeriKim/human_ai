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
    <link rel="stylesheet" href="css/myinfo_login_password.css">
    <link rel="stylesheet" href="css/sub_menu.css">
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

</script>
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
                              <dt class="active"><a href="#" title="로그인 비밀번호변경">로그인 비밀번호변경</a></dt>
                              <dt><a href="myinfo_security_password.php" title="보안 비밀번호변경">보안 비밀번호변경</a></dt>
                              <dt><a href="myinfo_security_change.php" title="보안 비밀번호 초기화">보안 비밀번호 초기화</a></dt>
                              <dt><a href="myinfo_phone.php" title="휴대폰 번호변경">휴대폰 번호변경</a></dt>
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
                      <h4>로그인 비밀번호변경</h4>
                        <div class="myinfo_small_info_box">
                          <div class="myinfo_box1">
                            <strong class="user_name">가*다</strong>
                            <strong class='no_name'>-</strong>
                            <p class="user_mail">abc@naver.com</p>
                          </div>
                          <div class="myinfo_box2">
                            <ul class="list_1">
                              <li>
                                <p class="myinfo_title">휴대폰</p>
                                <p class="myinfo_detail user_phone">
                                  <span>010</span>-<span>1***</span>-<span>***0</span>
                                </p>
                                <p class='myinfo_detail no_phone'><span>-</span></p>
                              </li>
                            </ul>
                            <ul class="list_2">
                              <li>
                                  <p class="myinfo_title">등급</p>
                                  <p class="myinfo_detail">Level&nbsp;
                                      <span class='user_level lv_1'>1</span>
                                      <span class='user_level lv_2'>2</span>
                                      <span class='user_level lv_3'>3</span>
                                      <span class='user_level lv_4'>4</span>
                                      <span class='user_level lv_5'>5</span>
                                  </p>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <!-- myinfo_small_info_box -->
                        <div class="myinfo_sub_box ">
                          <form class="" action="#" method="post">
                            <div class="myinfo_table_wrap">
                              <!-- send_login_password -->
                              <div class="send_login_password">
                                <table class='left_thick_table'>
                                  <tbody>
                                    <tr class='change_password_tr1'>
                                      <th>현재 로그인 비밀번호</th>
                                      <td>
                                          <input type="password" class='user_pass' name="pre_password" value="" placeholder="현재 로그인 비밀번호를 입력하세요." required maxlength="15" minlength="8" />
                                          <p id='warning_message'>비밀번호가 일치하지 않습니다.</p>
                                      </td>
                                    </tr>
                                    <tr class='change_password_tr2'>
                                      <th>새로운 로그인 비밀번호</th>
                                      <td>
                                          <input type="password" class='user_pass' name="password" value="" placeholder="새로운 로그인 비밀번호를 입력하세요." required maxlength="15" minlength="8" />
                                          <div class="question_smallbox"><img src="img/question.png">
                                            <div class="password_question_detail">
                                                  <strong>안전한 로그인 비밀번호 작성법</strong>
                                                  -비밀번호는 영문 소문자, 대문자, 숫자, 특수문자를 포함하여 10자리 이상으로 만드셔야 합니다. <br />
                                                  -비밀번호는 최대한 길게 작성해주세요.<br />
                                                  -단, 허용되는 특수문자(~!@#$%^*)외 다른 특수문자는 사용할 수 없습니다.<br />
                                                  -ID, 생일, 전화번호 등 개인정보를 이용해 만든 비밀번호를 사용하지 마세요.<br />
                                                  -포털 사이트나 타 거래소 등 타 사이트와 동일하거나 비슷한 암호를 설정하지 마세요.타 사이트에서 암호가 유출될 경우 제3자가 회원님의 계정에 접근할 위험이 있습니다.<br />
                                                  -동일한 문자가 반복되는 등 패턴이 있는 비밀번호로 만들지 마세요.<br />
                                            </div>
                                          </div>
                                          <p id='warning_message'>비밀번호 요건이 충족하지 않습니다.</p>
                                      </td>
                                    </tr>
                                    <tr class='change_password_tr3'>
                                      <th>새로운 로그인 비밀번호 확인</th>
                                      <td>
                                        <input type="password" class='user_passChk' name="password" value="" placeholder="새로운 로그인 비밀번호를 다시 입력하세요." required maxlength="15" minlength="8" />
                                        <p id='warning_message'>비밀번호가 일치하지 않습니다.</p>
                                      </td>
                                    </tr>
                                    <!-- <tr class='change_password_tr4'>
                                      <th>휴대폰 SMS 인증</th>
                                      <td>
                                        <input type="text" name="" value="" placeholder="휴대폰으로 전송된 인증번호를 입력하세요." required maxlength="6" minlength="6" />
                                        <input type="button" value="인증번호요청" >
                                        <p id='warning_message'>전송된 인증번호가 일치하지 않습니다.</p>
                                      </td>
                                    </tr>
                                    <tr class='change_password_tr5'>
                                      <th>보안 비밀번호</th>
                                      <td>
                                        <input type="password" class='user_security' name="security" value="" placeholder="보안 비밀번호를 입력하세요." maxlength="4" minlength='4' required/>
                                        <p id='warning_message'>보안 비밀번호가 일치하지 않습니다.</p>
                                      </td>
                                      </td>
                                    </tr> -->
                                  </tbody>
                                </table>
                              </div><!-- send_login_password End-->

                            </div><!-- myinfo_table_wrap End-->
                            <div class="cancel_or_apply">
                              <input type="reset" name="reset" value="취소" onclick="location.href='myinfo.php'" class="cancel_btn">
                              <input type="submit" name="submit" value="변경" onclick="location.href='myinfo_login_password_success.php'" class="agree_btn if_you_all_agree">
                            </div>
                          </form>
                        </div><!-- myinfo_sub_box End-->
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
