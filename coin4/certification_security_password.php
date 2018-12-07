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
    <link rel="stylesheet" href="css/certification_myInfo.css">
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
                        <li>
                          <a href="myinfo_login_password.php" title="회원 정보관리" class='more_menu'>회원 정보관리</a>
                          <dl class="nav_dropdown info_dd off">
                            <dt><a href="myinfo_login_password.php" title="로그인 비밀번호변경">로그인 비밀번호변경</a></dt>
                            <dt><a href="myinfo_security_password.php" title="보안 비밀번호변경">보안 비밀번호변경</a></dt>
                            <dt><a href="myinfo_security_change.php" title="보안 비밀번호 초기화">보안 비밀번호 초기화</a></dt>
                            <dt><a href="myinfo_phone.php" title="휴대폰 번호변경">휴대폰 번호변경</a></dt>
                            <dt><a href="myinfo_account.php" title="계좌변경">계좌변경</a></dt>
                            <dt><a href="myinfo_OTP.php" title="OTP 초기화">OTP 초기화</a></dt>
                            <dt><a href="myinfo_OTP_change.php" title="OTP 비활성화">OTP 비활성화</a></dt>
                          </dl>
                        </li>
                        <li class='active'><a href="#" title="인증센터">인증센터</a></li>
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

                  <div class="box certification_area">
                    <h3 class="title">인증센터</h3>
                    <div class="cer_center mypage_content">
                      <ul class="cer_level">
                        <li>
                          <img src="img/lv1.png" alt="레벨1"/>
                          <p class="img_area">
                            <img src="img/mailbox.png" alt="이메일인증 아이콘"/>
                          </p>
                          <strong>이메일인증</strong>
                          <span>실제 사용 중인<br/>이메일 계정을 인증해주세요.</span>
                        </li>
                        <li>
                          <img src="img/lv2_off.png" alt="레벨2" />
                          <p class="img_area">
                            <img src="img/key_off.png" alt="보안비밀번호생성 아이콘" />
                          </p>
                          <strong class="gray_title">보안비밀번호 생성</strong>
                          <span>안전거래를 위한 <br/>보안비밀번호를 생성해주세요.</span>
                        </li>
                        <li>
                          <img src="img/lv3_off.png" alt="레벨3" />
                          <p class="img_area">
                            <img src="img/phone_off.png" alt="휴대폰인증 아이콘" />
                          </p>
                          <strong class="gray_title">실명인증</strong>
                          <span>본인명의 휴대폰을 통하여<br/>실명을 인증해주세요.</span>
                        </li>
                        <li>

                          <img src="img/lv4_off.png" alt="레벨4" class="lv4_off"/>
                          <p class="img_area">
                            <img src="img/bankbook_off.png" alt="계좌인증 아이콘" class="account_off"/>

                          </p>
                          <strong class="gray_title">계좌인증</strong>
                          <span>거래소를 이용하시 위한<br/>계좌를 인증해주세요.</span>
                        </li>
                        <li>

                          <img src="img/lv5_off.png" alt="레벨4" class="lv5_off"/>
                          <p class="img_area">
                            <img src="img/lock_off.png" alt="OTP 인증 아이콘" class="otp_off"/>

                          </p>
                          <strong class="gray_title">OTP 인증</strong>
                          <span>실제 사용 중인<br/>OTP로 인증해주세요.</span>
                        </li>
                      </ul>

                      <!-- myinfo_small_info_box -->
                      <div class="myinfo_sub_box ">
                        <form class="" action="#" method="post">
                          <div class="myinfo_table_wrap myinfo_table_wrap2">
                            <!-- send_login_password -->
                            <div class="send_login_password">
                              <p class="table_title">보안비밀번호 생성</p>
                              <form action="#" class="phone2">
                              <table class='left_thick_table'>
                                <tbody>

                                    <th>현재 로그인 비밀번호</th>
                                    <td><input type="password" class='user_pass' name="password" value="" placeholder="현재 로그인 비밀번호를 입력하세요." required maxlength="12" minlength="12" />
                                        <p id='warning_message'>비밀번호가 일치하지 않습니다.</p>
                                    </td>
                                  </tr>

                                  <tr>
                                    <th>새로운 보안비밀번호</th>
                                    <td>
                                      <input type="password" name="" value="" placeholder="새로운 보안 비밀번호를 입력하세요." required maxlength="4" minlength="4" />
                                      <div class="question_smallbox"><img src="img/question.png">
                                        <div class="password_question_detail2">
                                              <strong>
                                                안전한 보안비밀번호 작성법
                                              </strong>
                                              - 숫자로 이루어진 4자리 보안 비밀번호를 입력해주세요.<br/>
                                              - 해킹사고 방지를 위해 보안비밀번호를 자주 변경해주세요.<br/>
                                              - 4자리의 중복 및 연속 숫자, 휴대폰 번호, 이메일 주소의 숫자,<br/>
                                               비밀번호에 포함된 숫자 등 추측이 가능한 번호는 피해주세요.
                                        </div>
                                      </div>
                                      <p id='warning_message'>비밀번호 요건이 충족하지 않습니다.</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th>새로운 보안비밀번호 확인</th>
                                    <td>
                                      <input type="password" class='user_security' name="security" value="" placeholder="새로운 보안 비밀번호를 다시 입력하세요." maxlength="4" minlength='4' required/>
                                      <p id='warning_message'>비밀번호가 일치하지 않습니다.</p>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="cancel_or_apply">
                                <input type="button" name="" value="취소" onclick="location.href='certification.php'"class="cancel_btn">
                                <input type="submit" name="" value="등록" onclick="location.href='certification_security_password_success.php'" class="agree_btn">
                              </div>

                              </form>
                            </div>
                          </div>
                        </div>


                    </div>
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
