<!DOCTYPE html>
<html lang="ko">
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
    <link rel="stylesheet" href="css/certification_security.css">
    <link rel="stylesheet" href="css/sub_menu.css">
    <link rel="stylesheet" href="css/popup.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/common.js"></script>
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
                        <li><a href="myinfo.php" title="회원정보">회원정보</a></li>
                        <li>
                          <a href="myinfo_login_password.php" title="회원정보관리" class='more_menu'>회원정보관리</a>
                          <dl class="nav_dropdown info_dd off">
                              <dt><a href="myinfo_login_password.php" title="로그인 비밀번호 변경" class='active'>로그인 비밀번호 변경</a></dt>
                              <dt><a href="myinfo_security_password.php" title="보안비밀번호 변경">보안비밀번호 변경</a></dt>
                              <dt><a href="myinfo_phone.php" title="휴대폰번호 변경">휴대폰번호 변경</a></dt>
                              <dt><a href="myinfo_account.php" title="계좌 변경">계좌 변경</a></dt>
                              <dt><a href="myinfo_OTP.php" title="OTP 변경">OTP 변경</a></dt>
                          </dl>
                        </li>
                        <li class='active'><a href="#" title="인증센터">인증센터</a></li>
                        <li><a href="track_ip_address.php" title="접속이력확인">접속이력확인</a></li>
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
                          <img src="img/lv2.png" alt="레벨2" />
                          <p class="img_area">
                            <img src="img/key.png" alt="보안비밀번호생성 아이콘" />
                          </p>
                          <strong>보안비밀번호 생성</strong>
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
                          <span>거래소를 이용하시 위한<br/>계좌를 인증해주요.</span>
                        </li>
                        <li>

                          <img src="img/lv5_off.png" alt="레벨4" class="lv5_off"/>
                          <p class="img_area">
                            <img src="img/lock_off.png" alt="OTP인증 아이콘" class="otp_off"/>

                          </p>
                          <strong class="gray_title">OTP인증</strong>
                          <span>실제 사용 중인<br/>OTP로 인증해주세요.</span>
                        </li>
                      </ul>

                      <!-- myinfo_small_info_box -->
                      <div class="myinfo_sub_box ">
                        <form class="" action="#" method="post">
                          <div class="myinfo_table_wrap myinfo_table_wrap2">
                            <!-- send_login_password -->
                            <div class="send_login_password">
                              <p class="table_title">실명인증</p>
                              <form action="#" class="phone2">
                              <table class='left_thick_table'>
                                <tbody>

                                    <th>휴대폰번호</th>
                                    <td><input type="password" class='user_pass' name="password" value="" placeholder="휴대폰번호를 입력해주세요" required maxlength="12" minlength="12" /></td>
                                  </tr>

                                  <tr>
                                    <th>휴대폰 SMS 인증</th>
                                    <td>
                                      <input type="text" name="" value="" placeholder="휴대폰으로 전송된 인증번호를 입력하세요." required maxlength="6" minlength="6" />
                                      <input type="button" value="인증번호요청" id="request_count" class="request_number">
                                      <input type="submit" value="인증번호확인" id="confirm_count" class="cofirm_number">
                                      <span id="count_down" class="count_down">03:00</span>
                                      <p id='warning_message'>인증번호가 일치하지 않습니다.</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th>보안 비밀번호</th>
                                    <td>
                                      <input type="password" class='user_security' name="security" value="" placeholder="보안 비밀번호를 입력하세요." maxlength="4" minlength='4' required/>
                                      <p id='warning_message'>보안비밀번호가 일치하지 않습니다.</p>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="cancel_or_apply">
                                <input type="button" name="" value="취소" onclick="location.href='myinfo.php'"class="cancel_btn">
                                <input type="submit" name="" value="등록" onclick="location.href='certification_phone_success.php'" class="agree_btn">
                              </div>

                              </form>
                            </div><!-- send_login_password End-->

                          </div><!-- myinfo_table_wrap End-->

                        </form>
                      </div><!-- myinfo_sub_box End-->


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

    <div id="full">
                <!-- full_content -->
                <div id="popupbox" class='box popup phone_change_box'>
                  <div class="full_inner">
                    <h2>인증번호 발송완료</h2>
                    <div class="popupbox_text">
                      <p>등록하신 휴대폰으로 인증번호를 발송하였습니다.</p>
                    </div>
                    <div class="cancel_or_apply">
                      <input type="button" name="" value="확인" class="agree_btn phone2_ok">
                    </div>

                  </div>
                </div><!-- full_content End-->
                <div id="shadow"></div>
        </div>

</body>
</html>
