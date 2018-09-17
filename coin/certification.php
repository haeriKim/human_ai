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
    <link rel="stylesheet" href="css/certification.css">
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
                <div class="content certification_content con_1250">
                  <!--content_nav -->
                  <div class="content_nav">
                    <h4>마이페이지</h4>
                    <ul>
                        <li><a href="#" title="회원정보">회원정보</a></li>
                        <li>
                          <a href="#" title="회원정보관리" class='more_menu'>회원정보관리</a>
                          <dl class="nav_dropdown info_dd off">
                              <dt><a href="#" title="로그인 비밀번호 변경" class='active'>로그인 비밀번호 변경</a></dt>
                              <dt><a href="#" title="보안비밀번호 변경">보안비밀번호 변경</a></dt>
                              <dt><a href="#" title="휴대폰번호 변경">휴대폰번호 변경</a></dt>
                              <dt><a href="#" title="계좌 변경">계좌 변경</a></dt>
                              <dt><a href="#" title="새 지갑발급">OTP 변경</a></dt>
                          </dl>
                        </li>
                        <li class='active'><a href="#" title="인증센터">인증센터</a></li>
                        <li><a href="track_ip_address.php" title="접속이력확인">접속이력확인</a></li>
                        <li>
                          <a href="#" title="알림" class='more_menu'>알림</a>
                          <dl class="nav_dropdown alarm_dd off">
                              <dt><a href="alarm.php" title="알림 상세">알림 상세</a></dt>
                              <dt><a href="#" title="알림 설정">알림 설정</a></dt>
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
                          <img src="img/lv3.png" alt="레벨3" />
                          <p class="img_area">
                            <img src="img/phone.png" alt="휴대폰인증 아이콘" />
                          </p>
                          <strong>휴대폰인증</strong>
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
                        </li>
                      </ul>

                      <div class="center_bottom">
                        <div class="cText_left">
                          <div class="current_level">
                            <strong>[ 보안인증 ]</strong>
                            <b><span class="user_name">가*다</span>님의 현재 보안등급은 <span class="user_level">레벨3</span>입니다.</b>
                            <p>
                              입출금 이용을 위해 보안등급 상향이 필요합니다.
                            </p>
                          </div>
                          <div class="center_rule">
                            <strong>[ CCE 고객의 안전한 투자를 위한 이용법칙 ]</strong>
                            <p>-만 19세 이하는 거래 할 수 없습니다.</p>
                            <p class="important">-이메일 인증완료 후 암호화폐 거래소 이용이 가능합니다.</p>
                            <p class="important">-KRW 입금 출금은 4단계(Google OTP) 인증완료 후 이용이 가능합니다.</p>
                            <p class="important">-인증된 정보를 변경하시려면 <span>'마이페이지 > 회원정보관리'</span> 에서 이용해주세요.</p>
                          </div>
                        </div>
                        <div class="cText_right">
                          <ul>
                            <li>
                              <img src="img/lv1.png" alt="레벨1"/>
                              <p>이메일인증<span>*필수</span></p>
                              <span class="c_btn c_complete">인증완료</span>
                            </li>
                            <li>
                              <img src="img/lv2.png" alt="레벨2"/>
                              <p>보안비밀번호 생성<span>*필수</span></p>
                              <span class="c_btn c_complete">인증완료</span>
                            </li>
                            <li>
                              <img src="img/lv3.png" alt="레벨3"/>
                              <p>휴대폰인증<span>*필수</span></p>
                              <span class="c_btn c_complete">인증완료</span>
                            </li>
                            <li>
                              <img src="img/lv4.png" alt="레벨4"/>
                              <p>출금계좌 등록<span class="recommend">*권장</span></p>
                              <a href="certification_account.php" class="c_btn lv4_ing">인증하기</a>
                              <span class="c_btn complete">인증완료</span>
                            </li>
                            <li>
                              <img src="img/lv5.png" alt="레벨5"/>
                              <p>Google OTP인증<span class="recommend">*권장</span></p>
                              <a href="#" class="c_btn lv5_ing">인증하기</a>
                              <span class="c_btn ing disable">인증하기</span>
                              <span class="c_btn complete">인증완료</span>
                              <p id="malpungsun">
                                출금계좌 등록 후 Google OTP인증이 가능합니다.
                              </p>
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
