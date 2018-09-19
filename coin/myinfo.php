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
    <link rel="stylesheet" href="css/myinfo.css">
    <link rel="stylesheet" href="css/sub_menu.css">
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
                <div class="content myinfo_content con_1250">
                  <!--content_nav -->
                  <div class="content_nav">
                    <h4>마이페이지</h4>
                    <ul>
                        <li class="active"><a href="#" title="회원정보">회원정보</a></li>
                        <li>
                          <a href="#" title="회원정보관리" class='more_menu'>회원정보관리</a>
                          <dl class="nav_dropdown info_dd off">
                              <dt><a href="myinfo_login_password.php" title="로그인 비밀번호 변경" >로그인 비밀번호 변경</a></dt>
                              <dt><a href="#" title="보안비밀번호 변경">보안비밀번호 변경</a></dt>
                              <dt><a href="#" title="휴대폰번호 변경">휴대폰번호 변경</a></dt>
                              <dt><a href="#" title="계좌 변경">계좌 변경</a></dt>
                              <dt><a href="#" title="새 지갑발급">OTP 변경</a></dt>
                          </dl>
                        </li>
                        <li><a href="certification.php" title="인증센터">인증센터</a></li>
                        <li><a href="track_ip_address.php" title="접속이력확인">접속이력확인</a></li>
                        <li>
                          <a href="#" title="알림" class='more_menu'>알림</a>
                          <dl class="nav_dropdown alarm_dd off">
                              <dt><a href="alarm.php" title="알림 상세">알림 상세</a></dt>
                              <dt><a href="alarm_sangse.php" title="알림 설정">알림 설정</a></dt>
                          </dl>
                        </li>
                    </ul>
                  </div><!-- content_nav End-->
                  <div class="box myinfo_area">
                    <h3 class="title">회원정보</h3>
                    <div class="myinfo_main_box mypage_content">
                      <div class="myinfo">
                      <h4>회원정보</h4>
                      <div class="button_box">
                        <a href="#" class="btn_small">1:1문의</a>
                        <a href="#" class="btn_small">이용안내</a>
                      </div>
                      <div class="myinfo_sub_box">
                        <div class="myinfo_table_wrap">
                          <table class="left_thick_table myinfo_table float_table">
                              <tbody>
                                  <tr>
                                      <th>이름</th>
                                      <td>가*다</td>
                                  </tr>
                                  <tr>
                                      <th>이메일</th>
                                      <td>abc@naver.com</td>
                                  </tr>
                                  <tr>
                                      <th>휴대폰</th>
                                      <td>010-****-****  <a href="#" class="btn_small">휴대폰 번호 변경</a></td>
                                  </tr>
                                  <tr>
                                      <th>등급</th>
                                      <td>Level 3</td>
                                  </tr>
                              </tbody>
                          </table>
                          <table class="left_thick_table myinfo_table float_table">
                              <tbody>
                                <tr>
                                    <th>비밀번호</th>
                                    <td><a href="myinfo_login_password.php" class="btn_medium">비밀번호 변경</a></td>
                                </tr>
                                <tr>
                                    <th>보안비밀번호</th>
                                    <td><a href="#" class="btn_medium ">보안비밀번호 변경</a></td>
                                </tr>
                                <tr>
                                    <th>계좌번호</th>
                                    <td>OO은행
                                      <span class="account_number">1234-*******-11-123</span>
                                      <a href="#" class="btn_small">계좌번호 변경</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>OTP</th>
                                    <td><a href="#" class="btn_medium">OTP 변경</a></td>
                                </tr>
                              </tbody>
                          </table>
                        </div><!-- myinfo_table_wrap End -->
                      </div><!-- myinfo_sub_box End-->
                    </div><!-- cercenter End-->
                    <div class="cer_center">
                      <h4 class="second">인증현황</h4>
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
                          <img src="img/lv3.png" alt="레벨3" />
                          <p class="img_area">
                            <img src="img/phone.png" alt="휴대폰인증 아이콘" />
                          </p>
                          <strong>실명인증</strong>
                          <span>본인명의 휴대폰을 통하여<br/>실명을 인증해주세요.</span>
                        </li>
                        <li>
                          <img src="img/lv4.png" alt="레벨4" class="lv4_on"/>
                          <img src="img/lv4_off.png" alt="레벨4" class="lv4_off"/>
                          <p class="img_area">
                            <img src="img/bankbook_off.png" alt="계좌인증 아이콘" class="account_off"/>
                            <img src="img/bankbook.png" alt="계좌인증 아이콘" class="account_on" />
                          </p>
                          <strong class="gray_title">계좌인증</strong>
                          <span>거래소를 이용하기 위한<br/>계좌를 인증해주세요.</span>
                          <button class="btn_large" onclick="location.href='certification.php'" type="button">인증하기</button>
                        </li>
                        <li>
                          <img src="img/lv5.png" alt="레벨5" class="lv5_on">
                          <img src="img/lv5_off.png" alt="레벨4" class="lv5_off"/>
                          <p class="img_area">
                            <img src="img/lock_off.png" alt="OTP인증 아이콘" class="otp_off"/>
                            <img src="img/lock.png" alt="OTP인증인증 아이콘" class="otp_on" />
                          </p>
                          <strong class="gray_title">OTP인증</strong>
                          <span>실제 사용 중인<br/>OTP로 인증해주세요.</span>
                          <button class="btn_large" onclick="location.href='certification.php'" type="button">인증하기</button>
                        </li>
                      </ul>
                      <p class="quit_page">
                        <a href="leave_member_01.php">더이상 CCE를 이용하고 싶지 않다면?</a>
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

</body>
</html>
