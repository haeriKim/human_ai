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
    <link rel="stylesheet" href="css/certification.css">
    <link rel="stylesheet" href="css/sub_menu.css">
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
                          <img src="img/lv2.png" alt="레벨2" class='lv2_on'/>
                          <img src="img/lv2_off.png" alt="레벨2_off" class='lv2_off'/>
                          <p class="img_area">
                            <img src="img/key.png" alt="보안비밀번호생성 아이콘" class='lv2_on'/>
                            <img src="img/key_off.png" alt="보안비밀번호생성 아이콘_off" class='lv2_off'/>
                          </p>
                          <strong class='navy_title lv2_on'>보안 비밀번호생성</strong>
                          <strong class="gray_title lv2_off">보안 비밀번호생성</strong>
                          <span>안전거래를 위한 <br/>보안비밀번호를 생성해주세요.</span>
                        </li>
                        <li>
                          <img src="img/lv3.png" alt="레벨3" class='lv3_on'/>
                          <img src="img/lv3_off.png" alt="레벨3_off" class='lv3_off'/>
                          <p class="img_area">
                            <img src="img/phone.png" alt="실명인증 아이콘" class='lv3_on'/>
                            <img src="img/phone_off.png" alt="실명인증 아이콘_off" class='lv3_off'/>
                          </p>
                          <strong class='navy_title lv3_on'>실명인증</strong>
                          <strong class="gray_title lv3_off">실명인증</strong>
                          <span>본인명의 휴대폰을 통하여<br/>실명을 인증해주세요.</span>
                        </li>
                        <li>
                          <img src="img/lv4.png" alt="레벨4" class="lv4_on"/>
                          <img src="img/lv4_off.png" alt="레벨4_off" class="lv4_off"/>
                          <p class="img_area">
                            <img src="img/bankbook.png" alt="계좌인증 아이콘" class="lv4_on"/>
                            <img src="img/bankbook_off.png" alt="계좌인증 아이콘_off" class="lv4_off"/>
                          </p>
                          <strong class='navy_title lv4_on'>계좌인증</strong>
                          <strong class="gray_title lv4_off">계좌인증</strong>
                          <span>거래소를 이용하기 위한<br/>계좌를 인증해주세요.</span>
                        </li>
                        <li>
                          <img src="img/lv5.png" alt="레벨5" class="lv5_on">
                          <img src="img/lv5_off.png" alt="레벨5_off" class="lv5_off"/>
                          <p class="img_area">
                            <img src="img/lock.png" alt="OTP 인증 아이콘" class="lv5_on"/>
                            <img src="img/lock_off.png" alt="OTP 인증 아이콘_off" class="lv5_off" />
                          </p>
                          <strong class='navy_title lv5_on'>OTP 인증</strong>
                          <strong class="gray_title lv5_off">OTP 인증</strong>
                          <span>실제 사용 중인<br/>OTP로 인증해주세요.</span>
                        </li>
                      </ul>

                      <div class="center_bottom">
                        <div class="cText_left">
                          <div class="current_level">
                            <strong>[ 보안인증 ]</strong>
                            <b>
                                회원님의 현재 보안등급은
                                <span class='level_color'>Level
                                    <span class="user_level lv_01">1</span>
                                    <span class="user_level lv_02">2</span>
                                    <span class="user_level lv_03">3</span>
                                    <span class="user_level lv_04">4</span>
                                    <span class="user_level lv_05">5</span>
                                </span>입니다.
                            </b>
                            <p class='need_more_level'>
                              입출금 이용을 위해 보안등급 상향이 필요합니다.
                            </p>
                            <p class='max_level'>
                              안전한 거래를 위한 모든 보안단계가 인증되었습니다.
                            </p>
                          </div>
                          <div class="center_rule">
                            <strong>[ The Alls 고객의 안전한 투자를 위한 이용법칙 ]</strong>
                            <p>-만 19세 이하는 거래 할 수 없습니다.</p>
                            <p class="important">-매수/매도 및 코인입금은 Level 1(이메일인증) 인증 완료 후 이용이 가능합니다.</p>
                            <p class="important">-원화입금은 Level 4(계좌인증) 인증 완료 후 이용이 가능합니다.</p>
                            <p class="important">-원화/코인출금은 Level 5(OTP 인증)까지 인증 완료 후 이용이 가능합니다.</p>
                            <p class="important">-인증된 정보를 변경하시려면 <span class='underline'>'마이페이지 > 회원 정보관리'</span> 에서 이용해주세요.</p>
                          </div>
                        </div>
                        <div class="cText_right">
                          <ul>
                            <li class='cer_lv_01'>
                              <img src="img/lv1.png" alt="레벨1"/>
                              <p>이메일인증<span>*필수</span></p>
                              <span class="c_btn c_complete">인증완료</span>
                            </li>
                            <li class='cer_lv_02'>
                              <img src="img/lv2.png" alt="레벨2"/>
                              <p>보안 비밀번호생성<span class='recommend'>*권장</span></p>
                              <a href="certification_security_password.php" class="c_btn go_cer">인증하기</a>
                              <span class="c_btn c_complete">인증완료</span>
                            </li>
                            <li class='cer_lv_03'>
                              <img src="img/lv3.png" alt="레벨3"/>
                              <p>실명인증<span class='recommend'>*권장</span></p>
                              <a href="certification_phone.php" class="c_btn go_cer">인증하기</a>
                              <span class="c_btn c_complete">인증완료</span>
                            </li>
                            <li class='cer_lv_04'>
                              <img src="img/lv4.png" alt="레벨4"/>
                              <p>계좌인증<span class="recommend">*권장</span></p>
                              <a href="certification_account.php" class="c_btn go_cer">인증하기</a>
                              <span class="c_btn c_complete">인증완료</span>
                            </li>
                            <li class='cer_lv_05'>
                              <img src="img/lv5.png" alt="레벨5"/>
                              <p>Google OTP 인증<span class="recommend">*권장</span></p>
                              <a href="certification_OTP.php" class="c_btn go_cer">인증하기</a>
                              <span class="c_btn c_complete">인증완료</span>
                            </li>
                          </ul>
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

</body>
</html>
