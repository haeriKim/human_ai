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
    <link rel="stylesheet" href="css/myinfo.css">
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
                <div class="content myinfo_content con_1250">
                  <!--content_nav -->
                  <div class="content_nav">
                    <h4>마이페이지</h4>
                    <ul>
                        <li class="active"><a href="#" title="회원 정보">회원 정보</a></li>
                        <li>
                          <a href="#" title="회원 정보관리" class='more_menu'>회원 정보관리</a>
                          <dl class="nav_dropdown info_dd off">
                              <dt><a href="myinfo_login_password.php" title="로그인 비밀번호변경" >로그인 비밀번호변경</a></dt>
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
                  <div class="box myinfo_area">
                    <h3 class="title">회원 정보</h3>
                    <div class="myinfo_main_box mypage_content">
                      <div class="myinfo">
                      <h4>회원 정보</h4>
                      <div class="button_box">
                        <a href="customer_question.php" class="btn_small Q_and_A">1:1문의</a>
                        <a href="#" class="btn_small using_guide">이용안내</a>
                      </div>
                      <div class="myinfo_sub_box">
                        <div class="myinfo_table_wrap">
                          <table class="left_thick_table myinfo_table float_table">
                              <tbody>
                                  <tr>
                                      <th>이름</th>
                                      <td>
                                          <span class='user_name'>가*다</span>
                                          <span class='no_name'>-</span>
                                      </td>
                                  </tr>
                                  <tr>
                                      <th>이메일</th>
                                      <td>
                                          <span class='user_mail'>abc@naver.com</span>
                                      </td>
                                  </tr>
                                  <tr class='myinfo_table_tr'>
                                      <th>휴대폰</th>
                                      <td>
                                          <span class='user_phone'>010-1***-***0</span>
                                          <span class='no_phone'>-</span>
                                          <a href="myinfo_phone.php" class="btn_small change_phone_num">휴대폰 번호변경</a>
                                          <a href="certification_phone.php" class="btn_small certify_realname">실명인증</a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <th>등급</th>
                                      <td>Level
                                          <span class='user_level level_01'>1</span>
                                          <span class='user_level level_02'>2</span>
                                          <span class='user_level level_03'>3</span>
                                          <span class='user_level level_04'>4</span>
                                          <span class='user_level level_05'>5</span>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                          <table class="left_thick_table myinfo_table float_table">
                              <tbody>
                                <tr>
                                    <th>로그인 비밀번호</th>
                                    <td><a href="myinfo_login_password.php" class="btn_medium">로그인 비밀번호변경</a></td>
                                </tr>
                                <tr>
                                    <th>보안 비밀번호</th>
                                    <td>
                                        <a href="myinfo_security_password.php" class="btn_medium change_securityNum">보안 비밀번호변경</a>
                                        <a href="myinfo_security_change.php" class="change_text">기억나지 않으시다면?</a>
                                        <a href="certification_security_password.php" class="btn_medium make_securityNum">보안 비밀번호생성</a>
                                    </td>
                                </tr>
                                <tr class='myinfo_table_tr'>
                                    <th>계좌 정보</th>
                                    <td>
                                      <p class="account_number">
                                          <span class='bankName'>OO은행</span>
                                          <span class='user_account'>1234-*******-11-123</span>
                                      </p>
                                      <span class='no_account'>-</span>
                                      <a href="myinfo_account.php" class="btn_medium change_accountNum">계좌변경</a>
                                      <a href="certification_account.php" class="btn_medium certify_accountNum">계좌인증</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>OTP</th>
                                    <td>
                                        <span class='no_OTP'>-</span>
                                        <a href="certification_OTP.php" class="btn_medium certify_OTP">OTP 인증</a>
                                        <a href="myinfo_OTP_change.php" class="btn_medium change_OTP">OTP 비활성화</a>
                                        <a href="myinfo_OTP.php" class="change_text want_reset">초기화를 원하신다면?</a>
                                    </td>
                                </tr>
                              </tbody>
                          </table>
                        </div><!-- myinfo_table_wrap End -->
                      </div><!-- myinfo_sub_box End-->
                    </div><!-- cercenter End-->
                    <div class="cer_center">
                      <h4 class="second">인증현황</h4>
                      <ul class="cer_level">
                        <li class='cer_level_01'>
                          <img src="img/lv1.png" alt="레벨1"/>
                          <p class="img_area">
                            <img src="img/mailbox.png" alt="이메일인증 아이콘"/>
                          </p>
                          <strong>이메일인증</strong>
                          <span>실제 사용 중인<br/>이메일 계정을 인증해주세요.</span>
                        </li>
                        <li class='cer_level_02'>
                          <img src="img/lv2.png" alt="레벨2"  class='lv2_on'/>
                          <img src="img/lv2_off.png" alt="레벨2" class='lv2_off'/>
                          <p class="img_area">
                            <img src="img/key.png" alt="보안비밀번호생성 아이콘" class='lv2_on'/>
                            <img src="img/key_off.png" alt="보안비밀번호생성 아이콘" class='lv2_off'/>
                          </p>
                          <strong class='navy_title'>보안 비밀번호생성</strong>
                          <strong class="gray_title">보안 비밀번호생성</strong>
                          <span>안전거래를 위한 <br/>보안 비밀번호를 생성해주세요.</span>
                          <button class="btn_large" onclick="location.href='certification_security_password.php'" type="button">인증하기</button>
                        </li>
                        <li class='cer_level_03'>
                          <img src="img/lv3.png" alt="레벨3" class='lv3_on'/>
                          <img src="img/lv3_off.png" alt="레벨3" class="lv3_off"/>
                          <p class="img_area">
                            <img src="img/phone.png" alt="휴대폰인증 아이콘" class='lv3_on'/>
                            <img src="img/phone_off.png" alt="휴대폰인증 아이콘" class='lv3_off'/>
                          </p>
                          <strong class='navy_title'>실명인증</strong>
                          <strong class="gray_title">실명인증</strong>
                          <span>본인명의 휴대폰을 통하여<br/>실명을 인증해주세요.</span>
                          <button class="btn_large" onclick="location.href='certification_phone.php'" type="button">인증하기</button>
                        </li>
                        <li class='cer_level_04'>
                          <img src="img/lv4.png" alt="레벨4" class="lv4_on"/>
                          <img src="img/lv4_off.png" alt="레벨4" class="lv4_off"/>
                          <p class="img_area">
                            <img src="img/bankbook.png" alt="계좌인증 아이콘" class="lv4_on" />
                            <img src="img/bankbook_off.png" alt="계좌인증 아이콘" class="lv4_off"/>
                          </p>
                          <strong class='navy_title'>계좌인증</strong>
                          <strong class="gray_title">계좌인증</strong>
                          <span>거래소를 이용하기 위한<br/>계좌를 인증해주세요.</span>
                          <button class="btn_large" onclick="location.href='certification_account.php'" type="button">인증하기</button>
                        </li>
                        <li class='cer_level_05'>
                          <img src="img/lv5.png" alt="레벨5" class="lv5_on">
                          <img src="img/lv5_off.png" alt="레벨4" class="lv5_off"/>
                          <p class="img_area">
                            <img src="img/lock.png" alt="OTP 인증인증 아이콘" class="lv5_on" />
                            <img src="img/lock_off.png" alt="OTP 인증 아이콘" class="lv5_off"/>
                          </p>
                          <strong class='navy_title'>OTP 인증</strong>
                          <strong class="gray_title">OTP 인증</strong>
                          <span>실제 사용 중인<br/>OTP로 인증해주세요.</span>
                          <button class="btn_large" onclick="location.href='certification_OTP.php'" type="button">인증하기</button>
                        </li>
                      </ul>
                      <p class="quit_page">
                        <a href="leave_member_01.php">The Alls를 이용하고 싶지 않으시다면?</a>
                      </p>
                    </div><!-- cercenter End-->
                    </div><!-- myinfo_main_box End -->
                  </div><!--myinfo_area End-->
                </div><!-- myinfo_content End-->
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
