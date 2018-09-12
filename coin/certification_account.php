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
    <link rel="stylesheet" href="css/certification_account.css">
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
                <div class="content certification_content con_1000">

                  <div class="box certification_area">
                    <h3 class="title">인증센터</h3>
                    <div class="cer_center">
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
                            <img src="img/phone.png" alt="휴대폰인증 아이콘" />
                          </p>
                          <strong>휴대폰인증</strong>
                          <span>본인명의 휴대폰을 통하여<br/>실명을 인증해주세요.</span>
                        </li>
                        <li>
                          <img src="img/lv3.png" alt="레벨3" />
                          <p class="img_area">
                            <img src="img/key.png" alt="보안비밀번호생성 아이콘" />
                          </p>
                          <strong>보안비밀번호 생성</strong>
                          <span>안전거래를 위한 <br/>2차 비밀번호를 생성해주세요.</span>
                        </li>
                        <li>
                          <img src="img/lv4.png" alt="레벨4" class="lv4_on"/>
                          <img src="img/lv4_off.png" alt="레벨4" class="lv4_off"/>
                          <p class="img_area">
                            <img src="img/bankbook_off.png" alt="계좌인증 아이콘" class="account_off"/>
                            <img src="img/bankbook.png" alt="계좌인증 아이콘" class="account_on" />
                          </p>
                          <strong class="gray_title">계좌인증</strong>
                          <span>거래소를 이용하시 위한<br/>계좌를 인증해주요.</span>
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
                        <div class="cText_left2">

                            <strong><span>1</span>. 개인정보 수집 및 이용 동의(필수)</strong>
                            <ul>
                              <li>- 목적 : 원화(KRW) 거래를 위한 본인 확인</li>
                              <li class="account_line">- 항목 : 계좌번호,은행명</li>

                            <li><input type="checkbox" id="account_yes" class="all_agree account_agree" >
                            <label for="account_yes">
                             개인 정보 수집 및 이용에 동의 합니다.</li>
                             </ul>
                             <p id="account_malpungsun">
                               개인정보 수집 및 이용 동의해주세요.
                             </p>

                        </div>


                        <div class="cText_right2">

                          <strong><span>2</span>. 출금 계좌등록</strong>
                          <div class="account">
                            <ul class="bankname">
                              <li>은행명</li>
                              <li>계좌번호</li>
                            </ul>
                            <form action="#" method="post">
                            <ul class="bank_inner">
                              <li>
                                <select name="bankselect" id="bankselect" required>
                                  <option value="은행선택" selected="selected" disabled>은행선택</option>
                                  <option value="국민은행">국민은행</option>
                                  <option value="농협은행">농협은행</option>
                                  <option value="신한은행">신한은행</option>
                                  <option value="우리은행">우리은행</option>
                                  <option value="기업은행">기업은행</option>
                                </select>
                              </li>

                              <li><input type="text" placeholder="숫자만 입력해주세요." required class="account_number" ></li>
                            </ul>

                          </div>
                            <p>※ 본인명의 계좌만 등록 가능</p>
                            <div id="bank_complete">


                                <input type="button" name="취소" value="취소" onclick="location.href='certification.php'" class="bank_cancel">

                                <span class="account_complete">등록완료</span>
                                <input type="submit" name="등록완료" value="등록완료" class="chk_ok" />

                            </div>
                            </form>
                        </div>

                      </div>
                    </div>
                  </div><!--certification_area End-->

                </div><!-- certification_content End-->
            </div><!-- content_wrap End-->

            <!-- footer_wrap -->
            <?php include "footer.php";?>
            <!-- footer_wrap End-->

        </div><!-- container End -->
    </div><!-- wrap End -->

</body>
</html>
